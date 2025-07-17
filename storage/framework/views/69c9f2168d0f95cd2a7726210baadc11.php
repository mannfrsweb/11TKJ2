

<?php $__env->startSection('title', $item->judul); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5 text-center" style="max-width: 430px; margin: auto;">
   <h2 class="mb-4" style="font-size: 24px;"><?php echo e($item->judul); ?></h2>

   <img src="<?php echo e(asset('assets/galeri/' . $item->gambar)); ?>" alt="<?php echo e($item->judul); ?>" class="img-fluid rounded shadow-sm mb-3" style="max-height: 400px; width: auto;">

   <p style="font-size: 16px; color: #555;"><?php echo e($item->deskripsi); ?></p>

   <a href="<?php echo e(route('galeri.index')); ?>" class="btn btn-secondary mt-4">← Kembali ke Galeri</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\frommann\resources\views/galeri/show.blade.php ENDPATH**/ ?>