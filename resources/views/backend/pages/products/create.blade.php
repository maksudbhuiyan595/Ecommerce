
@extends('backend.layouts.app')

@section('content')
<div class="card shadow mb-4">

    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Add New product</h3>
        <a class="btn btn-primary py-2" href="{{ route('product.list') }}">Products List</a>
    </div>

    <div class="card-body">
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="productId" class="font-weight-bold">Product Name :</label>
                <input type="text" name="name" class="form-control" 
                 placeholder="Enter product Name" value="{{ old('name') }}" id="productId">
            </div>

            <div class="mb-3">
                <label for="categoryId" class="font-weight-bold">Category Name :</label>
                <select name="category_id" class="form-control" id="categoryId">
                    <option value="">Select Category</option>
                    @forelse ($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->name }}</option> 
                    @empty
                        <option class="text-danger text-center" value="">-- NO Item --</option>
                    @endforelse
                </select>
            </div>

            <div class="mb-3">
                <label for="quantityId" class="font-weight-bold">Quantity :</label>
                <input type="text" name="quantity" class="form-control" 
                 placeholder="Enter product quantity" value="{{ old('quantity') }}" id="quantityId">
            </div>


            <div class="mb-3">
                <label for="priceId" class="font-weight-bold">Price :</label>
                <input type="number" name="price" class="form-control" 
                 placeholder="Enter product price" value="{{ old('price') }}" id="priceId">
            </div>

            <div class="mb-3">
                <label for="discountId" class="font-weight-bold">Discount :</label>
                <input type="number" name="discount" class="form-control" 
                 placeholder="Enter product discount" value="{{ old('discount') }}" id="discountId">
            </div>

            <div class="mb-3">
                <label for="discount_typeId" class="font-weight-bold">Discount Type :</label>
                <input type="text" name="discount_type" class="form-control" 
                 placeholder="Enter product discount_type" value="{{ old('discount_type') }}" id="discount_typeId">
            </div>

            <div class="mb-3">
                <label for="" class="font-weight-bold">Descriptions :</label>
                <textarea name="description" class="form-control" id="editor" placeholder="Product Descriptions" >
                    {{ old("description")}}
                </textarea>
           
            </div>

            <div class="mb-3">
                <label for="discount_typeId" class="font-weight-bold">Image :</label>
                <input type="file" name="image" class="form-control dropify" 
                 value="{{ old('image') }}" id="discount_typeId">
            </div>

            <button type="submit" class="btn btn-outline-primary">Submit</button>

        </form>
        
    </div>
</div>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>  
    <script>
        $('.dropify').dropify();
    </script>

<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endpush