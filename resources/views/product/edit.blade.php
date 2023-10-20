@extends('base')
@section('title', 'Edit product')

@section('content')
    <h1>Let's edit this product: <span class="display-5">{{ $product->name }}</span></h1>

    <form action="{{ route('products.update', $product) }}" method="POST" class="row g-3 p-5" enctype="multipart/form-data">

        @csrf
        @method('PUT')
        <div class="col-md-9">
            <x-short-input label="Product name" placeholder="Enter the product name" type="text" name="name" value="{{ old('name', $product->name) }}" />
            
            <x-textarea label="Product description" name="description" value="{{ old('description', $product->description) }}" />
        
            <div class="flex-grow-1">
                <x-default-file-input label="Product picture" name="image" />
            </div>              
        
            <div class="row">
                <x-unsigned-number-input label="Quantity" placeholder="Quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" />
                <x-unsigned-number-input label="Price" placeholder="Price" name="price" value="{{ old('price', $product->price) }}" />
            </div>
        </div>

        <div class="col-md-3">
            <h5>Image</h5>

            <img style="width: 350px; height:350px; object-fit:cover;" src="/storage/{{ $product->image }}" alt="">

        </div>

        <x-submit-button text="Update" button="success" name="create-product" />

      </form>

@endsection