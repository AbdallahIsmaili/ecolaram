@extends('base')
@section('title', 'Add new product')

@section('content')
    <h1>Create a new product.</h1>

    <form action="{{ route('products.store') }}" method="POST" class="row g-3 p-5" enctype="multipart/form-data">

      @csrf
        <div class="col-md-9">

          <x-short-input label="Product name" placeholder="Enter the product name" type="text" name="name" />
          
          <x-textarea label="Product description" name="description" />

          <x-default-file-input label="Product picture" name="image" />

          <div class="row">

            <x-unsigned-number-input label="Quantity" placeholder="Quantity" name="quantity" />
            
            <x-unsigned-number-input label="Price" placeholder="Price" name="price" />

          </div>

        </div>

        <x-submit-button text="Insert" button="success" name="create-product" />

      </form>

@endsection