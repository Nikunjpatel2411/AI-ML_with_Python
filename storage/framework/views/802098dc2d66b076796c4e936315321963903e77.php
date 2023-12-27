
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Login</title>
    <link rel="shortcut icon" href="<?php echo e(URL::to('assets/img/favicon.png')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/plugins/bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/plugins/feather/feather.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/plugins/icons/flags/flags.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/plugins/fontawesome/css/fontawesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/plugins/fontawesome/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::to('assets/css/style.css')); ?>">
    
	<link rel="stylesheet" href="<?php echo e(URL::to('assets/css/toastr.min.css')); ?>">
	<script src="<?php echo e(URL::to('assets/js/toastr_jquery.min.js')); ?>"></script>
	<script src="<?php echo e(URL::to('assets/js/toastr.min.js')); ?>"></script>
</head>

<body>
    <style>    
        .invalid-feedback{
            font-size: 14px;
        }
    </style>
    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="<?php echo e(URL::to('assets/img/svmitlogo2.png')); ?>" alt="Logo">
                    </div>
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo e(URL::to('assets/js/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/js/feather.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/plugins/select2/js/select2.min.js')); ?>"></script>
    <script src="<?php echo e(URL::to('assets/js/script.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\Users\Dell\Desktop\school_sm_laravel9\resources\views/layouts/app.blade.php ENDPATH**/ ?>