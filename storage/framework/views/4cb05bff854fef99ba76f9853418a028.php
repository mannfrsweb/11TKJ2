

<?php $__env->startSection('title', 'Login Pesan ' . ucfirst($untuk)); ?>
<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/jepang.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

<?php $__env->startSection('content'); ?>
<div class="container py-5 text-center">
    <h3>🔐 Masuk Halaman Pesan untuk <?php echo e(ucfirst($untuk)); ?></h3>

    <?php if(session('error')): ?>
        <div class="alert alert-danger mt-3"><?php echo e(session('error')); ?></div>
    <?php endif; ?>

    <form action="<?php echo e(route('pesanumum.login', $untuk)); ?>" method="POST" class="mt-4 mx-auto" style="max-width: 400px;">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="untuk" value="<?php echo e($untuk); ?>">
        <div class="mb-3">
            <label>Nama Login:</label>
            <input type="text" name="nama_login" class="form-control" required>
        </div>
        <button class="btn btn-primary w-100">Masuk</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\11TKJ2\resources\views/pesanumum/login.blade.php ENDPATH**/ ?>