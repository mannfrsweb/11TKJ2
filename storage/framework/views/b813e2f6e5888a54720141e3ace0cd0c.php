

<?php $__env->startSection('title', 'Kesan & Pesan untuk Teman Kelas'); ?>

<style>
    body {
        background: linear-gradient(to right, rgba(0, 0, 0, 0.6), rgba(0,0,0,0)), url('/assets/img/jpn.jpg') no-repeat center center fixed;
        background-size: cover;
        color:white
    }
</style>

<?php $__env->startSection('content'); ?> 
<div class="container py-5">
    <h2 class="text-center mb-4" style=" color: white;">Kesan & Pesan untuk Teman Kelas</h2>

    <div class="row">

        <!-- 🔹 KIRI: Form Pesan untuk Teman -->
        <div class="col-md-6">
            <div class="edit-box">
                <h5 class="text-center mb-3" onclick="toggleForm('formTeman')" style="cursor:pointer">💌 Pesan untuk Teman ⬇️</h5>
                <div id="formTeman">
                   <?php if(session('success')): ?>
                    <div class="alert alert-success text-center">
                      <?php echo e(session('success')); ?>

                    </div>
                   <?php endif; ?>
                    <form action="<?php echo e(route('pesan.siswa.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label>Nama Kamu</label>
                            <input type="text" name="nama_pengirim" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Untuk Siapa?</label>
                            <select name="nama_tujuan" class="form-control" required>
                                <option disabled selected>-- Pilih Nama --</option>
                                <?php $__currentLoopData = $namaSiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nama): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($nama); ?>"><?php echo e($nama); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Pesan & Kesan</label>
                            <textarea name="pesan_kesan" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-warning px-4">Kirim Pesan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- 🔹 KANAN: Form Jawaban Refleksi -->
        <div class="col-md-6">
            <div class="edit-box">
                <h5 class="text-center mb-3" onclick="toggleForm('formRefleksi')" style="cursor:pointer">📝 Refleksi & Saran ⬇️</h5>
                <div id="formRefleksi">
                    <?php if(session('success_refleksi')): ?>
                        <div class="alert alert-success"><?php echo e(session('success_refleksi')); ?></div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('pesan.siswa.refleksi')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label>Nama Kamu</label>
                            <input type="text" name="nama_pengirim" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label>Apa yang Ingin Dicapai Selanjutnya</label>
                            <textarea name="target_selanjutnya" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Gimana Pesan Selama PKL</label>
                            <textarea name="pesan_pkl" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Pesan untuk Sekolah</label>
                            <textarea name="pesan_sekolah" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Saran untuk TKJ 2</label>
                            <textarea name="saran_tkj2" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-info px-4">Kirim Jawaban</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        
        
                            <div class="text-center mt-3">
             <a href="<?php echo e(route('pendataan')); ?>" class="btn btn-outline-primary mb-3" style=" color: white;">⬅️ Kembali ke Menu</a>
        </div>
    </div>
</div>

<!-- JS Toggle -->
<script>
    function toggleForm(id) {
        const el = document.getElementById(id);
        el.style.display = el.style.display === "none" ? "block" : "none";
    }

    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById('formTeman').style.display = 'block';
        document.getElementById('formRefleksi').style.display = 'block';
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\11TKJ2\resources\views/pesan/form.blade.php ENDPATH**/ ?>