
<?php $__env->startSection('home'); ?>
<div class="app__container" style="display:flex ;justify-content:center ; ">
    <div class="container-body"style="margin-top: 100px; width:85%">
        <div class="branch">
            <ul class="branch-arrow">
                <li class="branch-item"><a href="#" class="branch-item-link"><i class="fa-solid fa-house"></i> Trang chủ <i class="fa-solid fa-angle-right"></i></a></li>
                <li class="branch-item"><a href="#" class="branch-item-link"> Cây cảnh trong nhà <i class="fa-solid fa-angle-right"></i></a></li>
                <li class="branch-item disable"><span>cây sung mini</span></li>
            </ul>
        </div>

        <div class="product-detail">
            <div class="product-detail-item">
                <img src="<?php echo e(url('fontend')); ?>/img/tree-3.jpg" alt="" class="product-item-img">

                <div class="product-item-detail">
                    <ul class="product-item-detail-list">
                        <li class="product-item-detail-list__child">
                            <img src="<?php echo e(url('fontend')); ?>/img/tree-3.jpg" alt="" class="product-item-detail-list__child-img">
                        </li>
                        <li class="product-item-detail-list__child">
                            <img src="<?php echo e(url('fontend')); ?>/img/tree-3.jpg" alt="" class="product-item-detail-list__child-img">
                        </li>
                        <li class="product-item-detail-list__child">
                            <img src="<?php echo e(url('fontend')); ?>/img/tree-3.jpg" alt="" class="product-item-detail-list__child-img">
                        </li>
                    </ul>
                </div>
            </div>

            <div class="product-info">
                <h2 class="product-info-name">Cây cảnh MK01</h2>
                <div class="product-info-price">
                    <p class="last-price">Giá cũ : <span>599.000đ</span></p>
                    <p class="new-price">Giá mới : <span>399.000đ</span></p>
                </div>

                <div class="form">
                    <h3 class="title-method"> 
                       Chiều cao : 
                    </h3>
                    <label class="label-height">
                        <input class="label-height-item" type="radio">130-150
                        <input class="label-height-item" type="radio">130-150
                        <input class="label-height-item" type="radio">130-150
                    </label>
                    <div class="lable-num">
                        <input type="hidden" name="id" value="">
                        <label class="quantity-form" for="number">Số lượng:</label>
                        <input class="number-input" id="number" type="number" min="1" name="quantity"  value = "1">
                        <input type="hidden" name="action" value="add">

                        <button type = "submit" class = "btn">
                        Thêm vào giỏ hàng <i class="fa-solid fa-cart-shopping"></i>
                        </button>
                    </div>

                    <div class="describe">
                        <h3 class="describe-title">Mô tả sản phẩm :</h3>
                        <p class="describe-content">
                            Cây trầu bà xanh là một loài cây dây leo có thể trồng trong chậu đất để bàn (cây trầu bà xanh để bàn), chậu treo, trồng chậu đứng hoặc ngoài đất có giàn leo (cây leo). Người ta cũng dùng loài cây này vào việc trồng nền trong các bồn cây lớn để phủ nền và leo lên thân cây tạo màu xanh cho thân cây thay vì màu nâu xám. Trong tường cây, cây này cũng được sử dụng rất nhiều vì cây mọc khỏe, phát triển nhanh và chịu được bóng. Cây sống tốt trong nước nên còn được trồng trong nước chậu thủy tinh (cây thủy canh).
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
              <div class="col l-3 m-6 c-6 ">
                  <div class="product">
                      <a href="" class="product-item">
                          <div class="product-item__img" style="background-image:url(./img/tree-4.jpg)"></div>
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
                          <div class="product-item__img" style="background-image:url(./img/tree-4.jpg)"></div>
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
                          <div class="product-item__img" style="background-image:url(./img/tree-4.jpg)"></div>
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
                          <div class="product-item__img" style="background-image:url(./img/tree-4.jpg)"></div>
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
            </div>
            <div class="see-all">
                <a href="" class="see-all-link">Xem tất cả</a>
            </div>
        </div>

    </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/product-detail.blade.php ENDPATH**/ ?>