<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" type="image/png" sizes="16x16" href="/images/fav.png">

    <!-- Slider -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('admin/assets/js/slider-boxes.scss')); ?>" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--  CSS Style  -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/register.css')); ?>">
    
    <!-- JS -->
    <link rel="stylesheet" href="<?php echo e(asset('/js/carousel.js')); ?>">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title><?php echo $__env->yieldContent('title'); ?></title>
  </head>
  <body>

<nav class="navbar-light navbar sticky-top navbar-expand-lg shadow-sm p-3 mb-3 bg-white">
    <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="/images/muii.png" height="36" width="145"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
            </div>
    </div>
</nav>

    <?php echo $__env->yieldContent('container'); ?>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Slider -->
    <script src="https://use.fontawesome.com/33d05bf7fb.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="<?php echo e(asset('admin/assets/js/slider-boxes.js')); ?>"></script>
  </body>
</html><?php /**PATH D:\mentoring-uii\resources\views/layout/header.blade.php ENDPATH**/ ?>