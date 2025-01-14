@extends('components.master')
@section('contents')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between  align-items-center">
            <h3>Product List</h3>
            <a href="{{ route('product.create') }}" class=" btn btn-primary">new Product</a>
        </div>

        @if (Session::has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @elseif(Session::has('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

        <table class="table table-striped">
          <thead>
            <tr>
              <th>Product ID</th>
              <th>Image</th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Qty</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <td>P{{ $product->id }}</td>
              <td>product.jpg</td>
              <td>{{ $product->name }}</td>
              <td>${{ $product->price }}</td>
              <td>{{ $product->qty }}</td>
              <td>
                <a href="{{ route('product.edit') }}" class="btn btn-primary btn-sm">Edit</a>
                <a href="{{ route('product.destroy',$product->id) }}" onclick="return confirm('Do you to delete this?')" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="show-page mt-3">
            {{-- {{ $products->links() }} --}}
        </div>
      </div>
    </div>
  </div>
@endsection