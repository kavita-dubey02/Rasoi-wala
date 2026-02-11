@extends('admin.layouts.app')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-success text-white">
            <h4>Add Chef</h4>
        </div>

        <div class="card-body">
            <form action="{{ route('web-admin.chefstore') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- ================= PERSONAL DETAILS ================= --}}
                <h5 class="mb-3 text-primary">Personal Details</h5>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Mobile</label>
                        <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}">
                        @error('mobile') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Male" {{ old('gender')=='Male'?'selected':'' }}>Male</option>
                            <option value="Female" {{ old('gender')=='Female'?'selected':'' }}>Female</option>
                        </select>
                        @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Date of Birth</label>
                        <input type="date" name="dob" class="form-control" value="{{ old('dob') }}">
                        @error('dob') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>

                {{-- ================= CURRENT ADDRESS ================= --}}
                <h5 class="mb-3 text-primary">Current Address</h5>
                <div class="row">
                    @foreach(['current_building'=>'Building','current_street'=>'Street','current_city'=>'City','current_state'=>'State','current_pincode'=>'Pincode'] as $field=>$label)
                        <div class="col-md-4 mb-3">
                            <label>{{ $label }}</label>
                            <input type="text" name="{{ $field }}" class="form-control" value="{{ old($field) }}">
                            @error($field) <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    @endforeach
                </div>

                {{-- ================= PERMANENT ADDRESS ================= --}}
                <h5 class="mb-3 text-primary">Permanent Address</h5>
                <div class="row">
                    @foreach(['permanent_building'=>'Building','permanent_street'=>'Street','permanent_city'=>'City','permanent_state'=>'State','permanent_pincode'=>'Pincode'] as $field=>$label)
                        <div class="col-md-4 mb-3">
                            <label>{{ $label }}</label>
                            <input type="text" name="{{ $field }}" class="form-control" value="{{ old($field) }}">
                            @error($field) <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    @endforeach
                </div>

                {{-- ================= DOCUMENTS ================= --}}
                <h5 class="mb-3 text-primary">Documents Upload</h5>
                <div class="row">
                    @foreach(['aadhaar_front'=>'Aadhaar Front','aadhaar_back'=>'Aadhaar Back','pancard'=>'PAN Card','address_proof'=>'Address Proof'] as $field=>$label)
                        <div class="col-md-3 mb-3">
                            <label>{{ $label }}</label>
                            <input type="file" name="{{ $field }}" class="form-control">
                            @error($field) <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    @endforeach
                </div>

                {{-- ================= BANK DETAILS ================= --}}
                <h5 class="mb-3 text-primary">Bank Details</h5>
                <div class="row">
                    @foreach(['account_holder_name'=>'Account Holder Name','account_number'=>'Account Number','ifsc_code'=>'IFSC Code'] as $field=>$label)
                        <div class="col-md-4 mb-3">
                            <label>{{ $label }}</label>
                            <input type="text" name="{{ $field }}" class="form-control" value="{{ old($field) }}">
                            @error($field) <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                    @endforeach
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success px-5">Save Chef</button>
                    <a href="{{ route('web-admin.chefadd') }}" class="btn btn-secondary px-5">Cancel</a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
