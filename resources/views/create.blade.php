@extends('components.master')
@section('contents')
   <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between  align-items-center">
            <h3>Crete Product</h3>
            <a href="{{ route('product.index') }}" class=" btn btn-danger btn-sm rounded-0">back</a>
        </div>
        <form action="{{ route('product.store') }}" class="forms-sample" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control @error('name') is-invalid  @enderror " name="name" placeholder="Product Name">
            @error("name")
              <p class=" text-danger">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group">
            <label>Product Price</label>
            <input type="number" class="form-control @error('price') is-invalid  @enderror " name="price" placeholder="Product Price">
            @error("price")
              <p class=" text-danger">{{ $message }}</p>
            @enderror
          </div>

          <div class="form-group">
            <label>Product Qty</label>
            <input type="number" class="form-control @error('qty') is-invalid  @enderror " name="qty" placeholder="Product Qty">
            @error("qty")
              <p class=" text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label>File upload</label>
            <input type="file" name="image" class="file-upload-default">
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <button class="file-upload-browse btn btn-info" type="button">Upload</button>
              </span>
            </div>
          </div>
         
          <button type="submit" class="btn btn-success mr-2">Save</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
   </div>
@endsection