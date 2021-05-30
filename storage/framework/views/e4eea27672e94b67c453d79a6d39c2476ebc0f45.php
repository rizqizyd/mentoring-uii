<!-- Header -->
<?php echo $__env->make('layout.includes._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Sidebar -->
  <?php echo $__env->make('layout.includes._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar / Navbar -->
      <?php echo $__env->make('layout.includes._navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3">
          <h1 class="h3 mb-2 text-gray-800">Data Mentor</h1> 
          <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Mentor</a>
        </div>
          <?php if(session('delete')): ?>
              <div class="alert alert-danger">
                  <?php echo e(session('delete')); ?>

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          <?php endif; ?>

          <?php if(session('success')): ?>
                  <div class="alert alert-success">
                      <?php echo e(session('success')); ?>

                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
          <?php endif; ?>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kader</h6>
          </div>
          <!-- Button trigger modal -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nim</th>
                    <th>Gender</th>
                    <th>Jurusan</th>
                    <th>Angkatan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i=0; ?>
                <?php $__currentLoopData = $mentor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $i++; ?>
                    <tr>
                        <td><?php echo e($i); ?></td>
                        <td><?php echo e($m->nama); ?></td>
                        <td><?php echo e($m->nim); ?></td>
                        <td><?php echo e($m->jenis_kelamin); ?></td>
                        <td><?php echo e($m->jurusan); ?></td>
                        <td><?php echo e($m->angkatan); ?></td>
                        <td>
                            <a href="#" class="btn btn-danger badge" onclick="return confirm('Data akan dihapus permanen')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mentor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="/mentor/create" method="post" enctype="multipart/form-data">
      <?php echo e(csrf_field()); ?>

        <div class="form-group <?php echo e($errors->has('nama') ? 'has-error' : ''); ?>">
            <label for="exampleInputEmail1">Nama</label>
            <input name="nama" placeholder="Nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(old('nama')); ?>">
            <?php if($errors->has('nama')): ?>
                <span class="help-block"><?php echo e($errors->first('nama')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group <?php echo e($errors->has('nim') ? 'has-error' : ''); ?>">
            <label for="exampleInputEmail1">NIM</label>
            <input name="nim" placeholder="NIM" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(old('nim')); ?>">
            <?php if($errors->has('nim')): ?>
                <span class="help-block"><?php echo e($errors->first('nim')); ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group <?php echo e($errors->has('jurusan') ? 'has-error' : ''); ?>">
            <label for="exampleInputEmail1">Jurusan</label>
            <input name="jurusan" placeholder="Jurusan" type="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(old('jurusan')); ?>">
            <?php if($errors->has('jurusan')): ?>
                    <span class="help-block"><?php echo e($errors->first('jurusan')); ?></span>
                <?php endif; ?>
        </div>
        <div class="form-group <?php echo e($errors->has('angkatan') ? 'has-error' : ''); ?>">
            <label for="exampleInputEmail1">Angkatan</label>
            <input name="angkatan" placeholder="Angkatan" type="angkatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo e(old('angkatan')); ?>">
            <?php if($errors->has('angkatan')): ?>
                    <span class="help-block"><?php echo e($errors->first('angkatan')); ?></span>
                <?php endif; ?>
        </div>
        <div class="form-group <?php echo e($errors->has('jenis_kelamin') ? 'has-error' : ''); ?>">
            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
            <option value="L"<?php echo e((old('jenis_kelamin') == 'L') ? 'selected' : ''); ?>>Laki-Laki</option>
            <option value="P"<?php echo e((old('jenis_kelamin') == 'P') ? 'selected' : ''); ?>>Perempuan</option>
            </select>
        <?php if($errors->has('jenis_kelamin')): ?>
                <span class="help-block"><?php echo e($errors->first('jenis_kelamin')); ?></span>
            <?php endif; ?>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Data</button>
      </div>
    </div>
  </div>
</div>

<?php echo $__env->make('layout.includes._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\mentoring-uii\resources\views/dashboard/mentor.blade.php ENDPATH**/ ?>