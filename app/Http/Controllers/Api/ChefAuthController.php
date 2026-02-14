<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rule;

use App\Models\chef_profile; ;
use App\Models\chef_document;
use App\Models\chef_bank;
use App\Models\EventType;
use App\Models\Address;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;


class ChefAuthController extends Controller
{
 

public function register(Request $request)
{
    $request->validate([
        // Step 1
        'name' => 'required|string',
        'mobile' => 'required|digits:10|unique:users',
        'email' => 'nullable|email|unique:users',
        'gender' => 'required',
        'dob' => 'required|date',
        'password' => 'required|min:6',

        // Step 2 Address
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
        'price_per_hour' => 'required',
        'experience_year' => 'required',
        'bio' => 'required',
        'speciality' => 'required',

        // Step 3 Documents
        'aadhaar_front' => 'required|image|mimes:jpg,png,jpeg',
        'aadhaar_back' => 'required|image|mimes:jpg,png,jpeg',
        'pancard' => 'required|image|mimes:jpg,png,jpeg',
        'address_proof' => 'nullable|image|mimes:jpg,png,jpeg',

        // Step 4 Bank
        'account_holder_name' => 'required',
        'account_number' => 'required',
        'ifsc_code' => 'required',
    ]);

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

    // Save Address
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
        'price_per_hour' => $request->price_per_hour,
        'experience_year' => $request->experience_year,
        'bio' => $request->bio,
        'speciality' => $request->speciality,
    ]);

    // Store Documents
    $aadhaarFront = $request->file('aadhaar_front')->store('documents', 'public');
    $aadhaarBack = $request->file('aadhaar_back')->store('documents', 'public');
    $panCard = $request->file('pancard')->store('documents', 'public');
    $addressProof = $request->file('address_proof')?->store('documents', 'public');

    chef_document::create([
        'user_id' => $chef->id,
        'aadhaar_front' => $aadhaarFront,
        'aadhaar_back' => $aadhaarBack,
        'pancard' => $panCard,
        'address_proof' => $addressProof,
    ]);

    // Save Bank Details
    chef_bank::create([
        'user_id' => $chef->id,
        'account_holder_name' => $request->account_holder_name,
        'account_number' => $request->account_number,
        'ifsc_code' => $request->ifsc_code,
    ]);

    $token = $chef->createToken('chef-token')->plainTextToken;

    return response()->json([
        'message' => 'Chef registered successfully',
        'token' => $token,
    ]);
}


    // CHEF LOGIN
    public function login(Request $request)
{
    $request->validate([
        'mobile' => 'required|digits:10',
        'password' => 'required',
    ]);

    $chef = User::where('mobile', $request->mobile)->first();

    if (!$chef || !Hash::check($request->password, $chef->password)) {
        return response()->json(['message' => 'Invalid mobile or password'], 401);
    }

    if (!$chef->hasRole('chef')) {
        return response()->json(['message' => 'Not authorized as chef'], 403);
    }

    $token = $chef->createToken('chef-token')->plainTextToken;

    return response()->json([
        'message' => 'Login successful',
        'token' => $token,
        'user' => $chef
    ]);
}

//Profile
public function profile(Request $request)
{
    $user = $request->user();

    if (!$user) {
        return response()->json([
            'status' => false,
            'message' => 'User not authenticated'
        ], 401);
    }

    return response()->json([
        'status' => true,
        'user' => $user,
        'profile' => chef_profile::where('user_id', $user->id)->first(),
        'documents' => chef_document::where('user_id', $user->id)->first(),
        'bank_details' => chef_bank::where('user_id', $user->id)->first(),
    ]);
}

    



    // LOGOUT
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }

    //Event
    public function eventList()
{
    $events = EventType::select('id', 'name')->orderBy('name')->get();

    return response()->json([
        'status' => true,
        'message' => 'Event list fetched successfully',
        'data' => $events
    ]);
}
//booking request
public function bookingRequests()
{
    $chefId = auth()->id();

    $bookings = Booking::with(['user:id,name,mobile', 'eventType:id,name', 'address'])
        ->where('chef_id', $chefId)
        ->orderBy('event_date', 'asc')
        ->get();

    return response()->json([
        'status' => true,
        'message' => 'Chef booking requests fetched',
        'data' => $bookings
    ]);
}

//active inactive chef
public function toggleAvailability(Request $request)
{
    $chef = User::with('chefProfile')->find(auth()->id());

    if (!$chef || !$chef->chefProfile) {
        return response()->json([
            'status' => false,
            'message' => 'Chef profile not found'
        ], 404);
    }

    // Toggle status
    $chef->chefProfile->is_available = !$chef->chefProfile->is_available;
    $chef->chefProfile->save();

    return response()->json([
        'status' => true,
        'message' => $chef->chefProfile->is_available 
                        ? 'You are now ONLINE' 
                        : 'You are now OFFLINE',
        'is_available' => $chef->chefProfile->is_available
    ]);
}

//booking status update

public function updateStatus(Request $request)
{
    $request->validate([
        'booking_id' => 'required|exists:bookings,id',
        'status' => 'required|in:confirmed,cancelled'
    ]);

    $booking = Booking::where('id', $request->booking_id)
        ->where('chef_id', auth()->id()) 
        ->first();

    if (!$booking) {
        return response()->json([
            'status' => false,
            'message' => 'Booking not found for this chef'
        ], 404);
    }

    $booking->status = $request->status;
    $booking->save();

    return response()->json([
        'status' => true,
        'message' => 'Booking status updated successfully',
        'booking_id' => $booking->id,
        'new_status' => $booking->status
    ]);
}

public function updateProfilechef(Request $request)
{
    $user = $request->user();

    if (!$user) {
        return response()->json([
            'status' => false,
            'message' => 'Unauthenticated'
        ], 401);
    }

    $validated = $request->validate([
        'name' => 'nullable|string|max:255',
        'mobile' => ['nullable','digits:10', Rule::unique('users')->ignore($user->id)],
        'email' => ['nullable','email', Rule::unique('users')->ignore($user->id)],
        'gender' => 'nullable|string',
        'dob' => 'nullable|date',
        'password' => 'nullable|min:6',

        'current_building' => 'nullable|string',
        'current_street' => 'nullable|string',
        'current_city' => 'nullable|string',
        'current_state' => 'nullable|string',
        'current_pincode' => 'nullable|string',

        'permanent_building' => 'nullable|string',
        'permanent_street' => 'nullable|string',
        'permanent_city' => 'nullable|string',
        'permanent_state' => 'nullable|string',
        'permanent_pincode' => 'nullable|string',

        'price_per_hour' => 'nullable|numeric|min:0',
        'experience_year' => 'nullable|numeric|min:0',
        'bio' => 'nullable|string',
        'speciality' => 'nullable|string',

        'aadhaar_front' => 'nullable|image|mimes:jpg,png,jpeg',
        'aadhaar_back' => 'nullable|image|mimes:jpg,png,jpeg',
        'pancard' => 'nullable|image|mimes:jpg,png,jpeg',
        'address_proof' => 'nullable|image|mimes:jpg,png,jpeg',

        'account_holder_name' => 'nullable|string',
        'account_number' => 'nullable|string',
        'ifsc_code' => 'nullable|string',
    ]);

    DB::beginTransaction();

    try {

        /** ---------------- USER TABLE ---------------- */
        $userFields = ['name','email','mobile','gender','dob'];
        $userData = [];

        foreach ($userFields as $field) {
            if ($request->has($field) && $request->$field !== null) {
                $userData[$field] = $request->$field;
            }
        }

        if (!empty($userData)) {
            $user->update($userData);
        }

        if ($request->filled('password')) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        }

        /** ---------------- CHEF PROFILE ---------------- */
        $profileFields = [
            'current_building','current_street','current_city','current_state','current_pincode',
            'permanent_building','permanent_street','permanent_city','permanent_state','permanent_pincode',
            'price_per_hour','experience_year','bio','speciality'
        ];

        $profileData = [];
        foreach ($profileFields as $field) {
            if ($request->has($field) && $request->$field !== null) {
                $profileData[$field] = $request->$field;
            }
        }

        if (!empty($profileData)) {
            ChefProfile::updateOrCreate(
                ['user_id' => $user->id],
                $profileData
            );
        }

        /** ---------------- BANK DETAILS ---------------- */
        $bankFields = ['account_holder_name','account_number','ifsc_code'];
        $bankData = [];

        foreach ($bankFields as $field) {
            if ($request->has($field) && $request->$field !== null) {
                $bankData[$field] = $request->$field;
            }
        }

        if (!empty($bankData)) {
            ChefBank::updateOrCreate(
                ['user_id' => $user->id],
                $bankData
            );
        }

        /** ---------------- DOCUMENT UPLOADS ---------------- */
        $documentData = [];
        foreach (['aadhaar_front','aadhaar_back','pancard','address_proof'] as $doc) {
            if ($request->hasFile($doc)) {
                $documentData[$doc] = $request->file($doc)->store('documents', 'public');
            }
        }

        if (!empty($documentData)) {
            ChefDocument::updateOrCreate(
                ['user_id' => $user->id],
                $documentData
            );
        }

        DB::commit();

        return response()->json([
            'status' => true,
            'message' => 'Profile updated successfully',
        ]);

    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json([
            'status' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}

public function chefBookingCount(){
    $chef = $request->user();

    if (!$chef) {
        return response()->json([
            'status' => false,
            'message' => 'Unauthenticated'
        ], 401);
    }

    // Total bookings of this chef
    $totalBookings = Booking::where('chef_id', $chef->id)->count();

    // Total earnings of this chef
    $totalEarnings = Booking::where('chef_id', $chef->id)
                            ->where('status', 'confirmed') // optional
                            ->sum('total_amount'); // change column name if needed

    return response()->json([
        'status' => true,
        'data' => [
            'chef_id' => $chef->id,
            'chef_name' => $chef->name,
            'total_bookings' => $totalBookings,
            'total_earnings' => $totalEarnings
        ]
    ]);
}
public function updatepersonalProfile(Request $request){
    $user = $request->user();

    if (!$user) {
        return response()->json([
            'status' => false,
            'message' => 'Unauthenticated'
        ], 401);
    }

    $validated = $request->validate([
        'name' => 'nullable|string|max:255',
        'mobile' => ['nullable','digits:10', Rule::unique('users')->ignore($user->id)],
        'email' => ['nullable','email', Rule::unique('users')->ignore($user->id)],
        'gender' => 'nullable|string',
        'dob' => 'nullable|date',
        // 'password' => 'nullable|min:6',
    ]);

    DB::beginTransaction();

    try {

        $data = [];

        foreach (['name','mobile','email','gender','dob'] as $field) {
            if ($request->has($field) && $request->$field !== null) {
                $data[$field] = $request->$field;
            }
        }

        if (!empty($data)) {
            $user->update($data);
        }

        // if ($request->filled('password')) {
        //     $user->update([
        //         'password' => Hash::make($request->password)
        //     ]);
        // }

        DB::commit();

        return response()->json([
            'status' => true,
            'message' => 'Personal profile updated successfully'
        ]);

    } catch (\Exception $e) {
        DB::rollBack();

        return response()->json([
            'status' => false,
            'message' => $e->getMessage()
        ], 500);
    }

}
public function updateProfileAddress(Request $request){
     $user = $request->user();

    if (!$user) {
        return response()->json([
            'status' => false,
            'message' => 'Unauthenticated'
        ], 401);
    }

    $validated = $request->validate([
        'current_building' => 'nullable|string',
        'current_street'   => 'nullable|string',
        'current_city'     => 'nullable|string',
        'current_state'    => 'nullable|string',
        'current_pincode'  => 'nullable|string',
    ]);

    DB::beginTransaction();

    try {

        $data = [];

        foreach ($validated as $key => $value) {
            if ($value !== null) {
                $data[$key] = $value;
            }
        }

        if (!empty($data)) {
            chef_profile::updateOrCreate(
                ['user_id' => $user->id],
                $data
            );
        }

        DB::commit();

        return response()->json([
            'status' => true,
            'message' => 'Current address updated successfully'
        ]);

    } catch (\Exception $e) {

        DB::rollBack();

        return response()->json([
            'status' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}
}
