    <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Mentoring UII 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

      </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo e(asset('admin/assets/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo e(asset('admin/assets/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="<?php echo e(asset('admin/assets/vendor/chart.js/Chart.min.js')); ?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo e(asset('admin/assets/js/demo/chart-area-demo.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/assets/js/demo/chart-pie-demo.js')); ?>"></script>

  <!-- Slider -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://use.fontawesome.com/33d05bf7fb.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
  <script src="<?php echo e(asset('admin/assets/js/slider-boxes.js')); ?>"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		<?php if(Session::has('success')): ?>
			toastr.success("<?php echo e(Session::get('success')); ?>", "Sukses")
		<?php endif; ?>
	</script>

</body>

</html><?php /**PATH D:\Laravel\mentoring-uii\resources\views/layout/includes/_footer.blade.php ENDPATH**/ ?>