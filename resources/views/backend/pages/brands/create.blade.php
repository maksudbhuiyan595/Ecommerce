@extends('backend.layouts.app')

@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Add New brand</h3>
        <a class="btn btn-primary py-2" href="{{ route('brand.list') }}">Brand List</a>
    </div>

    <div class="card-body">
        <form action="{{ route('brand.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="brandId" class="font-weight-bold">Brand Name :</label>
                <input type="text" name="brand_name" class="form-control @error('name') is-invalid @enderror" 
                 placeholder="Enter Brand Name" value="{{ old('name') }}" id="brandId">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
            </div>

            <div>
                   <label for="">Upload Image</label>
                   <input name="brand_image" type="file" class="form-control">
            </div>

            
            <div>
                <label for="">Select Category</label>
                <select name="category_id" id="" class="form-control">
                    @foreach($category as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
               </div>

            <button type="submit" class="btn btn-outline-primary">Submit</button>

        </form>
        
    </div>
</div>
@endsection
