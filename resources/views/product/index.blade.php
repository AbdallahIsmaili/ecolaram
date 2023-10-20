@extends('base')
@section('title', 'Products')

@section('content')
    <h1>Products</h1>

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
              <td class="align-middle">{{ $product->price }}</td>
              <td class="align-middle">
                  <img width="120px" src="storage/{{ $product->image }}">  
              </td>
              <td class="align-middle">...</td>
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

@endsection