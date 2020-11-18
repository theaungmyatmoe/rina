<?php if($errors): ?>
<?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="alert alert-danger">
<?php echo e($error); ?>

</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if($success): ?>
<div class="alert alert-success">
  <?php echo e($success); ?>

</div>
<?php endif; ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/layouts/errors.blade.php ENDPATH**/ ?>