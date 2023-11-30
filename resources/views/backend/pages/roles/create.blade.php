
@extends('backend.layouts.app')

@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Add New role</h3>
        <a class="btn btn-primary py-2" href="{{ route('role.list') }}">Roles List</a>
    </div>

    <div class="card-body">
        <form action="{{ route('role.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="roleId" class="font-weight-bold">Role Name :</label>
                <input type="text" name="name" class="form-control" 
                 placeholder="Enter role Name" value="{{ old('name') }}" id="roleId">
            </div>

            <button type="submit" class="btn btn-outline-primary">Submit</button>

        </form>
        
    </div>
</div>
@endsection