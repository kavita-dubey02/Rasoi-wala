@extends('admin.layouts.app')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h4>Event Add</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('web-admin.eventstore') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- ================= PERSONAL DETAILS ================= --}}
                <h5 class="mb-3 text-primary">Event Details</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    
                </div>

               

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-warning px-5">Event Add</button>
                    <a href="{{ route('web-admin.eventlist') }}" class="btn btn-secondary px-5">Cancel</a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
