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
use App\Models\EventType;
use App\Models\Category;
use App\Models\Booking;
use App\Models\Address;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function bookinglist(){
         $bookings = Booking::with([
        'user:id,name,mobile',
        'chef:id,name,mobile',
        'eventType:id,name',
        'address:id,address_line,city,state,pincode'
    ])->latest()->get();

    return view('admin.booking.bookinglist', compact('bookings'));

    }

    public function create()
{
    $users = User::role('customer')->get();
    $chefs = User::role('chef')->get();
    $events = EventType::all();
    $addresses = Address::all();

    return view('admin.booking.bookingadd', compact('users','chefs','events','addresses'));
}

public function store(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'chef_id' => 'required|exists:users,id',
        'event_type_id' => 'required|exists:event_types,id',
        'address_id' => 'required|exists:addresses,id',
        'event_date' => 'required|date',
        'start_time' => 'required',
        'total_hours' => 'required|integer|min:1',
        'members' => 'required|integer|min:1',
        'price_per_hour' => 'required|numeric|min:0'
    ]);

    $totalAmount = $request->price_per_hour * $request->total_hours;

    Booking::create([
        'booking_code' => 'BK-' . strtoupper(Str::random(6)),
        'user_id' => $request->user_id,
        'chef_id' => $request->chef_id,
        'event_type_id' => $request->event_type_id,
        'address_id' => $request->address_id,
        'event_date' => $request->event_date,
        'start_time' => $request->start_time,
        'total_hours' => $request->total_hours,
        'members' => $request->members,
        'price_per_hour' => $request->price_per_hour,
        'total_amount' => $totalAmount,
        'status' => 'pending'
    ]);

    return redirect()->route('web-admin.bookinglist')->with('success','Booking Added Successfully');
}

public function edit($id)
{
    $booking = Booking::findOrFail($id);

    $users = User::whereHas('roles', function ($q) {
        $q->where('name', 'customer');
    })->get();

    $chefs = chef_profile::with('user:id,name,mobile')
                ->where('is_available', 1)
                ->get();

    $events = EventType::all();
    $addresses = Address::all();

    return view('admin.booking.bookingedit', compact('booking','users','chefs','events','addresses'));
}

public function update(Request $request, $id)
{
    $booking = Booking::findOrFail($id);

    $booking->update($request->all());

    return redirect()->route('web-admin.bookinglist')->with('success', 'Booking updated successfully');
}
}
