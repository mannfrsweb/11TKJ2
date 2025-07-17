

<?php $__env->startSection('title', 'Pesan Masuk untuk ' . ucfirst($untuk)); ?>

<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/jepang.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h2 class="text-center mb-4">📬 Pesan Masuk untuk <strong><?php echo e(ucfirst($untuk)); ?></strong></h2>

    <?php if($pesans->isEmpty()): ?>
        <div class="alert alert-info text-center">Belum ada pesan masuk.</div>
    <?php else: ?>
        <?php $__currentLoopData = $pesans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pesan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5>Dari: <?php echo e($pesan->nama); ?></h5>
                    <p><strong>kesan:</strong><?php echo e($pesan->kesan); ?></p>
                    <p><strong>pesan:</strong><?php echo e($pesan->pesan); ?></p>
                    <small class="text-muted">🕒 <?php echo e($pesan->created_at->format('d M Y, H:i')); ?></small>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <div class="text-center mt-4">
        <a href="<?php echo e(route('pendataan')); ?>" class="btn btn-secondary">⬅️ Kembali</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\11TKJ2\resources\views/pesanumum/lihat.blade.php ENDPATH**/ ?>