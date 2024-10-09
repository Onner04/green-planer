
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(url('fontend')); ?>/css/order.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('home'); ?>
<div class="content-wrapper">
    <div class="prize">
            <h1 class="prize-title">THANKS YOU !</h1>

            <p class="prize-content">
                Cảm ơn bạn đã dành trọn niềm tin cho chúng mình. Sự tin tưởng này là nguồn động lực rất lớn để shop không ngừng cố gắng phát triển và hoàn thiện từng ngày.
Hãy mở sản phẩm ngay nhé
            </p>


            <div class="prize-box">
                <div class="prize-box-child">
                    <div class="prize-box-child-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <p class="prize-box-child-content">Địa chỉ nhận hàng :</p>
                    
                    <p class="prize-box-child-info">Tên : <?php echo e($order->name); ?></p>
                    <p class="prize-box-child-info">Địa chỉ : <?php echo e($order->addrest); ?></p>
                    <p class="prize-box-child-info">Số điện thoại : <?php echo e($order->phone); ?></p>
                    
                </div>
                <div class="prize-box-child">
                    <div class="prize-box-child-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                   
                    <p class="prize-box-child-content">Đơn hàng :</p>
                    <?php $__currentLoopData = $cart->getItems(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <p class="prize-box-child-info">Tên : <?php echo e($value['product_name']); ?></p>
                    <div class="prize-box-child-info-tree">
                        <img src="<?php echo e(url('images/' . $value['image'])); ?>" alt="<?php echo e($value['product_name']); ?>" class="prize-box-child-img">
                        <div class="prize-box-child-info-tree-ass">
                            
                            <p class="prize-box-child-info">Size : <?php echo e($value['height']); ?></p>
                            <p class="prize-box-child-info">Số lượng : x<?php echo e($value['quantity']); ?></p>
                            
                        </div>
                        
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </div>
                <div class="prize-box-child">
                    <div class="prize-box-child-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <p class="prize-box-child-content">Thanh toán  :</p>
                    <p class="prize-box-child-info">Tổng thanh toán </p>
                    <p class="prize-box-child-info"><?php echo e(number_format($totalPrice,0,".",".")); ?> đ</p>
                    
                    
                </div>
            </div>

            <div class="prize-exit" >
                <a href="http://127.0.0.1:8000/" class="prize-exit-link"><< Trở lại </a>
                <a href="http://127.0.0.1:8000/" class="prize-exit-link">Tiếp tục mua hàng >></a>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/product-thank.blade.php ENDPATH**/ ?>