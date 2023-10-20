@extends('base')
@section('title', 'Products')

@section('content')
    <h1>Products</h1>

    <div class="p-5 m-3">
      
      <div class="col-md-12 mb-4">
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add product</a>
      </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">image</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

          @forelse ($products as $product)

            <tr>
              <th class="align-middle" scope="row">{{ $product->id }}</th>
              <td class="align-middle">{{ $product->name }}</td>
              <td class="align-middle">{{ $product->description }}</td>
              <td class="align-middle">{{ $product->quantity }}</td>
              <td class="align-middle">{{ $product->price }} MAD</td>

              <td class="align-middle">
                <a href="storage/{{ $product->image }}" target="_blank" class="hover-text"> Hover me
                  <span class="hover-card">
                    <img id="hover-img" src="storage/{{ $product->image }}">  
                  </span>
                </a>
              </td>

              <td class="align-middle">
                <div class="btn-group">
                  <a href="{{ route('products.edit', $product) }}" class="mx-1 btn btn-warning">
                    <i style="color: white; font-size: 1rem;" class="bi bi-pencil-square"></i>
                  </a>

                  <form action="{{ route('products.destroy', $product) }}" method="post">

                    @csrf
                    @method('DELETE')
                    
                    <button class="mx-1 btn btn-danger">
                      <i style="color: white; font-size: 1rem;" class="bi bi-trash-fill"></i>
                    </button> 

                  </form>
                </div>
              </td>

            </tr>

            @empty

            <tr>
              <td align="center" colspan="7" >
                <blockquote class="blockquote">
                  <p>No products yet.</p>
                </blockquote>
              </td>
            </tr>

          @endforelse
          
        </tbody>
      </table>

      {{ $products->links() }}

    </div>

@endsection