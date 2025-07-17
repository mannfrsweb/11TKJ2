

<?php $__env->startSection('title', 'Login Pesan untuk ' . $nama); ?>

<style>
    body {
        background: url('/assets/img/aku.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

<?php $__env->startSection('content'); ?>
<div class="container py-5 d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="card shadow" style="width: 350px;">
        <div class="card-body text-center">
            <img src="<?php echo e(asset('assets/img/user.jpg')); ?>" alt="User" class="rounded-circle mb-3 shadow" width="100">
            <h4 class="mb-3">Masuk sebagai <br><strong><?php echo e($nama); ?></strong></h4>

            <?php if(session('error')): ?>
                <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>
<form action="<?php echo e(route('pesan.login.proses', $nama)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nama_pengakses" class="form-label">Nama Samaran / Login</label>
            <input type="text" name="nama_pengakses" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi</label>
            <div class="input-group">
                <input type="password" name="password_pengakses" id="password" class="form-control" required>
                <span class="input-group-text" onclick="togglePassword()" style="cursor:pointer;">
                    👁️
                </span>
            </div>
        </div>

        <div class="text-center">
        <button class="btn btn-primary">🔐 Masuk</button>
    </div>
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-link mt-3">⬅️ Kembali</a>
    </form>
</div>

<script>
    function togglePassword() {
        const input = document.getElementById("password");
        input.type = input.type === "password" ? "text" : "password";
    }
</script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\11TKJ2\resources\views/pesan/login.blade.php ENDPATH**/ ?>