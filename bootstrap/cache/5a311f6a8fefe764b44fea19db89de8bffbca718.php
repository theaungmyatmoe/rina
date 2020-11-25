<?php $__env->startSection('title','Product'); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-3">
  <div class="row jumbotron g-0" style="border:1px solid #ddd;">
    <div class="card-header">
      <?php echo e($product->name); ?>


    </div>
    <div class="col-md-4">
      <img src='<?php echo e(asset("uploads/$product->image")); ?>' alt="Image Not Found" class="img-fluid h-100">
    </div>
    <div class="col-md-8 p-1">
      <?php echo e($product->content); ?>

    </div>
    <div class="card-footer d-flex justify-content-between">
      <button class="btn btn-outline-warning"><?php echo e($product->price); ?>$</button>
      <button class="btn btn-success" onclick="addToCart('<?php echo e($product->id); ?>')">Add To Cart</button>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/detail.blade.php ENDPATH**/ ?>