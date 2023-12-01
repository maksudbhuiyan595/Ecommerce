@extends('backend.layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Brand List</h3>
        <a class="btn btn-primary py-2" href="{{ route('brand.create') }}">+Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($brands as $brandId => $brand)   

                    <tr>
                        <td>{{ ++$brandId }}</td>
                        <td>{{ $brand->brand_name }}</td>
                        <td>{{ $brand->brand_status ? "active": "inactive" }}</td>
                        <td>{{ $brand->brand_image }}</td>

                        <td>
                            <form action="{{route('brand.delete',[$brand->id])}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Delete</button>               
                            </form>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection