<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('assest/css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assest/css/admin.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assest/css/base.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper" style="background-color: rgb(238, 239, 240); height:100vh ;">
        <?php echo $__env->make('admin.layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="content-wrapper" style="display: flex; ">
        <?php echo $__env->make('admin.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('home'); ?>
        </div>
    </div>
    <script src="<?php echo e(url('assest')); ?>/js/main.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <?php echo $__env->yieldContent('tinymce'); ?>
</body>
</html><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/master.blade.php ENDPATH**/ ?>