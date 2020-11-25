<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><?php echo e(getEnv('APP_NAME')); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/admin')); ?>">Admin Panel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url("/cart/show")); ?>">
            Cart
            <span class="badge bg-danger" id="cart-length">0</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php if(check()): ?>
            <?php echo e(user()->name); ?>

            <?php else: ?>
            Member
            <?php endif; ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <?php if(check()): ?>
            <a class="dropdown-item" href="<?php echo e(url('/user/logout')); ?>">Logout</a>
            <?php else: ?>
            <a class="dropdown-item" href="<?php echo e(url('/user/register')); ?>">Register</a>
            <a class="dropdown-item" href="<?php echo e(url('/user/login')); ?>">Login</a>
            <?php endif; ?>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<?php $__env->startSection("scripts"); ?>
<script>
  let cartLength = document.querySelector("#cart-length");
  cartLength.innerHTML = getItems().length;
</script>
<?php $__env->stopSection(); ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>