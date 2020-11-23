@extends('layouts.app')
@section('title','Category')
@section('content')
<button class="btn btn-outline-success m-2" onclick="cartPage()">
  Cart
  <span class="badge bg-danger">0</span>
</button>
<div class="container my-5">
@foreach($products as $product)
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
        ${{$product->price}}
      </span>
      <a href="" class="btn btn-success">
        Add To Cart
      </a>
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
@section("scripts")
<script>
function cartPage(){
  alert(23)
}
</script>
@endsection