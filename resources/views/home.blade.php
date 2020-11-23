@extends('layouts.app')
@section('title','Category')
@section('content')
<button class="btn btn-outline-success m-2" onclick="cartPage()">
  Cart
  <span class="badge bg-danger" id="cart-length">0</span>
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
@section("scripts")
<script>
  function cartPage() {}
  function addToCart(id) {
    // Get Stroage Item
    let ary = JSON.parse(localStorage.getItem("items"));
    if (ary == null) {
      // Set Storage Item
      let itmArys = [id];
      localStorage.setItem("items", JSON.stringify(itmArys));
    } else {
      // Check Item exist or not
      let cond = ary.indexOf(id);
      if (cond == -1) {
        ary.push(id);   
        localStorage.setItem("items", JSON.stringify(ary));
      }
    }
    let cartLength = document.querySelector("#cart-length");
    cartLength.innerHTML = getItems();
  }
  function getItems() {
    let ary = JSON.parse(localStorage.getItem("items"));
   // console.log(ary);
   return ary.length;
  }
</script>
@endsection