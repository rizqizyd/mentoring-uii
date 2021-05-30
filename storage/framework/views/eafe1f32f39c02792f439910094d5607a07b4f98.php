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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Data Kader</h1>
          </div>

          <!-- DataTales Example -->
          <form action="/kader/<?php echo e($kader->id); ?>/update" method="post">
            <?php echo e(csrf_field()); ?>


            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <div class="row">
                    <div class="col-10">
                        <h6 class="m-0 font-weight-bold text-primary">Detail Data Kader</h6>
                    </div>
                    <button type="submit" href="/kader/<?php echo e($kader->id); ?>/detail" class="btn btn-warning badge" style="margin-right:10px; margin-left:25px;">Simpan</button>
                    <a href="/kader/<?php echo e($kader->id); ?>/delete" class="btn btn-danger badge" onclick="return confirm('Data akan dihapus permanen')">Hapus</a>
                </div>  
            </div>


            <div class="card-body">
              <div class="row">
                  <div class="table-responsive col-sm">
                      <p>Nama Lengkap <input type="text" class="form-control" value="<?php echo e($kader->nama); ?>" readonly></p>
                      <!-- <p>Email <input type="text" class="form-control" value="<?php echo e($kader->email); ?>" readonly></p> -->
                      <div class="row">
                        <div class="col-sm">
                        <p>Jurusan <input type="text" class="form-control" value="<?php echo e($kader->jurusan); ?>" readonly></p>
                        </div>
                        <div class="col-sm">
                        <p>Angkatan <input type="text" class="form-control" value="<?php echo e($kader->angkatan); ?>" readonly></p>
                        </div>
                      </div>
                      <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Ubah Kelompok</label>
                            <select name="mentor_id" class="form-control" id="exampleFormControlSelect1">
                              <?php $__currentLoopData = $mentor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($m->id); ?>"><?php echo e($m->nama); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                      </div>  
                  </div>
                  <div class="table-responsive col-sm">
                          <p>Nomor HP <input type="text" class="form-control" value="<?php echo e($kader->nomor_hp); ?>" readonly></p>
                      <!-- <p>Asal <input type="text" class="form-control" value="<?php echo e($kader->asal); ?>" readonly></p> -->
                      <div class="row">
                        <div class="col-sm">
                          <p>Keterangan <input type="text" class="form-control" value="<?php echo e($kader->status); ?>" readonly></p>
                        </div>
                        <div class="col-sm">
                          <p>Kelompok Saat Ini <input type="text" class="form-control" value="<?php echo e($kader->mentor->nama); ?>" readonly></p>
                        </div>
                      </div>
                  </div>
              </div>
            </div>

          </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
    
    </div>
    <!-- Footer -->
    <?php echo $__env->make('layout.includes._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\mentoring-uii\resources\views/dashboard/detail.blade.php ENDPATH**/ ?>