
<?php $__env->startSection('home'); ?>
<style>
    @media only screen and (max-width: 768px) {
        table{
            width: 100%;
        }
    }
</style>
<div class="app__container" style="display:flex ;justify-content:center ; ">
    <div class="container-body"style="margin-top: 100px; width:85%">
        <div class="branch">
            <ul class="branch-arrow">
                <li class="branch-item"><a href="#" class="branch-item-link"><i class="fa-solid fa-house"></i> Trang chủ <i class="fa-solid fa-angle-right"></i></a></li>
                <?php if($cateChild): ?>
                    <li class="branch-item">
                        <a href="#" class="branch-item-link"><?php echo e($cateChild->name); ?> <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                <?php else: ?>
                    <li class="branch-item">
                        <a href="#" class="branch-item-link">null<i class="fa-solid fa-angle-right"></i></a>
                    </li>
                <?php endif; ?>
                <li class="branch-item disable"><span><?php echo e($product->name); ?></span></li>
            </ul>
        </div>

        <div class="product-detail">
            <div class="product-detail-item">
                <img src="<?php echo e(url('images')); ?>/<?php echo e($product->image); ?>" alt="" class="product-item-img">

                <div class="product-item-detail">
                    <ul class="product-item-detail-list">
                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="product-item-detail-list__child" >
                            <img src="<?php echo e(url('images')); ?>/<?php echo e($image); ?>" alt="" class="product-item-detail-list__child-img">
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>

            <div class="product-info">
                <h2 class="product-info-name"><?php echo e($product->name); ?></h2>
                <div class="product-info-price">
                    <p class="last-price">Giá cũ : <span><?php echo e(number_format($product->price,0,".",".")); ?>đ</span></p>
                    <p class="new-price">Giá mới : <span><?php echo e(number_format($product->sale_price,0,".",".")); ?>đ</span></p>
                </div>
               
                <div class="form">
                    <form action="<?php echo e(route('cart.add')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                        <h3 class="title-method"> 
                           Chiều cao : 
                        </h3>
                        <label class="label-height">
                            <?php $__currentLoopData = isset($height) ? $height : []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                     
                            <input class="label-height-item" name="height" value="<?php echo e($item); ?>" type="radio"><?php echo e($item); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php $__errorArgs = ['height'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="message-err" style="color:red;font-size: 14px;display: block;"><?php echo e($message); ?></span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </label>
                        <div class="lable-num">
                            <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                            <label class="quantity-form" for="number">Số lượng:</label>
                            <input class="number-input" id="number" type="number" min="1" name="quantity"  value = "1">
                            <input type="hidden" name="action" value="add">
    
                            <button type = "submit" class = "btn">
                                Thêm vào giỏ hàng <i class="fa-solid fa-cart-shopping"></i>
                            
                            </button>
                    </form>
                    </div>

                    <div class="describe">
                        <h3 class="describe-title">Mô tả sản phẩm :</h3>
                        <p class="describe-content">
                            {<?php echo $product->description; ?>}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-new">
            <div class="product-heading">
               <h2 class="product-heading__title">Sản Phẩm Liên Quan </h2>
               <h3 class="product-heading__subtitle">Connection</h3>
            </div>
            <div class="row">
                <?php $__currentLoopData = isset($productRelate) ? $productRelate : []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="col l-3 m-6 c-6 ">
                    <div class="product">
                        <a href=" <?php echo e(route('product.detail',$value->id)); ?> " class="product-item">
                            <div class="product-item__img" style="background-image:url(<?php echo e(url('images')); ?>/<?php echo e($value->image); ?>)"></div>
                            <h4 class="product-item__name"><?php echo e($value->name); ?></h4>
                            <div class="product-item__price">
                                <span class="product-item__price-old"><?php echo e(number_format($value->sale_price,0,".",".")); ?>đ</span>
                                <span class="product-item__price-present"><?php echo e(number_format($value->price,0,".",".")); ?>đ</span>
                            </div>
                            <span class="product-item__sale">Giảm <?php echo e(ceil(100-(($value->sale_price/ $value->price)*100))); ?>%</span>
                        </a>
                        <div class="product-item__btn">
                            
                            
                            <a href="<?php echo e(route('product.detail',$value->id)); ?>" class="product-item__btn-buy">
                                <i class="ti-eye"></i>
                                    Xem chi tiết
                            </a>
                        </div>
                    </div>                               
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
            </div>
            <div class="see-all">
                <a href="" class="see-all-link">Xem tất cả</a>
            </div>
        </div>

    </div>
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    var heights = document.querySelectorAll('.label-height-item')

    heights.forEach(function(item,index){
        item.onclick = function(){
            if(document.querySelector(".label-height-item.border-black")){
                document.querySelector(".lable-size.border-black").classList.remove('border-black')
            }
            this.classList.add('border-black');
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/product-detail.blade.php ENDPATH**/ ?>