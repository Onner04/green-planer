<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(url('assest')); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(url('assest')); ?>/css/all.css">
    <link rel="stylesheet" href="<?php echo e(url('assest')); ?>/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <h1>Login admin</h1>
                <div class="input-box">
                    <input type="text" placeholder="Tài khoản">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Mật khẩu">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn">Đăng nhập</button>
            </form>
        </div>
</body>
</html><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/login.blade.php ENDPATH**/ ?>