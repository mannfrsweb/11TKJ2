

<?php $__env->startSection('title', 'Pesan untuk ' . $nama); ?>

<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/aku.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h2 class="text-center mb-4">📨 Pesan dari Teman untuk <strong><?php echo e($nama); ?></strong></h2>

    <?php if($pesan->count() == 0): ?>
        <div class="alert alert-info text-center">Belum ada pesan masuk untuk <?php echo e($nama); ?>.</div>
    <?php else: ?>
        <div class="row">
            <?php $__currentLoopData = $pesan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm border-primary">
                        <div class="card-body">
                            <h5 class="card-title">Dari: <?php echo e($item->nama_pengirim); ?></h5>
                            <hr>
                            <?php if($item->pesan_kesan): ?>
                                <p><strong>Pesan & Kesan:</strong> <br> <?php echo e($item->pesan_kesan); ?></p>
                            <?php endif; ?>
                            <small class="text-muted d-block mt-2 text-end">🕒 <?php echo e($item->created_at->format('d M Y, H:i')); ?></small>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>

    <div class="text-center mt-4">
         <a href="<?php echo e(route('siswa.index')); ?>" class="btn btn-outline-primary mb-3" style="color: white;">⬅️ Kembali ke Daftar Siswa</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\11TKJ2\resources\views/pesan/ditujukan.blade.php ENDPATH**/ ?>