@extends('admin.layouts.app')


@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(auth()->user()->hasRole('admin'))
                <h1 class="m-0">Admin Dashboard</h1>
                @endif
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Chef List</li>
                </ol>
            </div>
        </div>
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
                <h3 class="card-title text-white">Chef List</h3>
            </div>

            <div class="card-body p-0">
                <div style="overflow-x:auto; width:100%;">
                    <table class="table table-bordered table-striped text-nowrap">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>DOB</th>

                                <th>Current Building</th>
                                <th>Current Street</th>
                                <th>Current City</th>
                                <th>Current State</th>
                                <th>Current Pincode</th>

                                <th>Permanent Building</th>
                                <th>Permanent Street</th>
                                <th>Permanent City</th>
                                <th>Permanent State</th>
                                <th>Permanent Pincode</th>

                                <th>Aadhaar Front</th>
                                <th>Aadhaar Back</th>
                                <th>PAN Card</th>
                                <th>Address Proof</th>

                                <th>Account Holder</th>
                                <th>Account Number</th>
                                <th>IFSC</th>
                                <th>Is_Available</th>

                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse($chefs as $chef)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $chef->name }}</td>
                                <td>{{ $chef->mobile }}</td>
                                <td>{{ $chef->email ?? '-' }}</td>
                                <td>{{ $chef->gender }}</td>
                                <td>{{ $chef->dob }}</td>

                                {{-- Current Address --}}
                                <td>{{ $chef->chefProfile->current_building ?? '-' }}</td>
                                <td>{{ $chef->chefProfile->current_street ?? '-' }}</td>
                                <td>{{ $chef->chefProfile->current_city ?? '-' }}</td>
                                <td>{{ $chef->chefProfile->current_state ?? '-' }}</td>
                                <td>{{ $chef->chefProfile->current_pincode ?? '-' }}</td>

                                {{-- Permanent Address --}}
                                <td>{{ $chef->chefProfile->permanent_building ?? '-' }}</td>
                                <td>{{ $chef->chefProfile->permanent_street ?? '-' }}</td>
                                <td>{{ $chef->chefProfile->permanent_city ?? '-' }}</td>
                                <td>{{ $chef->chefProfile->permanent_state ?? '-' }}</td>
                                <td>{{ $chef->chefProfile->permanent_pincode ?? '-' }}</td>

                                {{-- Documents --}}
                                <td>
                                    @if($chef->chefDocuments?->aadhaar_front)
                                    <a href="{{ asset('storage/'.$chef->chefDocuments->aadhaar_front) }}"
                                        target="_blank">View</a>
                                    @endif
                                </td>
                                <td>
                                    @if($chef->chefDocuments?->aadhaar_back)
                                    <a href="{{ asset('storage/'.$chef->chefDocuments->aadhaar_back) }}"
                                        target="_blank">View</a>
                                    @endif
                                </td>
                                <td>
                                    @if($chef->chefDocuments?->pancard)
                                    <a href="{{ asset('storage/'.$chef->chefDocuments->pancard) }}"
                                        target="_blank">View</a>
                                    @endif
                                </td>
                                <td>
                                    @if($chef->chefDocuments?->address_proof)
                                    <a href="{{ asset('storage/'.$chef->chefDocuments->address_proof) }}"
                                        target="_blank">View</a>
                                    @endif
                                </td>

                                {{-- Bank --}}
                                <td>{{ $chef->chefBank->account_holder_name ?? '-' }}</td>
                                <td>{{ $chef->chefBank->account_number ?? '-' }}</td>
                                <td>{{ $chef->chefBank->ifsc_code ?? '-' }}</td>
                                <td>
                                    @if($chef->chefProfile->is_available)
                                    <a href="{{ route('web-admin.toggleAvailability', $chef->id) }}"
                                        class="btn btn-sm btn-danger">
                                        Deactivate
                                    </a>
                                    @else
                                    <a href="{{ route('web-admin.toggleAvailability', $chef->id) }}"
                                        class="btn btn-sm btn-success">
                                        Activate
                                    </a>
                                    @endif
                                </td>
                                {{-- Actions --}}
                                <td>
                                    <a href="{{route('web-admin.chefedit', $chef->id)}}"
                                        class="btn btn-sm btn-warning">Edit</a>

                                    <form action="{{ route('web-admin.chefdelete', $chef->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete this chef?')"
                                            class="btn btn-sm btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="25" class="text-center text-danger">No chefs found</td>
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