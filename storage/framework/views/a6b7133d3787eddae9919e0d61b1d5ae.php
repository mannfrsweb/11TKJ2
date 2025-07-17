

<?php $__env->startSection('title', 'Kesan & Pesan untuk Wali Kelas'); ?>

<?php $__env->startSection('body-style', "background: linear-gradient(to right, #e0eafc, #cfdef3);"); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startSection('content'); ?>
<div class="container py-2">
     <a href="<?php echo e(route('pendataan')); ?>" class="btn btn-outline-primary mb-3">⬅️ Kembali ke Menu</a>
    <div class="row g-4">
        <h2 class="text-center mb-4">wali kelas kelas</h2>
        <!-- Biodata Wali Kelas -->
        <div class="col-md-6">
            <div class="card p-3">
                <div class="text-center">
                    <img src="<?php echo e(asset('assets/img/paklatif.jpg')); ?>" alt="Wali Kelas" class="rounded-circle" width="120">
                    <h4 class="mt-3">Bapak Latif AS</h4>
                    <p>Wali Kelas XI TKJ 2</p>
                </div>
                <hr>
                <ul class="list-unstyled">
                    <li><strong>Nama:</strong> Bapak Latif AS</li>
                    <li><strong>Sebagai:</strong> Wali kelas XI TKJ 2</li>
                    <li><strong>Jabatan:</strong> Kepala produkti</li>
                    <li><strong>No. Telp:</strong> 0812-1234-5678</li>
                    <li><strong>Alamat:</strong> Karawang, Jawa Barat</li>
                </ul>
            </div>
        </div>

        <!-- Form Kesan & Pesan -->
        <div class="col-md-6">
            <div class="card p-4">
                <h4 class="mb-3 text-center">Kesan & Pesan untuk Wali Kelas</h4>
                <?php if(session('succes')): ?>
                    <div class="alert alert-success"><?php echo e(session('succes')); ?></div>
                <?php endif; ?>
                <form action="<?php echo e(route('kesan.storeWaliKelas')); ?>" method="POST">
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
    // Toggle box form
    document.querySelectorAll('.edit-box').forEach(box => {
        box.addEventListener('click', function() {
            this.classList.toggle('open');
        });
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\frommann\resources\views/kesan/walikelas.blade.php ENDPATH**/ ?>