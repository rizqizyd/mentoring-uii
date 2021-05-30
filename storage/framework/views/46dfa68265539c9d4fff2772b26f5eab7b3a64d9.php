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

          <!-- Begin Page Content -->
        <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Kader</h1>
<p class="mb-4">Kader mentoring seluruh mahasiswa Universitas Islam Indonesia</a>.</p>
<?php if(session('delete')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('delete')); ?>

    </div>
<?php endif; ?>

<?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
<?php endif; ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Kader</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Jurusan</th>
            <th>Angkatan</th>
            <th>Gender</th>
            <th>Kontak</th>
            <th>Kelompok</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
        <?php $i=0; ?>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kader): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $i++; ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($kader->nama); ?></td>
                <td><?php echo e($kader->jurusan); ?></td>
                <td><?php echo e($kader->angkatan); ?></td>
                <td><?php echo e($kader->jenis_kelamin); ?></td>
                <td><?php echo e($kader->nomor_hp); ?></td>
                <td><?php echo e($kader->kelompok); ?></td>
                <td>
                    <a href="/kader/<?php echo e($kader->id); ?>/detail" class="btn btn-success badge">Detail</a>
                    <!-- <a href="/kader/<?php echo e($kader->id); ?>/delete" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus permanen')">Delete</a> -->
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
      <?php echo e($students->links()); ?>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php echo $__env->make('layout.includes._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\mentoring-uii\resources\views/dashboard/data.blade.php ENDPATH**/ ?>