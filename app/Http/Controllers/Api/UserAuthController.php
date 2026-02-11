<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use App\Models\chef_profile; ;
use App\Models\chef_document;
use App\Models\chef_bank;
use App\Models\Booking;
use App\Models\Address;
use App\Models\EventType;
use Illuminate\Support\Facades\DB;


class UserAuthController extends Controller
{
    public function register(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'mobile' => 'required|digits:10|unique:users,mobile',
        'password' => 'required|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'mobile' => $request->mobile,
        'password' => Hash::make($request->password),
    ]);

    $user->assignRole('customer');

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'status' => true,
        'message' => 'User registered successfully',
        'token' => $token,
        'user' => $user
    ]);
}

public function login(Request $request)
{
    $request->validate([
        'mobile' => 'required',
        'password' => 'required',
    ]);

    if (!Auth::attempt($request->only('mobile', 'password'))) {
        return response()->json([
            'status' => false,
            'message' => 'Invalid mobile or password'
        ], 401);
    }

    $user = Auth::user();

    if (!$user->is_active) {
        return response()->json([
            'status' => false,
            'message' => 'Account is blocked'
        ], 403);
    }

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'status' => true,
        'message' => 'Login successful',
        'token' => $token,
        'user' => $user,
        'role' => $user->getRoleNames()->first()
    ]);
}

public function logout(Request $request)
{
    $request->user()->currentAccessToken()->delete();

    return response()->json([
        'status' => true,
        'message' => 'Logged out successfully'
    ]);
}

//bookings
public function store(Request $request)
{
   $request->validate([
        'chef_id'        => 'required|exists:users,id',
        'event_type_id'  => 'required|exists:event_types,id',
        'address_id'     => 'required|exists:addresses,id',
        'event_date'     => 'required|date|after_or_equal:today',
        'start_time'     => 'required',
        'total_hours'    => 'required|integer|min:1',
        'members'        => 'required|integer|min:1',
    ]);

    DB::beginTransaction();

    try {
      
        $chef = User::where('id', $request->chef_id)
            ->whereHas('roles', function ($q) {
                $q->where('name', 'chef');
            })
            ->with('chefProfile')
            ->firstOrFail();

        $pricePerHour = $chef->chefProfile->price_per_hour ?? 0;
        $totalAmount  = $pricePerHour * $request->total_hours;

        $booking = Booking::create([
            'booking_code'   => 'BK-' . strtoupper(Str::random(6)),
            'user_id'        => auth()->id(),
            'chef_id'        => $chef->id,
            'event_type_id'  => $request->event_type_id,
            'address_id'     => $request->address_id,
            'event_date'     => $request->event_date,
            'start_time'     => $request->start_time,
            'total_hours'    => $request->total_hours,
            'price_per_hour' => $pricePerHour,
            'total_amount'   => $totalAmount,
            'members'        => $request->members,
            'status'         => 'pending',
        ]);

        DB::commit();

        return response()->json([
            'status' => true,
            'message' => 'Booking request sent successfully',
            'data' => $booking
        ]);

    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json([
            'status' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}
//address booking
public function addressstore(Request $request)
{
    $request->validate([
        'address_line' => 'required|string|max:255',
        'city'         => 'required|string|max:100',
        'state'        => 'required|string|max:100',
        'pincode'      => 'required|digits:6',
        'latitude'     => 'nullable|string',
        'longitude'    => 'nullable|string',
    ]);

    $address = Address::create([
        'user_id'      => auth()->id(),
        'address_line' => $request->address_line,
        'city'         => $request->city,
        'state'        => $request->state,
        'pincode'      => $request->pincode,
        'latitude'     => $request->latitude,
        'longitude'    => $request->longitude,
    ]);

    return response()->json([
        'status'  => true,
        'message' => 'Address saved successfully',
        'data'    => $address
    ]);
}

public function chefList()
{
    $chefs = User::whereHas('roles', function ($q) {
            $q->where('name', 'chef');
        })
        ->with('chefProfile')
        ->select('id', 'name')
        ->get()
        ->map(function ($chef) {
            return [
                'chef_id' => $chef->id,
                'chef_name' => $chef->name,
                'is_available' => (bool) optional($chef->chefProfile)->is_available,
                'availability_text' => optional($chef->chefProfile)->is_available ? 'Online' : 'Offline',
            ];
        });

    return response()->json([
        'status' => true,
        'message' => 'Chef list fetched successfully',
        'data' => $chefs
    ]);
}

//address update
public function addressupdate(Request $request, $id)
{
    $request->validate([
        'address_line' => 'required|string|max:255',
        'city'         => 'required|string|max:100',
        'state'        => 'required|string|max:100',
        'pincode'      => 'required|digits:6',
        'latitude'     => 'nullable|string',
        'longitude'    => 'nullable|string',
    ]);

    $address = Address::where('id', $id)
        ->where('user_id', auth()->id())
        ->first();

    if (!$address) {
        return response()->json([
            'status' => false,
            'message' => 'Address not found'
        ], 404);
    }

    $address->update($request->only([
        'address_line',
        'city',
        'state',
        'pincode',
        'latitude',
        'longitude'
    ]));

    return response()->json([
        'status'  => true,
        'message' => 'Address updated successfully',
        'data'    => $address
    ]);
}
//address delete
public function addressdestroy($id)
{
    $address = Address::where('id', $id)
        ->where('user_id', auth()->id())
        ->first();

    if (!$address) {
        return response()->json([
            'status' => false,
            'message' => 'Address not found'
        ], 404);
    }

    $address->delete();

    return response()->json([
        'status'  => true,
        'message' => 'Address deleted successfully'
    ]);
}
//booking list for user
public function myBookings(Request $request)
{
    $user = auth()->user();

    $bookings = Booking::with([
            'chef:id,name',
            'eventType:id,name',
            'address:id,address_line,city,state,pincode'
        ])
        ->where('user_id', $user->id)
        ->latest()
        ->get();

    return response()->json([
        'status' => true,
        'bookings' => $bookings
    ]);
}



}
