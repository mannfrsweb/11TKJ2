

<?php $__env->startSection('title', 'XI TKJ 2 - Daftar Siswa'); ?>
<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/jpn.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>


<?php $__env->startSection('content'); ?>
  <h1 class="text-center" style=" color: white;">Daftar Siswa XI TKJ 2</h1>

  <div class="grid">
    <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a href="<?php echo e(route('siswa.show', $item->id)); ?>" class="grid-item">
        <?php echo e($item->nama); ?>

      </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
  </div>
  <a href="<?php echo e(url('/')); ?>" class="btn btn-primary position-fixed" 
  style="bottom: 20px; right: 20px; z-index: 999;">
     🏠 Halaman Awal
</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\11TKJ2\resources\views/siswa/index.blade.php ENDPATH**/ ?>