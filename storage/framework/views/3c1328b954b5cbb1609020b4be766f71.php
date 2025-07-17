
<?php $__env->startSection('title', 'Semua Galeri'); ?>
<?php $__env->startSection('content'); ?>
<div class="container py-5 text-center">
   <h2>Semua Foto Galeri</h2>
   <div class="galeri-grid">
      <?php $__currentLoopData = $galeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <a href="<?php echo e(route('galeri.show', $item->id)); ?>" class="galeri-item">
            <img src="<?php echo e(asset('assets/galeri/' . $item->gambar)); ?>" alt="<?php echo e($item->judul); ?>">
            <div class="caption"><?php echo e($item->judul); ?></div>
         </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   </div>
   <div class="text-center mt-4">
    <a href="<?php echo e(url('/#galeri')); ?>" class="btn btn-primary">
     🏠 Halaman Awal
</a>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\frommann\resources\views/galeri/index.blade.php ENDPATH**/ ?>