<?php $__env->startSection('title','Category'); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-5">
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row">
    <div class="col">
      <div class="card mb-3">
        <div class="card-header">
          <?php echo e($product->name); ?>

        </div>
        <div class="card-body">
          <!--img src='<?php echo e(asset("uploads/$product->image")); ?>' alt="Image Not Found" class="img-fluid"-->
        </div>
      </div>
      <div class="card-footer d-flex justify-content-between">
        <a href="" class="btn btn-info">
          Detail
        </a>
        <span>
          $<?php echo e($product->price); ?>

        </span>
        <button class="btn btn-success" onclick="addToCart('<?php echo e($product->id); ?>')">
          Add To Cart
        </button>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="text-center my-3">
  <div class="d-flex justify-content-center">
    <?php echo $pages; ?>

  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/home.blade.php ENDPATH**/ ?>