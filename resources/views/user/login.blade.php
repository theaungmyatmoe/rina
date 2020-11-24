@extends('layouts.app')
@section('title','Category')
@section('content')
<div class="container my-5">
  <form action="" method="post">
    <h1 class="display-6 text-center">Login</h1>
    <div class="form-group mb-3">
      <label>Email</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group mb-3">
      <label>Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <input type="submit" value="Login" class="btn btn-success float-right">
  </form>

</div>
@endsection