@extends('layouts.app')
@section('title','Category')
@section('content')

@foreach($products as $product)
<div class="container my-5">
  <div class="row">
    <div class="col">
    <div class="card mb-3">
      <div class="card-header">
        {{$product->name}}
      </div>
      <div class="card-body">
        <img src='{{asset("uploads/$product->image")}}' alt="Image Not Found" class="img-fluid">
      </div>
    </div>
    <div class="card-footer d-flex justify-content-between">
      <a href="" class="btn btn-info">
       Detail
      </a>
      <span>
        {{$product->price}}
      </span>
      <a href="" class="btn btn-success">
        Add To Cart
      </a>
    </div>
    </div>
  </div>
</div>
@endforeach

@endsection