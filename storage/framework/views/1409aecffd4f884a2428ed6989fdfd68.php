

<?php $__env->startSection('title', 'Kesan & Pesan untuk Ketua Kelas'); ?>

<?php $__env->startSection('body-style', "background: linear-gradient(to right, #c2e9fb, #a1c4fd);"); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-2">
     <a href="<?php echo e(route('pendataan')); ?>" class="btn btn-outline-primary mb-3">⬅️ Kembali ke Menu</a>
    <div class="row g-4">
        <h2 class="text-center mb-4">ketua kelas </h2>
       
        <!-- Biodata Ketua Kelas -->
        <div class="col-md-6">
            <div class="card p-3">
                <div class="text-center">
                    <img src="<?php echo e(asset('assets/img/salman.jpg')); ?>" alt="Ketua Kelas" class="rounded-circle" width="120">
                    <h4 class="mt-3">M. Salman FRS</h4>
                    <p>Ketua Kelas XI TKJ 2</p>
                </div>
                <hr>
                <ul class="list-unstyled">
                    <li><strong>Nama:</strong> M. Salman FRS</li>
                    <li><strong>Jurusan:</strong> Teknik Komputer dan Jaringan</li>
                    <li><strong>No. Telp:</strong> 0896-7654-3210</li>
                    <li><strong>Alamat:</strong> Karawang, Jawa Barat</li>
                </ul>
            </div>
        </div>

        <!-- Form Kesan & Pesan -->
        <div class="col-md-6">
            <div class="card p-4">
                <h4 class="mb-3 text-center">Kesan & Pesan untuk Ketua Kelas</h4>
                <?php if(session('success')): ?>
                    <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>
                <form action="<?php echo e(route('kesan.storeKetuaKelas')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label for="nama">Nama Kamu</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>

                    <!-- Toggle Pesan -->
                    <div class="mb-3">
                        <div class="edit-box">
                            <div class="edit-label">Tulis Kesan</div>
                            <div class="edit-form">
                                <textarea name="pesan[]" class="form-control" rows="3" placeholder="Tulis kesan kamu di sini..."></textarea>
                            </div>
                        </div>

                        <div class="edit-box">
                            <div class="edit-label">Tulis Pesan</div>
                            <div class="edit-form">
                                <textarea name="pesan[]" class="form-control" rows="3" placeholder="Tulis pesan kamu di sini..."></textarea>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary w-100" type="submit">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.edit-box').forEach(box => {
        box.addEventListener('click', function() {
            this.classList.toggle('open');
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\frommann\resources\views/kesan/ketuakelas.blade.php ENDPATH**/ ?>