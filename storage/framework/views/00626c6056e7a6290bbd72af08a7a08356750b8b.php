
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(url('fontend')); ?>/css/order.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('home'); ?>
<div class="container-wrapper">
<div class="container-cart">
        <div class="menu-link">
            <i class="fas fa-home"></i> <span style="cursor: pointer;">Trang chủ > Đặt hàng</span>
        </div>
        <h2>Vui lòng nhập các trường bên dưới để hoàn tất đơn hàng của bạn</h2>
        
        <div class="order-section">
            <div class="product-list">
                <table>
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $cart->getItems(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            
                            <td>    
                                <img src="<?php echo e(url('images')); ?>/<?php echo e($value['image']); ?>" alt="Cây MK05" class="product-img">
                                <div>
                                    <strong><?php echo e($value['product_name']); ?></strong><br>
                                    Chiều cao: <?php echo e($value['height']); ?><br>
                                    Số lượng: <?php echo e($value['quantity']); ?>

                                </div>
                            </td>
                            <td><?php echo e(number_format($value['price'],0,".",".")); ?> đ</td>
                            <td><?php echo e($value['quantity']); ?></td>
                            <td><?php echo e(number_format($value['price'] * $value['quantity'],0,".",".")); ?> đ</td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="total-label">Tổng thanh toán:</td>
                            <td class="total-price"><?php echo e(number_format($totalPrice,0,".",".")); ?> đ</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="shipping-info">
                <h3>Thông tin giao hàng</h3>
                <form action="" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id_user" value="<?php echo e(Auth::id()); ?>">
                    <div class="body-box-select">
                        <label for="name">Tên:</label>
                        <input type="text" id="name" name="name" placeholder="Nhập tên của bạn ...">
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
                    </div>
                    <div class="body-box-select">
                        <label for="phone">Số điện thoại:</label>
                        <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại ....">
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
                    </div>
                    <div class="body-box-select">
                        <label for="address">Địa chỉ:</label>
                        <input type="text" id="address" name="address" placeholder="Nhập địa chỉ ....">
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
                    </div>
                    <div class="body-box-select">
                        <label for="note">Ghi chú:</label>
                        <textarea type="text" cols="30" rows="10" id="note" name="note"></textarea>

                    </div>

                    <button class="btn" style="margin-top: 20px;" type="submit">Đặt hàng</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/order.blade.php ENDPATH**/ ?>