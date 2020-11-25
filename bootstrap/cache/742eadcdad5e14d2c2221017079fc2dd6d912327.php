<?php $__env->startSection('title','Category'); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-5">
  <form action="<?php echo e(url("/user/register")); ?>" method="post">
    
    <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
       <h1 class="display-6 text-center">Register</h1>
    <div class="form-group mb-3">
          <input type="hidden" name="token" id="token" value="<?php echo e(csrf_field()); ?>" />

      <label>Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group mb-3">
      <label>Email</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group mb-3">
      <label>Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <div class="form-group mb-3">
      <label>Comfirm Password</label>
      <input type="password" class="form-control" name="comfirm_password">
    </div>
    <a href="<?php echo e(url('/user/login')); ?>">Have you ever registered?</a>
    <input type="submit" value="Login" class="btn btn-success float-right">
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/user/register.blade.php ENDPATH**/ ?>