@extends('components.master')
@section('contents')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between  align-items-center">
            <h3>Product List</h3>
            <a href="{{ route('product.create') }}" class=" btn btn-primary">new Product</a>
        </div>
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
                <a href="{{ route('product.destroy',$product->id) }}" class="btn btn-danger btn-sm">Delete</a>
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