
<?php $__env->startSection('home'); ?>
<style>
    .product-heading__title-cate{
        margin-top:90px;
    }
</style>

             <div class="products">
                <div class="grid wide">
                    <div class="product-new">
                          <div class="product-heading">
                             <h2 class="product-heading__title-cate">Tất cả:<?php echo e($name); ?></h2>
                          </div>
                          <div class="row">
                            
                            <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col l-3 m-6 c-6 ">
                                    <div class="product">
                                        <a href="<?php echo e(route('product.detail',$value->id)); ?>" class="product-item">
                                            <div class="product-item__img" style="background-image:url(<?php echo e(url('images')); ?>/<?php echo e($value->image); ?>)"></div>
                                            <h4 class="product-item__name"><?php echo e($value->name); ?></h4>
                                            <div class="product-item__price">
                                                <?php if($value->sale_price > 0): ?>
                                                <span class="product-item__price-old"><?php echo e(number_format($value->price,0,".",".")); ?>đ</span>
                                                <span class="product-item__price-present"><?php echo e(number_format($value->sale_price,0,".",".")); ?>đ</span>
                                                <?php else: ?>
                                                <span class="product-item__price-present"><?php echo e(number_format($value->price,0,".",".")); ?>đ</span>
                                                <?php endif; ?>
                                            </div>
                                            <?php if($value->sale_price > 0): ?>
                                            <span class="product-item__sale">Giảm <?php echo e(ceil(100-(($value->sale_price/$value->price)*100))); ?>%</span>
                                            <?php else: ?>
                                            <span class="product-item__sale">Giảm 0%</span>
                                            <?php endif; ?>
                                        </a>
                                        <div class="product-item__btn">
                                            <a href="" class="product-item__btn-buy">
                                                <i class="ti-shopping-cart"></i>
                                                Đặt hàng
                                            </a>
                                            <span class="product-item__btn-brick"></span>
                                            <a href="" class="product-item__btn-buy">
                                                <i class="ti-eye"></i>
                                                Xem chi tiết
                                            </a>
                                        </div>
                                    </div>                               
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                          
                    </div>
                    
             </div>
        

        

            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/see-all.blade.php ENDPATH**/ ?>