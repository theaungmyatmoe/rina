@extends('layouts.app')
@section('title','Category')
@section('content')
<div class="container my-3">
  <div class="row my-5">
    <!-- Sidebar -->
    <div class="col-md-4 mb-3">
      @include('layouts.admin_sidebar')
    </div>
    <!-- Sidebar -->
    <div class="col">
      @if(App\Classes\Session::has("product_success"))
      <div class="alert alert-success">
        {{App\Classes\Session::flash("product_success")}}
      </div>
      @endif
      <h1>Show All Products</h1>

      <table class="table table-bodered">
        <tr>
          <th>Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th colspan="2">Manage</th>
        </tr>
      </table>
      <div class="text-center">
        {!! $pages !!}
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script>
  function loadProduct() {
    let data = getItems();
    axios({
      method: 'post',
      url:"{{URL_ROOT}}/cart",
      data: {
        carts:data
      }
    })
    .then(function(res) {
      console.log(res.data);
    })
  }
  loadProduct();
</script>
@endsection