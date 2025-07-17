

<?php $__env->startSection('title', 'Kesan & Pesan untuk Ketua Kelas'); ?>

<style>
    body {
        background:  linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/sunset.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

<?php $__env->startSection('content'); ?>
<div class="container py-2">
     <a href="<?php echo e(route('pendataan')); ?>" class="btn btn-outline-primary mb-3">⬅️ Kembali ke Menu</a>
    <div class="row g-4">
        <h2 class="text-center mb-4" style=" color: white;">ketua kelas </h2>
        
       
        <!-- Biodata Ketua Kelas -->
        <div class="col-md-6">
            <div class="card p-3">
                <div class="text-center">
                    <img src="<?php echo e(asset('assets/img/salman.jpg')); ?>" alt="Ketua Kelas"class="rounded-circle mb-3 shadow" width="100">
                    <h4 class="mt-3">M. Salman FRS</h4>
                    <p>Ketua Kelas XI TKJ 2</p>
                </div>
                <hr>
                <ul class="list-unstyled">
                    <li><strong>Nama:</strong> M. Salman FRS</li>
                    <li><strong>Sebagai:</strong> Ketua kelas XI TKJ 2</li>
                    <li><strong>Jurusan:</strong> Teknik Komputer dan Jaringan</li>
                    <li><strong>Alamat:</strong> Bekasi, Jawa Barat</li>
                    <li><strong>instragram:<a href="https://instagram.com/mannsal_frs" target="_blank"></strong>@mannsal_frs</li>
                    <li><strong>No. Telp:<a href="https://wa.me/+6281932746004" target="_blank" style="text-decoration:none"></strong> 0819-3274-6004</li>
                    <a href="<?php echo e(route('pesanumum.loginform', 'ketua')); ?>" class="btn btn-info mt-3">📥 Lihat Pesan untuk Ketua</a>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\11TKJ2\resources\views/kesan/ketuakelas.blade.php ENDPATH**/ ?>