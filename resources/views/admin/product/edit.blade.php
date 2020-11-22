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
        <form action="{{url('/admin/product/create')}}" method="post" class="my-3" enctype="multipart/form-data">
          @include("layouts.errors")
          <input type="hidden" value="{{csrf_field()}}" name="token">
          <div class="row">
            <div class="form-group mb-3 w-50">
              <label for="name">Product Name</label>
              <input type="text" name="name" id="name" class="form-control" value="{{$product[0]->name}}">
            </div>
            <div class="form-group mb-3 w-50">
              <label for="name">Product Price</label>
              <input type="number" name="price" id="name" class="form-control" step="any" value="{{$product[0]->price}}">
            </div>
            <div class="form-group mb-3 w-50">
              <label for="name">Choose Category</label>
              <select name="cat_id" class="form-control">
                @foreach($cats as $cat)
                <option value="{{$cat->id}}"
            <?php
            echo $product[0]->category_id === $cat->id ? "selected" : '';
            ?>
                >{{$cat->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group mb-3 w-50">
              <label for="name">Sub Category</label>
              <select name="sub_cat_id" class="form-control">
                @foreach($sub_cats as $cat)
                <option value="{{$cat->id}}"
                            <?php
            echo $cat->id === $product[0]->sub_category_id ? "selected" : '';
            ?>
                >{{$cat->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group mb-3">
              <label for="name">Choose Image</label>
              <input type="file" name="file" id="file" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label>Product Discription</label><br>
              <textarea name="content" rows="5" class="form-control">
                {{$product[0]->content}}
              </textarea>
            </div>
          </div>
          <input type="submit" value="Update" class="btn btn-success float-right ml-2">
          <button class="btn btn-outline-secondary float-right">Back</button>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection