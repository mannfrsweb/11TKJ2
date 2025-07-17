

<?php $__env->startSection('title', 'XI TKJ2 - Biodata Siswa'); ?>
<?php $__env->startSection('body-style', "background: linear-gradient(to right, #e0eafc, #cfdef3);"); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5 px-3">
     <a href="<?php echo e(route('siswa.index')); ?>" class="btn btn-outline-primary mb-3">⬅️ Kembali ke Daftar Siswa</a>

     <h2 class="mb-4 text-center">Biodata <?php echo e($siswa->nama); ?></h2>

     
     <?php if($siswa->foto): ?>
          <div class="text-center mb-4">
               <img src="<?php echo e(asset('storage/foto/' . $siswa->foto)); ?>" alt="Foto <?php echo e($siswa->nama); ?>" style="max-width: 180px;" class="rounded-circle shadow">
          </div>
     <?php endif; ?>

     <div class="row">
          
          <div class="col-md-6">
               <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                         <ul class="list-group list-group-flush mb-3">
                              <li class="list-group-item"><strong>Nama:</strong> <?php echo e($siswa->nama); ?></li>
                              <li class="list-group-item"><strong>Kelas:</strong> <?php echo e($siswa->kelas); ?></li>
                              <li class="list-group-item"><strong>Jurusan:</strong> <?php echo e($siswa->jurusan); ?></li>
                              <li class="list-group-item"><strong>Wali Kelas:</strong> <?php echo e($siswa->wali_kelas); ?></li>
                              <li class="list-group-item"><strong>Hobi:</strong> <?php echo e($siswa->hobi); ?></li>
                              <li class="list-group-item"><strong>Tentang:</strong> <?php echo e($siswa->tentang); ?></li>
                         </ul>
                    </div>
               </div>
          </div>

          
          <div class="col-md-6">
               <div class="card mb-3 shadow-sm">
                    <div class="card-body">

                         
                         <div id="editBox" class="edit-box" onclick="toggleForm('edit')">
                              <h5 class="edit-label">✏️ Ubah Data</h5>
                              <form action="<?php echo e(route('siswa.update', $siswa->id)); ?>" method="POST" class="edit-form">
                                   <?php echo csrf_field(); ?>
                                   <?php echo method_field('PUT'); ?>
                                   <div class="mb-3">
                                        <label>Hobi</label>
                                        <input type="text" name="hobi" class="form-control" value="<?php echo e($siswa->hobi); ?>">
                                   </div>
                                   <div class="mb-3">
                                        <label>Tentang</label>
                                        <textarea name="tentang" class="form-control" rows="3"><?php echo e($siswa->tentang); ?></textarea>
                                   </div>
                                   <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                              </form>
                         </div>

                    </div>
               </div>
          </div>
     </div>
</div>

<script>
function toggleForm(form) {
     const editBox = document.getElementById('editBox');
     const editForm = editBox.querySelector('.edit-form');

     if (editBox.classList.contains('open')) {
          editBox.classList.remove('open');
          editForm.style.display = 'none';
     } else {
          editBox.classList.add('open');
          editForm.style.display = 'block';
     }
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\frommann\resources\views/siswa/show.blade.php ENDPATH**/ ?>