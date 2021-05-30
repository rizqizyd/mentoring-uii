

<?php $__env->startSection('title', 'Form Pendaftaran Mentoring'); ?>

<?php $__env->startSection('container'); ?>

<div class="background">
    
</div>


<div class="container register shadow p-5 mb-5 bg-white">
    <div class="row">
        <div class="col-12 formulir">
        <h1 class="form mb-5">Form Pendaftaran Mentoring</h1>

        <form method="post" action="/students">
        <?php echo csrf_field(); ?>
        <div class="input-field" style="margin-bottom:30px;">
            <input type="text" id="nama" name="nama" value="<?php echo e(old('nama')); ?>" required />
            <label for="nama">Nama Lengkap</label>
        </div>
        <div class="input-field" style="margin-bottom:30px;">
            <input type="text" id="nim" name="nim" value="<?php echo e(old('nim')); ?>" required />
            <label for="nim">NIM</label>
        </div>
        <div class="input-field" style="margin-bottom:30px;">
            <input type="text" id="email" name="email" value="<?php echo e(old('email')); ?>" required />
            <label for="email">Email</label>
        </div>
        <div class="input-field" style="margin-bottom:30px;">
            <input type="text" id="nomor_hp" name="nomor_hp" value="<?php echo e(old('nomor_hp')); ?>" required />
            <label for="nomor_hp">Nomor Hp</label>
        </div>
        <div class="form-group">
            <p for="exampleFormControlSelect1" class="left">Jenis Kelamin</p>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="input-field" style="margin-bottom:30px; margin-top:30px;">
            <input type="text" id="asal" name="asal" value="<?php echo e(old('asal')); ?>" required />
            <label for="asal">Asal</label>
        </div>
            <div class="form-group">
                <p for="exampleFormControlSelect1" class="left">Fakultas</p>
                <select name="fakultas" class="form-control" id="exampleFormControlSelect1">
                    <option value="FTI">FTI</option>
                    <option value="FK">FK</option>
                    <option value="FH">FH</option>
                    <option value="FBE">FBE</option>
                    <option value="FTSP">FTSP</option>
                    <option value="FPSB">FPSB</option>
                    <option value="FMIPA">FMIPA</option>
                    <option value="FIAI">FIAI</option>
                </select>
            </div>
            <div class="input-field" style="margin-bottom:30px; margin-top:25px;">
                <input type="text" id="jurusan" name="jurusan" value="<?php echo e(old('jurusan')); ?>" required />
                <label for="jurusan">Jurusan</label>
            </div>
            <div class="input-field" style="margin-bottom:30px;">
                <input type="text" id="angkatan" name="angkatan" value="<?php echo e(old('angkatan')); ?>" required />
                <label for="angkatan">Angkatan</label>
            </div>
            <div class="form-group">
                <p for="exampleFormControlSelect1" class="left">Sebelumnya Sudah Pernah Ikut Mentoring/Liqo?</p>
                <select name="status" class="form-control" id="exampleFormControlSelect1">
                <option value="Belum Pernah Liqo">Belum</option>
                <option value="Sudah Pernah Liqo">Sudah</option>
                </select>
            </div>
            <small id="emailHelp" class="form-text text-muted">Dalam waktu paling lambat 2 pekan, kamu akan menerima informasi mengenai mentor dan kelompok mentoring barumu!</small>
            <button type="submit" class="reg_button btn btn-primary center mt-3 col-lg-3 col-sm-12">Daftar Sekarang</button>
        </form>

        </div>
    </div>
</div>


<?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>    

<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\mentoring-uii\resources\views/register.blade.php ENDPATH**/ ?>