<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
 use App\Models\User;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\DB;
 use App\Models\chef_profile; ;
use App\Models\chef_document;
use App\Models\chef_bank;

class ChefController extends Controller
{
    public function cheflist(){

         $chefs = User::role('chef')
        ->with(['chefProfile', 'chefDocuments', 'chefBank'])
        ->latest()
        ->get();

    return view('admin.chef.Cheflist', compact('chefs'));
    }

    public function chefadd(Request $request){
        return view('admin.chef.chefadd');

    }
    public function chefstore(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'mobile' => 'required|digits:10|unique:users',
        'email' => 'nullable|email|unique:users',
        'gender' => 'required',
        'dob' => 'required|date',
        'password' => 'required|min:6',

        // Address
        'current_building' => 'required',
        'current_street' => 'required',
        'current_city' => 'required',
        'current_state' => 'required',
        'current_pincode' => 'required',

        'permanent_building' => 'required',
        'permanent_street' => 'required',
        'permanent_city' => 'required',
        'permanent_state' => 'required',
        'permanent_pincode' => 'required',

        // Documents
        'aadhaar_front' => 'required|image',
        'aadhaar_back' => 'required|image',
        'pancard' => 'required|image',
        'address_proof' => 'nullable|image',

        // Bank
        'account_holder_name' => 'required',
        'account_number' => 'required',
        'ifsc_code' => 'required',
    ]);

    DB::beginTransaction();

    try {
        // Create User
        $chef = User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'password' => Hash::make($request->password),
        ]);

        $chef->assignRole('chef');

        // Address
        chef_profile::create([
            'user_id' => $chef->id,
            'current_building' => $request->current_building,
            'current_street' => $request->current_street,
            'current_city' => $request->current_city,
            'current_state' => $request->current_state,
            'current_pincode' => $request->current_pincode,
            'permanent_building' => $request->permanent_building,
            'permanent_street' => $request->permanent_street,
            'permanent_city' => $request->permanent_city,
            'permanent_state' => $request->permanent_state,
            'permanent_pincode' => $request->permanent_pincode,
        ]);

        // Documents Upload
        chef_document::create([
            'user_id' => $chef->id,
            'aadhaar_front' => $request->file('aadhaar_front')->store('documents','public'),
            'aadhaar_back' => $request->file('aadhaar_back')->store('documents','public'),
            'pancard' => $request->file('pancard')->store('documents','public'),
            'address_proof' => $request->file('address_proof')?->store('documents','public'),
        ]);

        // Bank
        chef_bank::create([
            'user_id' => $chef->id,
            'account_holder_name' => $request->account_holder_name,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
        ]);

        DB::commit();

        return redirect()->route('web-admin.cheflist')->with('success','Chef Added Successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error',$e->getMessage());
    }
}


    public function chefedit($id)
{
    $chef = User::with(['chefProfile','chefDocuments','chefBank'])->findOrFail($id);

    return view('admin.chef.chefedit', compact('chef'));
}
  

public function chefupdate(Request $request, $id)
{
    $chef = User::findOrFail($id);

    // Update user
    $chef->update($request->only(['name','mobile','email','gender','dob']));

    // Update profile
    $chef->chefProfile()->updateOrCreate(
    ['user_id' => $chef->id],
    [
        'current_building'   => $request->current_building,
        'current_street'     => $request->current_street,
        'current_city'       => $request->current_city,
        'current_state'      => $request->current_state,
        'current_pincode'    => $request->current_pincode,
        'permanent_building' => $request->permanent_building,
        'permanent_street'   => $request->permanent_street,
        'permanent_city'     => $request->permanent_city,
        'permanent_state'    => $request->permanent_state,
        'permanent_pincode'  => $request->permanent_pincode,
    ]
);

    // Update bank
    $chef->chefBank()->updateOrCreate(
    ['user_id' => $chef->id], // check condition
    [
        'account_holder_name' => $request->account_holder_name,
        'account_number'      => $request->account_number,
        'ifsc_code'           => $request->ifsc_code,
    ]
);

    // Update documents if uploaded
    $documentData = [];

// Aadhaar Front
if ($request->hasFile('aadhaar_front')) {
    $documentData['aadhaar_front'] = $request->file('aadhaar_front')->store('chef_documents', 'public');
}

// Aadhaar Back
if ($request->hasFile('aadhaar_back')) {
    $documentData['aadhaar_back'] = $request->file('aadhaar_back')->store('chef_documents', 'public');
}

// Pancard
if ($request->hasFile('pancard')) {
    $documentData['pancard'] = $request->file('pancard')->store('chef_documents', 'public');
}

// Address Proof (optional)
if ($request->hasFile('address_proof')) {
    $documentData['address_proof'] = $request->file('address_proof')->store('chef_documents', 'public');
}

if (!empty($documentData)) {
    $chef->chefDocuments()->updateOrCreate(
        ['user_id' => $chef->id],
        $documentData
    );
}

    return redirect()->route('web-admin.cheflist')->with('success','Chef updated successfully');
}

public function destroy($id)
{
    // dd('kavi');
    DB::beginTransaction();

    try {
        $chef = User::role('chef')->findOrFail($id);

        // Delete related records safely
        if ($chef->chefProfile) {
            $chef->chefProfile->delete();
        }

        if ($chef->chefDocument) {
            $chef->chefDocument->delete();
        }

        if ($chef->chefBank) {
            $chef->chefBank->delete();
        }

        // Remove role first (optional but clean)
        $chef->removeRole('chef');

        // Finally delete user
        $chef->delete();

        DB::commit();

        return redirect()->back()->with('success', 'Chef deleted successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Delete failed: '.$e->getMessage());
    }
}

public function toggleAvailability($id)
{
    $chef = User::with('chefProfile')->findOrFail($id);

    if (!$chef->chefProfile) {
        return back()->with('error', 'Chef profile not found');
    }

    $chef->chefProfile->is_available = !$chef->chefProfile->is_available;
    $chef->chefProfile->save();

    return back()->with('success', 'Chef availability updated successfully');
}


}