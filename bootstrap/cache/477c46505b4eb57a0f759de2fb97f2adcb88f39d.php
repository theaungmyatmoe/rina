<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $__env->yieldContent('title'); ?></title>
    <script src="<?php echo e(asset('js/v.js')); ?>"></script>
    <script>
      var vConsole = new VConsole();
    </script>
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
  <?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->yieldContent('content'); ?>
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
  <script src="<?php echo e(asset('js/axios.js')); ?>"></script>
  <script src="<?php echo e(asset('js/script.js')); ?>"></script>
  <?php echo $__env->yieldContent("scripts"); ?>
</body>
</html><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/layouts/app.blade.php ENDPATH**/ ?>