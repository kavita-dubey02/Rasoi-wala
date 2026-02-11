@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4>Edit Booking</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('web-admin.bookingupdate', $booking->id) }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>User</label>
                        <select name="user_id" class="form-control">
                            @foreach($users as $user)
                          
                                <option value="{{ $user->id }}" {{ $booking->user_id == $user->id ? 'selected' : '' }}>
                                    {{ $user->name }} ({{ $user->mobile }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Chef</label>
                        <select name="chef_id" class="form-control">
                            @foreach($chefs as $chef)
                                <option value="{{ $chef->id }}" {{ $booking->chef_id == $chef->id ? 'selected' : '' }}>
                                    {{ $chef->user->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Event Type</label>
                        <select name="event_type_id" class="form-control">
                            @foreach($events as $event)
                                <option value="{{ $event->id }}" {{ $booking->event_type_id == $event->id ? 'selected' : '' }}>
                                    {{ $event->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Address</label>
                        <select name="address_id" class="form-control">
                            @foreach($addresses as $address)
                                <option value="{{ $address->id }}" {{ $booking->address_id == $address->id ? 'selected' : '' }}>
                                    {{ $address->city }}, {{ $address->state }} {{ $address->pincode }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Date</label>
                        <input type="date" name="event_date" class="form-control" value="{{ $booking->event_date }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Start Time</label>
                        <input type="time" name="start_time" class="form-control" value="{{ $booking->start_time }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Total Hours</label>
                        <input type="number" name="total_hours" class="form-control" value="{{ $booking->total_hours }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Members</label>
                        <input type="number" name="members" class="form-control" value="{{ $booking->members }}">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Price Per Hour</label>
                        <input type="number" name="price_per_hour" class="form-control" value="{{ $booking->price_per_hour }}">
                    </div>

                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5">Update Booking</button>
                    <a href="{{ route('web-admin.bookinglist') }}" class="btn btn-secondary px-5">Cancel</a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
