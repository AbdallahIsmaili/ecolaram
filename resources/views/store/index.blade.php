@extends('base')
@section('title', 'Ecolaram Store')

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


    <div class=" p-3 m-3 row row-cols-1 row-cols-sm-2 row-cols-md-4 ">
        
        <div style="border-radius: 4px; border:none; box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.1); " class="p-1 m-3 card col-md-2">
            <div class="card-body">
                <h6 class="card-title">Card title</h6>
                <p style="font-size:11px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            
            <img style="height: 130px; object-fit:cover;" src="storage/uploads/products/A6mFZkAMISPyKbFWByStKeNzYSYrCVJsziM7Cdhp.webp" class="card-img-top">

            <div class="text-center card-body">
                <div class="d-flex justify-content-center pb-3">
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <p style="opacity: 50%; font-size:.8rem;" class="fw-bolder">1900 MAD</p>
                    <a style="font-size:.8rem;" href="#" class="btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
        </div>
        
        <div style="border-radius: 4px; border:none; box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.1); " class="p-1 m-3 card col-md-2">
            <div class="card-body">
                <h6 class="card-title">Card title</h6>
                <p style="font-size:11px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            
            <img style="height: 130px; object-fit:cover;" src="storage/uploads/products/A6mFZkAMISPyKbFWByStKeNzYSYrCVJsziM7Cdhp.webp" class="card-img-top">

            <div class="text-center card-body">
                <div class="d-flex justify-content-center pb-3">
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <p style="opacity: 50%; font-size:.8rem;" class="fw-bolder">1900 MAD</p>
                    <a style="font-size:.8rem;" href="#" class="btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
        </div>
        
        <div style="border-radius: 4px; border:none; box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.1); " class="p-1 m-3 card col-md-2">
            <div class="card-body">
                <h6 class="card-title">Card title</h6>
                <p style="font-size:11px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            
            <img style="height: 130px; object-fit:cover;" src="storage/uploads/products/A6mFZkAMISPyKbFWByStKeNzYSYrCVJsziM7Cdhp.webp" class="card-img-top">

            <div class="text-center card-body">
                <div class="d-flex justify-content-center pb-3">
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <p style="opacity: 50%; font-size:.8rem;" class="fw-bolder">1900 MAD</p>
                    <a style="font-size:.8rem;" href="#" class="btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
        </div>
        
        <div style="border-radius: 4px; border:none; box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.1); " class="p-1 m-3 card col-md-2">
            <div class="card-body">
                <h6 class="card-title">Card title</h6>
                <p style="font-size:11px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            
            <img style="height: 130px; object-fit:cover;" src="storage/uploads/products/A6mFZkAMISPyKbFWByStKeNzYSYrCVJsziM7Cdhp.webp" class="card-img-top">

            <div class="text-center card-body">
                <div class="d-flex justify-content-center pb-3">
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <p style="opacity: 50%; font-size:.8rem;" class="fw-bolder">1900 MAD</p>
                    <a style="font-size:.8rem;" href="#" class="btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
        </div>
        
        <div style="border-radius: 4px; border:none; box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.1); " class="p-1 m-3 card col-md-2">
            <div class="card-body">
                <h6 class="card-title">Card title</h6>
                <p style="font-size:11px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            
            <img style="height: 130px; object-fit:cover;" src="storage/uploads/products/A6mFZkAMISPyKbFWByStKeNzYSYrCVJsziM7Cdhp.webp" class="card-img-top">

            <div class="text-center card-body">
                <div class="d-flex justify-content-center pb-3">
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <p style="opacity: 50%; font-size:.8rem;" class="fw-bolder">1900 MAD</p>
                    <a style="font-size:.8rem;" href="#" class="btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
        </div>
        
        <div style="border-radius: 4px; border:none; box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.1); " class="p-1 m-3 card col-md-2">
            <div class="card-body">
                <h6 class="card-title">Card title</h6>
                <p style="font-size:11px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            
            <img style="height: 130px; object-fit:cover;" src="storage/uploads/products/A6mFZkAMISPyKbFWByStKeNzYSYrCVJsziM7Cdhp.webp" class="card-img-top">

            <div class="text-center card-body">
                <div class="d-flex justify-content-center pb-3">
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <p style="opacity: 50%; font-size:.8rem;" class="fw-bolder">1900 MAD</p>
                    <a style="font-size:.8rem;" href="#" class="btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
        </div>
        
        <div style="border-radius: 4px; border:none; box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.1); " class="p-1 m-3 card col-md-2">
            <div class="card-body">
                <h6 class="card-title">Card title</h6>
                <p style="font-size:11px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            
            <img style="height: 130px; object-fit:cover;" src="storage/uploads/products/A6mFZkAMISPyKbFWByStKeNzYSYrCVJsziM7Cdhp.webp" class="card-img-top">

            <div class="text-center card-body">
                <div class="d-flex justify-content-center pb-3">
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <p style="opacity: 50%; font-size:.8rem;" class="fw-bolder">1900 MAD</p>
                    <a style="font-size:.8rem;" href="#" class="btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
        </div>
        
        <div style="border-radius: 4px; border:none; box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.1); " class="p-1 m-3 card col-md-2">
            <div class="card-body">
                <h6 class="card-title">Card title</h6>
                <p style="font-size:11px;" class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            
            <img style="height: 130px; object-fit:cover;" src="storage/uploads/products/A6mFZkAMISPyKbFWByStKeNzYSYrCVJsziM7Cdhp.webp" class="card-img-top">

            <div class="text-center card-body">
                <div class="d-flex justify-content-center pb-3">
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                    <i style="color: gold;" class="bi bi-star-fill"></i>
                </div>
                <div class="d-flex justify-content-around align-items-center">
                    <p style="opacity: 50%; font-size:.8rem;" class="fw-bolder">1900 MAD</p>
                    <a style="font-size:.8rem;" href="#" class="btn btn-outline-dark">Add to cart</a>
                </div>
            </div>
        </div>

    </div>

@endsection