<?php $__env->startSection('title','Category'); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-3">
  <div class="row my-5">
    <!-- Sidebar -->
    <div class="col-md-4 mb-3">
      <?php echo $__env->make('layouts.admin_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- Sidebar -->
    <div class="col">
      <?php if(App\Classes\Session::has("product_success")): ?>
      <div class="alert alert-success">
        <?php echo e(App\Classes\Session::flash("product_success")); ?>

      </div>
      <?php endif; ?>
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
        <?php echo $pages; ?>

      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
  function loadProduct() {
    let data = getItems();
    axios({
      method: 'post',
      url:"<?php echo e(URL_ROOT); ?>/cart",
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/cart.blade.php ENDPATH**/ ?>