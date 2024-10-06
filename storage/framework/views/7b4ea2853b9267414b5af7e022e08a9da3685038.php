
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(url('fontend')); ?>/css/user.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('home'); ?>
<div class="content-wrapper" >
    <div class="container">
        <div class="container-link">
        <i class="fa-solid fa-house"></i>
        <a href="http://127.0.0.1:8000/" class="container-link-home">Trang chủ</a>
        <span class="container-link-child"> > Người dùng</span>
        </div>
        <div class="box">
            <div class="cate-user">
                <ul class="cate-user-list">
                    <li class="cate-user-list__child">
                        <p class="cate-user-list__child-link">Tài Khoản : <?php echo e(Auth::user()->email); ?></p>
                    </li>
                    <li class="cate-user-list__child">
                        <a href="<?php echo e(route('product.cart')); ?>" class="cate-user-list__child-link">Giỏ hàng</a>
                    </li>
                    <li class="cate-user-list__child">
                        <a href="<?php echo e(route('logout.user')); ?>" class="cate-user-list__child-link">Đăng xuất</a>
                    </li>
                </ul>
            </div>

            <div class="order-section">
                <div class="product-list">
                    <table>
                        <thead>
                            <tr style="font-size: 1.3rem;">
                                <th>Sản phẩm</th>                        
                                <th>Thanh toán</th>
                                <th>Thời gian</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td >
                                    <?php $__currentLoopData = $value->orderDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <img src="<?php echo e(url('images')); ?>/<?php echo e($item->product->image); ?>" alt="Cây MK05" class="product-img">
                                    <p>
                                        
                                        Size: <?php echo e($item->size); ?> , x<?php echo e($item->quantity); ?>

                                    </p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                                </td>
                                
                                <td><?php echo e(number_format($value->total_price,0,".",".")); ?>đ</td>
                                <td><?php echo e($value->created_at); ?></td>
                                <td style="font-weight: 600;">
                                    
                                    <?php if($value->status == 1): ?>
                                        <span style="color: red;" class="label label-danger">Chờ giao hàng</span>
                                    <?php else: ?>
                                        <span style="color: #33FF66;" class="label label-success">Đang giao hàng</span>
                                    <?php endif; ?>
        
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                        </tbody>
                        
                    </table>
                </div>
    
                
            </div>
        </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/user.blade.php ENDPATH**/ ?>