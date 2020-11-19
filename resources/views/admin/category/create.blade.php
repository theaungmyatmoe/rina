@extends('layouts.app')
@section('title','Category')
@section('content')
<style>
  .pagination li {
    border: 1px solid #eee;
    width: 30px;
    height: 30px;
  }
</style>
<div class="container-fluid my-5">
  <div class="row g-0">
    <div class="col-md-4 mb-3">
      @include('layouts.admin_sidebar')
    </div>
    <div class="col">
      <div class="container">
        <form action="{{url('/admin/category/create')}}" method="post">
          @if(App\Classes\Session::has('delete_success'))
          <div class="alert alert-success">
            {{App\Classes\Session::flash("delete_success")}}
          </div>
          @endif
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
            {{$cat->name}}
            <!-- Edit and Delete Button Of Cat -->
            <a href="<?php echo url('/admin/category/'.$cat->id.'/delete'); ?>" class="btn btn-danger btn-sm float-right ml-3">Delete</a>
            <a href="" class="btn btn-sm btn-info float-right" data-toggle="modal" data-target="#editCat" onclick="putData('{{$cat->name}}','{{$cat->id}}')">
              Edit
            </a>
            @endforeach
          </ul>
          <div class="text-center">
            {!! $pages !!}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Start -->
  <!-- Modal -->
  <div class="modal fade" id="editCat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="edit-form">
            <label>Enter Name</label>
            <input class="form-control form-control-sm" type="text" id="edit-name">
            <input class="form-control form-control-sm" type="hidden" id="edit-token" value="{{csrf_field()}}">
            <input class="form-control form-control-sm" type="hidden" id="edit-id" value="">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal End -->
  @endsection
  @section("scripts")
  <script>
    function putData(name, id) {
      // add value of form
      document.querySelector("#edit-name").value = name;
      document.querySelector("#edit-id").value = id;
    }
    let form = document.querySelector("#edit-form");
    form.addEventListener("submit", (e)=> {
      e.preventDefault();
      let catValue = document.querySelector("#edit-name").value;
      let catid = data.append("#edit-id").value;
      let data = new FormData();
      axios.post('/admin/category/'+catid+'/update', data)
      .then((res)=> {
        console.log(res);
      })
    })

  </script>
  @endsection