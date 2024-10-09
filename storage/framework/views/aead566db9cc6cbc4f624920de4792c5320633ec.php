<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo e(url('assest')); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(url('assest')); ?>/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body style="background-image: url('<?php echo e(url('assest')); ?>/img/admin-lo.jpg')">
<div class="wrapper">
            <form action="<?php echo e(route('postLogin.admin')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h1>Login admin</h1>
                
                <div class="input-box">
                    <input type="email" value="<?php echo e(old('email')); ?>"  name="email" placeholder="Tài khoản ....">
                    <i class='bx bxs-user'></i>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="message-err" style="color:red;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="input-box">
                    <input type="password" value="<?php echo e(old('password')); ?>"  name="password" placeholder="Mật khẩu ....">
                    <i class='bx bxs-lock-alt'></i>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="message-err" style="color:red;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button type="submit" class="btn">Đăng nhập</button>
            </form>
        </div>
</body>
</html><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/login.blade.php ENDPATH**/ ?>