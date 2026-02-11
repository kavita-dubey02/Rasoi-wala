@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-success text-white">
            <h4>Add Booking</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('web-admin.bookingstore') }}" method="POST">
                @csrf
                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>User</label>
                        <select name="user_id" class="form-control">
                            <option value="">Select User</option>
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->mobile }})</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Chef</label>
                        <select name="chef_id" class="form-control">
                            <option value="">Select Chef</option>
                            @foreach($chefs as $chef)
                                <option value="{{ $chef->id }}">{{ $chef->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Event Type</label>
                        <select name="event_type_id" class="form-control">
                            @foreach($events as $event)
                                <option value="{{ $event->id }}">{{ $event->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Address</label>
                        <select name="address_id" class="form-control">
                            @foreach($addresses as $address)
                                <option value="{{ $address->id }}">{{ $address->city }}, {{ $address->state }} {{ $address->pincode }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Date</label>
                        <input type="date" name="event_date" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Start Time</label>
                        <input type="time" name="start_time" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Total Hours</label>
                        <input type="number" name="total_hours" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Members</label>
                        <input type="number" name="members" class="form-control">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Price Per Hour</label>
                        <input type="number" name="price_per_hour" class="form-control">
                    </div>

                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success px-5">Create Booking</button>
                    <a href="{{ route('web-admin.bookinglist') }}" class="btn btn-secondary px-5">Cancel</a>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
