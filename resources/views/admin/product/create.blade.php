@extends('layouts.app')
@section('title','Category')
@section('content')
<div class="container my-5">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-4 mb-3">
      @include('layouts.admin_sidebar')
    </div>
    <!-- Sidebar -->
    <div class="col">
      <div class="container-fluid card">
        <h1 class="display-6 my-3">Create Product</h1>
        <form action="" method="post" class="my-3">
          <div class="row">
            <div class="form-group mb-3 w-50">
              <label for="name">Product Name</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group mb-3 w-50">
              <label for="name">Product Price</label>
              <input type="number" name="price" id="name" class="form-control">
            </div>
            <div class="form-group mb-3 w-50">
              <label for="name">Choose Category</label>
              <select name="cat_id" class="form-control">
                <option value="1">One</option>
              </select>
            </div>
            <div class="form-group mb-3 w-50">
              <label for="name">Sub Category</label>
              <select name="sub_cat_id" class="form-control">
                <option value="1">One</option>
              </select>
            </div>
            <div class="form-group mb-3">
              <label for="name">Choose Image</label>
              <input type="file" name="file" id="file" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Product Discription</label><br>
              <textarea name="content" rows="5" class="form-control"></textarea>
            </div>
          </div>
          <input type="submit" value="Create" class="btn btn-success float-right ml-2">
          <button class="btn btn-outline-secondary float-right">Back</button>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection