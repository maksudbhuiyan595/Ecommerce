@extends('backend.layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Categories List</h3>
        <a class="btn btn-primary py-2" href="{{ route('category.create') }}">+Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($categories as $categoryId => $category)   

                    <tr>
                        <td>{{ ++$categoryId }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->status ? "active": "inactive" }}</td>
                        <td>
                            <form action="{{route('category.delete',[$category->id])}}" method="POST">
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