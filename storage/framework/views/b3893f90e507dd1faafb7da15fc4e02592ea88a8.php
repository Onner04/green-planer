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
    <body style="background-image: url('<?php echo e(url('assest')); ?>/img/admin-lo.jpg')">

        <div class="exit-item" style="margin: 20px;">
            <a href="http://127.0.0.1:8000" style="text-decoration: none; color:#000 ;" class="exit-item-link">Quay lại </a>
        </div>

        <div class="wrapper">
           
            <form action="<?php echo e(route('account.login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h1>Đăng nhập</h1>
                <h2>Đăng nhập để nhận nhiều ưu đãi hấp dẫn</h2>
                    <div class="input-box">
                        <input type="text"  class="is-invalid" name="name" placeholder="Tên người dùng ...">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="message-err" style="color:red;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="email" class="is-invalid" value="<?php echo e(old('email')); ?>" name="email" placeholder="Email ...">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="message-err" style="color:red;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" value="<?php echo e(old('password')); ?>" class="is-invalid" name="password" placeholder="Mật khẩu ....">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="message-err" style="color:red;"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Nhớ mật khẩu</label>
                        <a href="#">Quên mật khẩu?</a>
                    </div>
                    <button type="submit" class="btn">Đăng nhập</button>
                </form>
            
                <form action="<?php echo e(route('account.register')); ?>" method="POST">
                <h1>Đăng kí</h1>
                <h2>Đăng kí để nhận nhiều ưu đãi hấp dẫn</h2>
                <?php echo csrf_field(); ?>
                <div class="input-box">
                    <input type="text" name="name" class="is-invalid" placeholder="Tên người dùng ...">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="message-err" style="color:red;"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" name="email" class="is-invalid" placeholder="Email ....">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="message-err" style="color:red;"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" class="is-invalid" placeholder="mật khẩu ....">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="message-err" style="color:red;"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                
                <button type="submit" class="btn">Đăng kí</button>
            </form>
        </div>
    </body>  
    <script>
    var inputAdd = document.querySelectorAll('.is-invalid');
    var messageErr = document.querySelectorAll('.message-err');

    inputAdd.forEach((value, index) => {
        const message = messageErr[index];
        value.onfocus = function() {
            this.classList.remove("is-invalid");
            message.style.display = 'none';
        }
    });
</script>
</html><?php /**PATH D:\code\laravel\Green-planer\resources\views/account.blade.php ENDPATH**/ ?>