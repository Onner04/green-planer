
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(url('fontend')); ?>/css/cart.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('home'); ?>
<div class="container-wrapper">
    <div class="cart">

        <div class="breadcrumb">
            <a href="#">Trang chủ</a> > Giỏ hàng
        </div>
        <div class="cart-body">

            <table>
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng giá</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $cart->getItems(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                        <td >
                            <img src="<?php echo e(url('images')); ?>/<?php echo e($value['image']); ?>" alt="" class="product-image">
                            <div>
                                <strong><?php echo e($value['product_name']); ?></strong><br>
                                Chiều cao : <?php echo e($value['height']); ?><br>
                                
                            </div>
                        </td>
                        <td><?php echo e(number_format($value['price'],0,".",".")); ?> đ</td>
                        <td>
                            <form action="<?php echo e(route('cart.update')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="id" value="<?php echo e($key); ?>" >
                                <input type="number"  name="quantity" value="<?php echo e($value['quantity']); ?>" min="1" class="quantity-input">
                                <button class="update-btn" type="submit">Cập nhật</button>

                            </form>
                        </td>
                        <td><?php echo e(number_format($value['price'] * $value['quantity'],0,".",".")); ?> đ</td>
                        <td><a href="<?php echo e(route('cart.delete',$key )); ?>" class="remove-btn">Xóa</a></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </tbody>
            </table>

            <div class="order-summary">
                <h3>Giá trị đơn hàng</h3>
                <p>Tổng giá: <?php echo e(number_format($totalPrice,0,".",".")); ?> đ</p>
                <p>Tổng số lượng: <?php echo e($totalQuantity); ?></p>
                <p class="order-price"><strong>TỔNG THANH TOÁN: <?php echo e(number_format($totalPrice,0,".",".")); ?> đ</strong></p>
                <a href="<?php echo e(route('product.order')); ?>" class="order-btn">ĐẶT HÀNG</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/cart.blade.php ENDPATH**/ ?>