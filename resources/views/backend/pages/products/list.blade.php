@extends('backend.layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">products List</h3>
        <a class="btn btn-primary py-2" href="{{ route('product.create') }}">+Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Discount Type</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($products as $productId => $product)   

                    <tr>
                        <td>{{ ++$productId }}</td>
                        <td>
                            <img src="{{ asset('/thumbnail/',$product->image) }}" alt="Image">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->status ? "active": "inactive" }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->discount }}</td>
                        <td>{{ $product->discount_type }}</td>

                        <td>
                            <form action="{{route('product.delete',[$product->id])}}" method="POST">
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