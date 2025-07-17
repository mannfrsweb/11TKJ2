<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <link rel="icon" href="<?php echo e(asset('assets/img/logo.jpg')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
  <!-- Bootstrap CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="<?php echo $__env->yieldContent('body-style'); ?>">
  <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH C:\laragon\www\frommann\resources\views/layouts/app.blade.php ENDPATH**/ ?>