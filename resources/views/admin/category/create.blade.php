@extends('layouts.app')
@section('title','Category')
@section('content')
  <div class="container my-5">
    <h1 class="text-center mb-3">Create Category</h1>
    @if(App\Classes\Session::has("errors"))
    {{App\Classes\Session::flash("errors")}}
    @endif
    <form action="{{url('/admin/category/create')}}" method="post" enctype="multipart/form-data">

      <input type="hidden" name="token" value="{{csrf_field()}}">
      
      <div class="form-group">
        <label class="mb-3">Enter Category Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <input type="file" class="form-control" name="file">
      </div>
<button type="submit" class="btn btn-outline-success float-right mt-2">Create</button>
    </form>
  </div>
@endsection