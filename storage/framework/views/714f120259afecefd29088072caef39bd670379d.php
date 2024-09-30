
<?php $__env->startSection('home'); ?>
            <div class="slide">
                <div class="slide-move">
                    <?php $__currentLoopData = isset($banner) ? $banner : []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>         
                       <div class="slide-move__item <?php echo e($loop->first ? 'active' : ''); ?>">
                           <a href="<?php echo e($value->link); ?>" class="slide-move__item-link">
                                 <img class="slide-move__item-img"  src="<?php echo e(url('images')); ?>/<?php echo e($value->image); ?>"alt="">
                           </a>
                       </div>
                      
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </div>
                <div class="slide-next">
                    <span class="slide-up"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="slide-back"><i class="fa-solid fa-angle-left"></i></span>
                </div>
           </div>


           <div class="product">
                <div class="grid wide">
                    <div class="product-new">
                        <div class="product-heading">
                            <h2 class="product-heading__title">SẢN PHẨM MỚI</h2>
                            <h3 class="product-heading__subtitle">New </h3>
                         </div>
                         <div class="row">
                            <?php $__currentLoopData = isset($product) ? $product : []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col l-3 m-6 c-6">
                                    <div class="product">
                                        <a href="<?php echo e(route('product.detail',$value->id)); ?>" class="product-item">
                                            <div class="product-item__img" style="background-image:url(<?php echo e(url('images')); ?>/<?php echo e($value->image); ?>)"></div>
                                            <h4 class="product-item__name"><?php echo e($value->name); ?></h4>
                                            <div class="product-item__price">
                                               
                                                <span class="product-item__price-old"><?php echo e(number_format($value->sale_price, 0, ".", ".")); ?>đ</span>
                                                <span class="product-item__price-present"><?php echo e(number_format($value->price, 0, ".", ".")); ?>đ</span>
                                            </div>
                                            <span class="product-item__sale">Giảm <?php echo e(ceil(100 - (($value->sale_price / $value->price) * 100))); ?>%</span>
                                        </a>
                                        <div class="product-item__btn">
                                            <a href="<?php echo e(route('product.detail', $value->id)); ?>" class="product-item__btn-buy">
                                                <i class="fa-solid fa-cart-shopping product-item__btn-buy-icon"></i>
                                            
                                                Đặt hàng
                                            </a>
                                        </div>
                                    </div>   
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                         </div>
                         <div class="see-all">
                            <a href="" class="see-all-link">Xem tất cả mẫu mới</a>
                        </div>
                        
                    </div>

                    <div class="product-new">
                        <div class="product-heading">
                           <h2 class="product-heading__title">Sản Phẩm Bán Chạy </h2>
                           <h3 class="product-heading__subtitle">Top</h3>
                        </div>
                        <div class="row">
                          <div class="col l-3 m-6 c-6 ">
                              <div class="product">
                                  <a href="" class="product-item">
                                      <div class="product-item__img" style="background-image:url(./assest/img/tree-3.jpg)"></div>
                                      <h4 class="product-item__name">cây NB02</h4>
                                      <div class="product-item__price">
                                          <span class="product-item__price-old">500.000đ</span>
                                          <span class="product-item__price-present">299.000đ</span>
                                      </div>
                                      <span class="product-item__sale">Giảm 30%</span>
                                  </a>
                                  <div class="product-item__btn">
                                     
                                     
                                      <a href="" class="product-item__btn-buy">
                                          <i class="ti-eye"></i>
                                            Xem chi tiết
                                      </a>
                                  </div>
                              </div>                               
                          </div>
                          <div class="col l-3 m-6 c-6 ">
                              <div class="product">
                                  <a href="" class="product-item">
                                      <div class="product-item__img" style="background-image:url(./assest/img/tree-3.jpg)"></div>
                                      <h4 class="product-item__name">cây NB02</h4>
                                      <div class="product-item__price">
                                          <span class="product-item__price-old">500.000đ</span>
                                          <span class="product-item__price-present">299.000đ</span>
                                      </div>
                                      <span class="product-item__sale">Giảm 30%</span>
                                  </a>
                                  <div class="product-item__btn">
                                     
                                     
                                      <a href="" class="product-item__btn-buy">
                                          <i class="ti-eye"></i>
                                            Xem chi tiết
                                      </a>
                                  </div>
                              </div>                               
                          </div>
                          <div class="col l-3 m-6 c-6 ">
                              <div class="product">
                                  <a href="" class="product-item">
                                      <div class="product-item__img" style="background-image:url(./assest/img/tree-3.jpg)"></div>
                                      <h4 class="product-item__name">cây NB02</h4>
                                      <div class="product-item__price">
                                          <span class="product-item__price-old">500.000đ</span>
                                          <span class="product-item__price-present">299.000đ</span>
                                      </div>
                                      <span class="product-item__sale">Giảm 30%</span>
                                  </a>
                                  <div class="product-item__btn">
                                     
                                     
                                      <a href="" class="product-item__btn-buy">
                                          <i class="ti-eye"></i>
                                            Xem chi tiết
                                      </a>
                                  </div>
                              </div>                               
                          </div>
                          <div class="col l-3 m-6 c-6 ">
                              <div class="product">
                                  <a href="" class="product-item">
                                      <div class="product-item__img" style="background-image:url(./assest/img/tree-3.jpg)"></div>
                                      <h4 class="product-item__name">cây NB02</h4>
                                      <div class="product-item__price">
                                          <span class="product-item__price-old">500.000đ</span>
                                          <span class="product-item__price-present">299.000đ</span>
                                      </div>
                                      <span class="product-item__sale">Giảm 30%</span>
                                  </a>
                                  <div class="product-item__btn">
                                     
                                     
                                      <a href="" class="product-item__btn-buy">
                                          <i class="ti-eye"></i>
                                            Xem chi tiết
                                      </a>
                                  </div>
                              </div>                               
                          </div>
                          <div class="col l-3 m-6 c-6 ">
                              <div class="product">
                                  <a href="" class="product-item">
                                      <div class="product-item__img" style="background-image:url(./assest/img/tree-3.jpg)"></div>
                                      <h4 class="product-item__name">cây NB02</h4>
                                      <div class="product-item__price">
                                          <span class="product-item__price-old">500.000đ</span>
                                          <span class="product-item__price-present">299.000đ</span>
                                      </div>
                                      <span class="product-item__sale">Giảm 30%</span>
                                  </a>
                                  <div class="product-item__btn">
                                     
                                     
                                      <a href="" class="product-item__btn-buy">
                                          <i class="ti-eye"></i>
                                            Xem chi tiết
                                      </a>
                                  </div>
                              </div>                               
                          </div>
                          <div class="col l-3 m-6 c-6 ">
                              <div class="product">
                                  <a href="" class="product-item">
                                      <div class="product-item__img" style="background-image:url(./assest/img/tree-3.jpg)"></div>
                                      <h4 class="product-item__name">cây NB02</h4>
                                      <div class="product-item__price">
                                          <span class="product-item__price-old">500.000đ</span>
                                          <span class="product-item__price-present">299.000đ</span>
                                      </div>
                                      <span class="product-item__sale">Giảm 30%</span>
                                  </a>
                                  <div class="product-item__btn">
                                     
                                     
                                      <a href="" class="product-item__btn-buy">
                                          <i class="ti-eye"></i>
                                            Xem chi tiết
                                      </a>
                                  </div>
                              </div>                               
                          </div>
                          <div class="col l-3 m-6 c-6 ">
                              <div class="product">
                                  <a href="" class="product-item">
                                    <div class="product-item__img" style="background-image:url(./assest/img/tree-3.jpg)"></div>       
                                       <h4 class="product-item__name">cây NB02</h4>
                                      <div class="product-item__price">
                                          <span class="product-item__price-old">500.000đ</span>
                                          <span class="product-item__price-present">299.000đ</span>
                                      </div>
                                      <span class="product-item__sale">Giảm 30%</span>
                                  </a>
                                  <div class="product-item__btn">
                                     
                                     
                                      <a href="" class="product-item__btn-buy">
                                          <i class="ti-eye"></i>
                                            Xem chi tiết
                                      </a>
                                  </div>
                              </div>                               
                          </div>
                          <div class="col l-3 m-6 c-6 ">
                              <div class="product">
                                  <a href="" class="product-item">
                                    <div class="product-item__img" style="background-image:url(./assest/img/tree-3.jpg)"></div>                                      <h4 class="product-item__name">cây NB02</h4>
                                      <div class="product-item__price">
                                          <span class="product-item__price-old">500.000đ</span>
                                          <span class="product-item__price-present">299.000đ</span>
                                      </div>
                                      <span class="product-item__sale">Giảm 30%</span>
                                  </a>
                                  <div class="product-item__btn">
                                     
                                     
                                      <a href="" class="product-item__btn-buy">
                                          <i class="ti-eye"></i>
                                            Xem chi tiết
                                      </a>
                                  </div>
                              </div>                               
                          </div>
                        </div>
                        <div class="see-all">
                            <a href="" class="see-all-link">Xem tất cả</a>
                        </div>
                    </div>
                </div>
           </div>

          
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/home.blade.php ENDPATH**/ ?>