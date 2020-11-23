@extends('layouts.app')
@section('title','Category')
@section('content')
<div class="container my-3">
  <div class="row my-5">
    <!-- Sidebar -->
    <div class="col-md-4 mb-3">
      @include('layouts.admin_sidebar')
    </div>
    <!-- Sidebar -->
    <div class="col">
      @if(App\Classes\Session::has("product_success"))
      <div class="alert alert-success">
        {{App\Classes\Session::flash("product_success")}}
      </div>
      @endif
      <h1>Show All Products</h1>

      <table class="table table-bodered">
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Price</th>
          <th>Image</th>
          <th>Quantity</th>
          <th>Total</th>
          <th colspan="2">Manage</th>
        </tr>
        <tbody>
          @foreach($items as $product)
          <tr>
            <td>
            {{$product->id}}
            </td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>
              <img src="{{asset("uploads/".$product->image)}}" alt="Image Not Found" class="img-fluid">
            </td>
            <td>1</td>
            <td>
              <a class="btn btn-sm btn-danger" href="<?php echo url("/admin/product/$product->id/delete"); ?>">Delete</a>
            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
<div class="text-center">
  {!! $pages !!}
</div>
    </div>
  </div>
</div>
@endsection