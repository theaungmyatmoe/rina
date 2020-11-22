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
          <th>#</th>
          <th>Name</th>
          <th>Price</th>
          <th>Image</th>
          <th colspan="2">Manage</th>
        </tr>
        <tbody>
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td>
            <?php echo e($product->id); ?>

            </td>
            <td><?php echo e($product->name); ?></td>
            <td><?php echo e($product->price); ?></td>
            <td>
              <img src="<?php echo e(asset("uploads/".$product->image)); ?>" alt="Image Not Found" class="img-fluid">
            </td>
            <td>
              <a class="btn btn-sm btn-info" href="<?php echo url("/admin/product/$product->id/edit"); ?>">Edit</a>
              <a class="btn btn-sm btn-danger" href="">Delete</a>
            </td>

          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
<div class="text-center">
  <?php echo $pages; ?>

</div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/admin/product/show.blade.php ENDPATH**/ ?>