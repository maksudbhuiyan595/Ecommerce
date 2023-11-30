@extends('backend.layouts.app')

@section('content')
@extends('backend.layouts.app')

@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Add New Category</h3>
        <a class="btn btn-primary py-2" href="{{ route('category.list') }}">Categories List</a>
    </div>

    <div class="card-body">
        <form action="{{ route('category.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="categoryId" class="font-weight-bold">Category Name :</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                 placeholder="Enter Category Name" value="{{ old('name') }}" id="categoryId">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
            </div>

            <button type="submit" class="btn btn-outline-primary">Submit</button>

        </form>
        
    </div>
</div>
@endsection
