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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/layouts/navbar.blade.php ENDPATH**/ ?>