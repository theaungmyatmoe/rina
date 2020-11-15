<?php $__env->startSection('title','Category'); ?>
<?php $__env->startSection('content'); ?>
  <div class="container my-5">
    <h1 class="text-center mb-3">Create Category</h1>
    <form action="<?php echo e(url('admin/category/create')); ?>" method="post">
      <div class="form-group">
        <label class="mb-3">Enter Category Name</label>
        <input type="text" class="form-control" name="name">
      </div>
<button type="submit" class="btn btn-outline-success float-right mt-2">Create</button>
    </form>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/admin/category/create.blade.php ENDPATH**/ ?>