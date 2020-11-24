<?php $__env->startSection('title','Category'); ?>
<?php $__env->startSection('content'); ?>
<div class="container my-5">
  <form action="" method="post">
    <h1 class="display-6 text-center">Login</h1>
    <div class="form-group mb-3">
      <label>Email</label>
      <input type="email" class="form-control" name="email">
    </div>
    <div class="form-group mb-3">
      <label>Password</label>
      <input type="password" class="form-control" name="password">
    </div>
    <input type="submit" value="Login" class="btn btn-success float-right">
  </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/user/login.blade.php ENDPATH**/ ?>