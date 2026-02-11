@extends('admin.layouts.app')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-warning text-white">
            <h4>Edit Dish</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('web-admin.dishupdate', $dish->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    {{-- Category Dropdown --}}
                    <div class="col-md-6 mb-3">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            <option value="">-- Select Category --</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $dish->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Dish Name --}}
                    <div class="col-md-6 mb-3">
                        <label>Dish Name</label>
                        <input type="text" name="name" class="form-control"
                               value="{{ old('name', $dish->name) }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Description --}}
                    <div class="col-md-12 mb-3">
                        <label>Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ old('description', $dish->description) }}</textarea>
                        @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    {{-- Current Image --}}
                    <div class="col-md-6 mb-3">
                        <label>Current Image</label><br>
                        @if($dish->image)
                            <img src="{{ asset('storage/' . $dish->image) }}" width="120" class="mb-2">
                        @else
                            <p class="text-muted">No image uploaded</p>
                        @endif
                    </div>

                    {{-- New Image Upload --}}
                    <div class="col-md-6 mb-3">
                        <label>Change Image (Optional)</label>
                        <input type="file" name="image" class="form-control">
                        @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-warning px-5">Update Dish</button>
                    <a href="{{ route('web-admin.dishlist') }}" class="btn btn-secondary px-5">Cancel</a>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection
