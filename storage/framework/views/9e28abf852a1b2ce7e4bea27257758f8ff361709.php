<head>
    <!--- Ini Meta --->
    <?php echo $__env->make('layouts.metascript', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">

    <!-- Ini css nye -->
    <?php echo $__env->make('layouts.allcss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <title>IQRO Yuk - <?php echo $__env->yieldContent('title'); ?></title>
</head><?php /**PATH C:\xampp\htdocs\blog\resources\views/layouts/header.blade.php ENDPATH**/ ?>