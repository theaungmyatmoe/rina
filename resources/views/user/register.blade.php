@extends('layouts.app')
@section('title','Category')
@section('content')
<div class="container my-5">
  <form action="{{url("/user/register")}}" method="post">
    
    @include('layouts.errors')
    
       <h1 class="display-6 text-center">Register</h1>
    <div class="form-group mb-3">
          <input type="hidden" name="token" id="token" value="{{csrf_field()}}" />

      <label>Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group mb-3">
      <label>Email</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group mb-3">
      <label>Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group mb-3">
      <label>Comfirm Password</label>
      <input type="password" class="form-control" name="comfirm_password">
    </div>
    <a href="{{url('/user/login')}}">Have you ever registered?</a>
    <input type="submit" value="Login" class="btn btn-success float-right">
  </form>
</div>
@endsection