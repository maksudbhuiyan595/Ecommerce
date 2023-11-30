@extends('backend.layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Roles List</h3>
        <a class="btn btn-primary py-2" href="{{ route('role.create') }}">+Add New</a>
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

                    @foreach ($roles as $roleId => $role)   

                    <tr>
                        <td>{{ ++$roleId }}</td>
                        <td>{{ ucfirst($role->name) }}</td>
                        <td>{{ $role->status ? "active": "inactive" }}</td>
                        <td>
                            <a class="btn btn-secondary" href="{{ route('assign.form',$role->id) }}">Assign</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection