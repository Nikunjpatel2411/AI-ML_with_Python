
<?php $__env->startSection('content'); ?>
    <div class="main-wrapper">
        <div class="error-box">
            <h1>404</h1>
            <h3 class="h2 mb-3"><i class="fas fa-exclamation-triangle"></i> Oops! Page not found!</h3>
            <p class="h4 font-weight-normal">The page you requested was not found.</p>
            <a href="<?php echo e(route('home')); ?>" class="btn btn-primary">Back to Home</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dell\Desktop\school_sm_laravel9\resources\views/errors/404.blade.php ENDPATH**/ ?>