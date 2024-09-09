
<?php $__env->startSection('home'); ?>
<div class="content-wrapper" style="width:70% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả sản phẩm </h2>
          </div>


          <div class="child-box ">
              <div class="content">
              <?php if(Session::has('message')): ?>
                    <div class="alert alert-success">
                         
                            <span aria-hidden="true">&times;</span></button>
                            <strong>
                              <?php echo e(Session::get('message')); ?>

                            </strong>
                    </div>
                <?php endif; ?>
              </div>

             <div class="child-box-header">
             <a href="" class="child-box-header__add" >+ Thêm sản phẩm</a>

               <div class="child-box-search">
                   <input type="text" placeholder="Search" >
                   <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
               </div>

             </div>

              <div class="child-box-body">
                  <table class="table">
                      <thead>
                          <tr class="table-news">
                              <th>STT</th>
                              <th>Tên sản phẩm</th>
                              <th>Ảnh</th>
                              <th>Số lượng</th>                           
                              <th>Giá</th>
                              <th>Giá đặc biệt</th>
                              <th>Thuộc danh mục</th>
                              <th>Trạng Thái</th>
                              <th>Hành Động </th>
                          </tr>
                      </thead>
                        <tbody>
                          <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                              <td><?php echo e($value->id); ?></td>
                              <td><span class="table-news-name"><?php echo e($value->name); ?></span></td>
                              <td><img src="<?php echo e(url('images')); ?>/<?php echo e($value->image); ?>" style="width:60px" class="table-news-title"></img></td>
                              <td><span class="table-news-category"><?php echo e($value->quantity); ?></span></td>
                              <td><span><?php echo e(number_format($value->price,0,".",".")); ?>đ</span></td>
                              <td><span class="table-news-status"><?php echo e(number_format($value->sale_price,0,".",".")); ?>đ</span></td>
                              <td><span class="table-news-status"><?php echo e($value->Category->name); ?></span></td>
                              <td>
                                <?php if($value->status == 1): ?>
                                  <span class="label label-success">Hiển thị</span>
                                <?php else: ?>
                                  <span class="label label-danger">Đang ẩn</span>
                                <?php endif; ?>
                          
                              </td>
                              <td>
                                    <a href="<?php echo e(route('update.product',$value->id)); ?>" class="table-repair">Sửa</a>
                                    <a href="" class="table-delete">Xóa</a>
                              </td>
                          </tr>                    
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>           
                        </tbody>
                  </table>
              </div>
          </div>
   </div>
</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/product/index.blade.php ENDPATH**/ ?>