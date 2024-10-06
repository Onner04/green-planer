<DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login admin</title>
        <link rel="stylesheet" href="<?php echo e(url('fontend')); ?>/css/login.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>

        <div class="wrapper">
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <h1>Đăng nhập</h1>
                <h2>Đăng nhập để nhận nhiều ưu đãi hấp dẫn</h2>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Tài khoản">
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Mật khẩu">
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Nhớ mật khẩu</label>
                    <a href="#">Quên mật khẩu?</a>
                </div>
                <button type="submit" class="btn">Đăng nhập</button>
            </form>
            <form action="" method="POST">
                <?php echo csrf_field(); ?>
                <h1>Đăng kí</h1>
                <h2>Đăng kí để nhận nhiều ưu đãi hấp dẫn</h2>
                <div class="input-box">
                    <input type="text" placeholder="Tài khoản"
                    required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Mật khẩu"
                    required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Nhập lại mật khẩu"
                    required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn">Đăng kí</button>
            </form>
        </div>
    </body>  
</html><?php /**PATH D:\code\laravel\Green-planer\resources\views/login-user.blade.php ENDPATH**/ ?>