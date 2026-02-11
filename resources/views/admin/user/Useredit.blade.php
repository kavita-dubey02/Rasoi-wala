@extends('admin.layouts.app')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h4>Edit User</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('web-admin.userupdate', $chef->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- ================= PERSONAL DETAILS ================= --}}
                <h5 class="mb-3 text-primary">Personal Details</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $chef->name) }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Mobile</label>
                        <input type="text" name="mobile" class="form-control" value="{{ old('mobile', $chef->mobile) }}">
                        @error('mobile') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $chef->email) }}">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <!-- <div class="col-md-4 mb-3">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Male" {{ old('gender', $chef->gender)=='Male'?'selected':'' }}>Male</option>
                            <option value="Female" {{ old('gender', $chef->gender)=='Female'?'selected':'' }}>Female</option>
                        </select>
                        @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" value="{{ old('dob', $chef->dob) }}">
                        @error('dob') <small class="text-danger">{{ $message }}</small> @enderror
                    </div> -->
                </div>

                

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-warning px-5">Update Chef</button>
                    <a href="{{ route('web-admin.cheflist') }}" class="btn btn-secondary px-5">Cancel</a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
