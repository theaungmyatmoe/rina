@extends('layouts.app')
@section('title','Category')
@section('content')
<a class="btn btn-outline-success m-2" href="{{url("/cart/show")}}">
  Cart
  <span class="badge bg-danger" id="cart-length">0</span>
</a>
<div class="container my-5">
  @foreach($products as $product)
  <div class="row">
    <div class="col">
      <div class="card mb-3">
        <div class="card-header">
          {{$product->name}}
        </div>
        <div class="card-body">
          <!--img src='{{asset("uploads/$product->image")}}' alt="Image Not Found" class="img-fluid"-->
        </div>
      </div>
      <div class="card-footer d-flex justify-content-between">
        <a href="" class="btn btn-info">
          Detail
        </a>
        <span>
          ${{$product->price}}
        </span>
        <button class="btn btn-success" onclick="addToCart('{{$product->id}}')">
          Add To Cart
        </button>
      </div>
    </div>
  </div>
  @endforeach
</div>
<div class="text-center my-3">
  <div class="d-flex justify-content-center">
    {!! $pages !!}
  </div>
</div>
@endsection
