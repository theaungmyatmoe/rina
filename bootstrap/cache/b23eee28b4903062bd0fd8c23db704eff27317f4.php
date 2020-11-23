<?php $__env->startSection('title','Category'); ?>
<?php $__env->startSection('content'); ?>
<button class="btn btn-outline-success m-2" onclick="cartPage()">
  Cart
  <span class="badge bg-danger" id="cart-length">0</span>
</button>
<div class="container my-5">
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row">
    <div class="col">
      <div class="card mb-3">
        <div class="card-header">
          <?php echo e($product->name); ?>

        </div>
        <div class="card-body">
          <img src='<?php echo e(asset("uploads/$product->image")); ?>' alt="Image Not Found" class="img-fluid">
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
<?php $__env->startSection("scripts"); ?>
<script>
  function cartPage() {
    let data = getItems();
    let fd = new FormData();
    fd.append("carts",data)
    axios.post( "<?php echo e(URL_ROOT); ?>/cart",fd)
    .then(function(res){
      clear();
      clear();
      location.href = "<?php echo e(URL_ROOT); ?>/cart/show"
    })
  }
    function addToCart(id) {
      // Get Stroage Item
      let ary = JSON.parse(localStorage.getItem("items"));
      if (ary == null) {
        // Set Storage Item
        let itmArys = [id];
        localStorage.setItem("items", JSON.stringify(itmArys));
      } else {
        // Check Item exist or not
        let cond = ary.indexOf(id);
        if (cond == -1) {
          ary.push(id);
          localStorage.setItem("items", JSON.stringify(ary));
        }
      }
      let cartLength = document.querySelector("#cart-length");
      cartLength.innerHTML = getItems().length;
    }
    function getItems() {
      let ary = JSON.parse(localStorage.getItem("items"));
      // console.log(ary);
      return ary;
    }
    function clear() {
      localStorage.removeItem("items");
    }
  </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /storage/emulated/0/htdocs/E-Commerence/resources/views/home.blade.php ENDPATH**/ ?>