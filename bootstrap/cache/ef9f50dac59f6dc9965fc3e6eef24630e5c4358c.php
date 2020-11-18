<?php $__env->startSection('title','Category'); ?>
<?php $__env->startSection('content'); ?>
<style>
  .pagination li{
    border: 1px solid #eee;
    width:30px;
    height: 30px;
  }
</style>
<div class="container-fluid my-5">
  <div class="row g-0">
    <div class="col-md-4 mb-3">
      <?php echo $__env->make('layouts.admin_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="col">
      <div class="container">
        <form action="<?php echo e(url('/admin/category/create')); ?>" method="post">
          <?php if(App\Classes\Session::has('delete_success')): ?>
          <div class="alert alert-success">
            <?php echo e(App\Classes\Session::flash("delete_success")); ?>

          </div>
          <?php endif; ?>
          <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          <input type="hidden" name="_token" value="<?php echo e(csrf_field()); ?>">
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
          <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="list-group-item">
            <a href=""><?php echo e($cat['name']); ?></a>

            <!-- Edit and Delete Button Of Cat -->
            <a href="<?php echo url('/admin/category/'.$cat->id.'/delete'); ?>" class="btn btn-danger btn-sm float-right ml-3">Delete</a>
            <a href="" class="btn btn-info float-right btn-sm">Edit</a>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <div class="text-center">
          <?php echo $pages; ?>

        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/admin/category/create.blade.php ENDPATH**/ ?>