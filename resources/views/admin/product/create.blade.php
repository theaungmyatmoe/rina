@extends('layouts.app')
@section('title','Category')
@section('content')
<div class="container my-3">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-4">
      @include('layouts.admin_sidebar')
    </div>
    <!-- Sidebar -->
    <div class="col">
      <h1>Create Products</h1>
    </div>
  </div>
</div>
@endsection