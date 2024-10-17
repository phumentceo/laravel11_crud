@extends('components.master')
@section('contents')
   <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between  align-items-center">
            <h3>Update Product</h3>
            <a href="{{ route('product.index') }}" class=" btn btn-danger btn-sm rounded-0">back</a>
        </div>
        <form class="forms-sample">

          <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="name" placeholder="Product Name">
          </div>

          <div class="form-group">
            <label>Product Price</label>
            <input type="email" class="form-control" name="price" placeholder="Product Price">
          </div>

          <div class="form-group">
            <label>Product Qty</label>
            <input type="password" class="form-control" name="price" placeholder="Product Price">
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