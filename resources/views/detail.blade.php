@extends('layouts.app')
@section('title','Product')
@section('content')
<div class="container my-3">
  <div class="row jumbotron g-0" style="border:1px solid #ddd;">
    <div class="card-header">
      {{$product->name}}

    </div>
    <div class="col-md-4">
      <img src='{{asset("uploads/$product->image")}}' alt="Image Not Found" class="img-fluid h-100">
    </div>
    <div class="col-md-8 p-1">
      {{$product->content}}
    </div>
    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-outline-warning">{{$product->price}}$</button>
      <button class="btn btn-success" onclick="addToCart('{{$product->id}}')">Add To Cart</button>
    </div>
  </div>
</div>
@endsection