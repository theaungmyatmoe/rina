@extends('layouts.app')
@section('title','Category')
@section('content')
<div class="container-fluid my-5">
  <div class="row g-0">
    <div class="col-md-4 mb-3">
      @include('layouts.admin_sidebar')
    </div>
    <div class="col">
      <div class="container">
        <form action="{{url('/admin/category/create')}}" method="post">
      @include('layouts.errors')
          <input type="hidden" name="_token" value="{{csrf_field()}}">
          <div class="form-group">
            <label>Categroy Name</label>
            <input type="text" class="form-control mt-3" name="name" placeholder="Type Category Name">
          </div>
          <div class="form-group">
            <div class="form-control border-0">
              <input type="submit" value="Create" class="btn btn-outline-success float-right">
            </div>
          </div>

        </form>
        <ul class="list-group my-5">
          @foreach($cats as $cat)
          <li class="list-group-item">
            <a href="">{{$cat->name}}</a>

            <!-- Edit and Delete Button Of Cat -->
            <a href="" class="btn btn-danger btn-sm float-right ml-3">Delete</a>
            <a href="" class="btn btn-info float-right btn-sm">Edit</a>
          </li>
          @endforeach
        </ul>


      </div>
    </div>
  </div>
</div>
@endsection