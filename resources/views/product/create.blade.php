@extends('base')
@section('title', 'Add new product')

@section('content')
    <h1>Create a new product.</h1>

    <form action="{{ route('products.store') }}" method="POST" class="row g-3 p-5" enctype="multipart/form-data">

      @csrf
        <div class="col-md-9">

          <x-short-input label="Product name" placeholder="Enter the product name" type="text" name="product_name" />
          
          <x-textarea label="Product description" name="product_desc" />

          <x-default-file-input label="Product picture" name="product_image" />

          <div class="row">

            <x-unsigned-number-input label="Quantity" placeholder="Quantity" name="product_quantity" />
            
            <x-unsigned-number-input label="Price" placeholder="Price" name="product_price" />

          </div>

        </div>

        <x-submit-button text="Insert" button="success" name="create-product" />

      </form>

@endsection