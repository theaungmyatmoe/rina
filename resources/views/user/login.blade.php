@extends('layouts.app')
@section('title','Category')
@section('content')
<div class="container my-5">
  <form action="" method="post">
    <h1 class="display-6 text-center">Login</h1>
    @if(App\Classes\Session::has('status'))
    <div class="alert alert-success">
      {{App\Classes\Session::flash('status')}}
    </div>
    @endif
    <input type="hidden" name="token" id="token" value="{{csrf_field()}}" />
    <div class="form-group mb-3">
      <label>Email</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group mb-3">
      <label>Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <a href="{{url('/user/register')}}">Not Registered yet?</a>
    <input type="submit" value="Login" class="btn btn-success float-right">
  </form>
</div>
@endsection