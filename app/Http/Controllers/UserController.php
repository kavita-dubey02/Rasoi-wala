<?php

namespace App\Http\Controllers;
 use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
 use App\Models\User;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Support\Facades\DB;
 use App\Models\chef_profile; ;
use App\Models\chef_document;
use App\Models\chef_bank;

class UserController extends Controller
{
    public function userlist(){

         $chefs = User::role('customer')
        ->get();

    return view('admin.user.Userlist', compact('chefs'));
    }

    public function useradd(Request $request){
        return view('admin.user.Useradd');

    }

    public function userstore(Request $request)
{
    $request->validate([
         'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'mobile' => 'required|digits:10|unique:users,mobile',
        'password' => 'required|min:6|same:confirm-password',
    ]);

    DB::beginTransaction();

    try {
        // Create User
        $chef = User::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $chef->assignRole('customer');

        DB::commit();

        return redirect()->route('web-admin.userlist')->with('success','User Added Successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return back()->with('error',$e->getMessage());
    }
}


     public function useredit($id)
{
    $chef = User::findOrFail($id);

    return view('admin.user.useredit', compact('chef'));
}

public function userupdate(Request $request, $id)
{
    $chef = User::findOrFail($id);

    // Update user
    $chef->update($request->only(['name','mobile','email']));

   
    return redirect()->route('web-admin.userlist')->with('success','User updated successfully');
}

public function destroy($id)
{
    // dd('kavi');
    DB::beginTransaction();

    try {
        $chef = User::role('customer')->findOrFail($id);

        
        // Remove role first (optional but clean)
        $chef->removeRole('customer');

        // Finally delete user
        $chef->delete();

        DB::commit();

        return redirect()->back()->with('success', 'User deleted successfully');

    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->back()->with('error', 'Delete failed: '.$e->getMessage());
    }
}
}
