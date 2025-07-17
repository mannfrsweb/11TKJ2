

<?php $__env->startSection('title', 'Kesan & Pesan untuk Wali Kelas'); ?>

<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/jepang.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

<?php $__env->startSection('content'); ?>
<div class="container py-2">
     <a href="<?php echo e(route('pendataan')); ?>" class="btn btn-outline-primary mb-3">⬅️ Kembali ke Menu</a>
    <div class="row g-4">
        <h2 class="text-center mb-4" style="color: white;">wali kelas kelas</h2>
        <!-- Biodata Wali Kelas -->
        <div class="col-md-6">
            <div class="card p-3">
                <div class="text-center">
                    <img src="<?php echo e(asset('assets/img/paklatif.jpg')); ?>" alt="Wali Kelas" class="rounded-circle mb-3 shadow" width="100">
                    <h4 class="mt-3">Bapak Latif AS</h4>
                    <p>Wali Kelas XI TKJ 2</p>
                </div>
                <hr>
                <ul class="list-unstyled">
                    <li><strong>Nama:</strong> Bapak Latif AS</li>
                    <li><strong>Sebagai:</strong> Wali kelas XI TKJ 2</li>
                    <li><strong>Jabatan:</strong> Kepala produktif</li>
                    <li><strong>Alamat:</strong> Karawang, Jawa Barat</li>
                    <li><strong>instragram:<a href="https://instagram.com/latif_as" target="_blank"></strong>@latif_as</li>
                   <li><strong>No. Telp:<a href="https://wa.me/+6285768636074" target="_blank" style="text-decoration:none"></strong> 0857-6863-6074</li>
                    <a href="<?php echo e(route('pesanumum.loginform', 'wali')); ?>" class="btn btn-info mt-3">📥 Lihat Pesan untuk Wali Kelas</a>
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
                         <div id="kesanBox" class="edit-box">
                            <h5 class="edit-label text-center" onclick="toggleForm('kesan')">💬 Kesan </h5>
                            <div class="edit-form">
                                <textarea name="kesan" class="form-control" rows="3" placeholder="Tulis kesan kamu di sini..."></textarea>
                            </div>
                        </div>

                       <div id="pesanBox" class="edit-box">
                                <h5 class="edit-label text-center" onclick="toggleForm('pesan')">💬 Pesan</h5>
                            <div class="edit-form">
                                <textarea name="pesan" class="form-control" rows="3" placeholder="Tulis pesan kamu di sini..."></textarea>
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
    function toggleForm(id) {
    const box = document.getElementById(id + 'Box');
    box.classList.toggle('open');
}
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\11TKJ2\resources\views/kesan/walikelas.blade.php ENDPATH**/ ?>