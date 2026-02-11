@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">Booking List</h1>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
           <div class="container mt-4" style="max-width:850px;">

            @if(session('success'))
            <div class="custom-alert success-alert auto-hide">
                <span class="alert-icon">✔</span>
                <span class="alert-text">{{ session('success') }}</span>
                <button class="close-btn" onclick="this.parentElement.style.display='none'">&times;</button>
            </div>
            @endif

            @if(session('error'))
            <div class="custom-alert error-alert auto-hide">
                <span class="alert-icon">⚠</span>
                <span class="alert-text">{{ session('error') }}</span>
                <button class="close-btn" onclick="this.parentElement.style.display='none'">&times;</button>
            </div>
            @endif

        </div>
        <div class="card">
            <div class="card-header bg-primary">
                <h3 class="card-title text-white">All Bookings</h3>
            </div>

            <div class="card-body p-0">
                <div style="overflow-x:auto;">
                    <table class="table table-bordered table-striped text-nowrap">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>#</th>
                                <th>Booking Code</th>
                                <th>User</th>
                                <th>Chef</th>
                                <th>Event</th>
                                <th>Date</th>
                                <th>Start Time</th>
                                <th>Hours</th>
                                <th>Members</th>
                                <th>Total Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($bookings as $booking)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $booking->booking_code }}</td>
                                <td>
                                    {{ $booking->user->name ?? '-' }} <br>
                                    <small>{{ $booking->user->mobile ?? '' }}</small>
                                </td>
                                <td>
                                    {{ $booking->chef->name ?? '-' }} <br>
                                    <small>{{ $booking->chef->mobile ?? '' }}</small>
                                </td>
                                <td>{{ $booking->eventType->name ?? '-' }}</td>
                                <td>{{ $booking->event_date }}</td>
                                <td>{{ $booking->start_time }}</td>
                                <td>{{ $booking->total_hours }}</td>
                                <td>{{ $booking->members }}</td>
                                <td>₹ {{ $booking->total_amount }}</td>
                                <td>
                                    <span class="badge 
                                        @if($booking->status=='pending') bg-warning
                                        @elseif($booking->status=='accepted') bg-success
                                        @elseif($booking->status=='rejected') bg-danger
                                        @elseif($booking->status=='completed') bg-info
                                        @else bg-secondary @endif">
                                        {{ ucfirst($booking->status) }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{route('web-admin.bookingedit', $booking->id)}}"
                                        class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('web-admin.bookingdelete', $booking->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete this booking?')"
                                            class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="11" class="text-center text-danger">No bookings found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
