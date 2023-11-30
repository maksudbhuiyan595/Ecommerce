@extends('backend.layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Assign Role to {{ ucfirst($role->name) }}</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        {{ ucfirst($role->name) }}
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                               All Permission 
                            </label>
                            </div>
                    </div>
                    <div class="card-footer">
                        
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Checked checkbox
                        </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection