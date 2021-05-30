<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mentoring - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo e(asset('admin/assets/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo e(asset('admin/assets/css/sb-admin-2.min.css')); ?>" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container mt-4">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" action="/postlogin" method="POST">
                    <?php echo e(csrf_field()); ?>

						<div class="form-group">
							<label for="signin-email" class="control-label sr-only">Email</label>
							<input name="email" type="email" class="form-control form-control-user" id="signin-email" placeholder="Enter Email Address...">
						</div>
						<div class="form-group">
							<label for="signin-password" class="control-label sr-only">Password</label>
							<input name="password" type="password" class="form-control form-control-user" id="signin-password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox small">
                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                            </div>
                        </div>
						<button type="submit" class="btn btn-primary btn-user btn-block mb-4">Login</button>
                  </form>
                  <!-- <div class="mt-5 text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
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
  <script src="<?php echo e(asset('admin/assets/js/sb-admin-2.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH D:\Laravel\mentoring-uii\resources\views/auth/login.blade.php ENDPATH**/ ?>