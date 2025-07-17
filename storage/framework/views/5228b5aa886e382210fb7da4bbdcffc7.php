

<?php $__env->startSection('title', 'Refleksi & Saran Siswa TKJ 2'); ?>
<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/apa.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>
<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h2 class="text-center mb-4" style=" color: white;">📖 Refleksi dan Saran dari Siswa</h2>

    <?php if($refleksiSemua->isEmpty()): ?>
        <div class="alert alert-warning text-center">Belum ada refleksi yang dikirim.</div>
    <?php else: ?>
        <?php $__currentLoopData = $refleksiSemua; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refleksi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mb-4 shadow-sm border-start-info">
                <div class="card-body">
                    <h5><strong><?php echo e($refleksi->nama_pengirim); ?></strong> 🕒 <?php echo e($refleksi->created_at->format('d M Y, H:i')); ?></h5>
                    <?php if($refleksi->target_selanjutnya): ?>
                        <p><strong>Target Selanjutnya:</strong><br> <?php echo e($refleksi->target_selanjutnya); ?></p>
                    <?php endif; ?>
                    <?php if($refleksi->pesan_pkl): ?>
                        <p><strong>Pesan Selama PKL:</strong><br> <?php echo e($refleksi->pesan_pkl); ?></p>
                    <?php endif; ?>
                    <?php if($refleksi->pesan_sekolah): ?>
                        <p><strong>Pesan untuk Sekolah:</strong><br> <?php echo e($refleksi->pesan_sekolah); ?></p>
                    <?php endif; ?>
                    <?php if($refleksi->saran_tkj2): ?>
                        <p><strong>Pesan untuk TKJ 2:</strong><br> <?php echo e($refleksi->saran_tkj2); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <div class="text-center mt-4">
        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary">⬅️ Kembali</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\11TKJ2\resources\views/refleksi/index.blade.php ENDPATH**/ ?>