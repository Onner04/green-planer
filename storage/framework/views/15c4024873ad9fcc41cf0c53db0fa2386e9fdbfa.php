
<?php $__env->startSection('home'); ?>

<div class="content-wrapper" style="width:79% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả sản phẩm </h2>
          </div>
          <div class="child-box " style="width:100%;">
              <div class="content">
              <?php if(Session::has('message')): ?>
                    <div class="alert alert-success" id="success-alert">
                            <span aria-hidden="true">&times;</span></button>
                            <strong>
                              <?php echo e(Session::get('message')); ?>

                            </strong>
                    </div>
                <?php endif; ?>
              </div>
             <div class="child-box-header">

               <div class="child-box-search">
                   <input type="text" placeholder="Search" >
                   <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
               </div>

             </div>

              <div class="child-box-body">
                  <table class="table">
                      <tbody>
                          <tr class="table-news">
                              <th>STT</th>
                              <th>Tên khách hàng</th>
                              <th>Sản phẩm</th>
                              <th>Số điện thoại</th>                           
                              <th>tổng thanh toán</th>
                              <th>Địa chỉ</th>
                              <th>Ghi chú</th>
                              <th>Thời gian</th>
                              <th>Trạng Thái</th>
                              <th>Hành Động </th>
                          </tr>
                          <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><span class="table-news-name"><?php echo e($value->name); ?></span></td>
                                <td>
                                    <?php $__currentLoopData = $value->orderDetail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div style="display: flex;">
                                            <img src="<?php echo e(url('images/' . $item->product->image)); ?>" style="width: 60px;" class="table-news-title" alt="<?php echo e($item->product->product_name); ?>">
                                            <div class="product-item" style="line-height: 20px;">
                                              <p> <?php echo e($item->size); ?></p>
                                              <p style="color: #373ce3;"> x<?php echo e($item->quantity); ?></p>

                                            </div>
                                           
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td><span class="table-news-category"><?php echo e($value->phone); ?></span></td>
                                <td><span><?php echo e(number_format($value->total_price, 0, ".", ".")); ?>đ</span></td>
                                <td class="table-news-add" style="width: 25%;"><span><?php echo e($value->addrest); ?></span></td>
                                <td><span class="table-news-status"><?php echo e($value->note); ?></span></td>
                                <td><span class="table-news-status"><?php echo e($value->created_at); ?></span></td>
                                <td>
                                    <?php if($value->status == 1): ?>
                                        <span class="label label-danger">Chưa xác nhận</span>
                                    <?php else: ?>
                                        <span class="label label-success">Đã xác nhận</span>
                                    <?php endif; ?>
                                </td>
                                <td  style="display: flex;">
                                    <form action="<?php echo e(route('order.update', $value->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('PUT'); ?>
                                        <input type="hidden" name="status" value="2">
                                        <button style="border: none; background: transparent;" type="submit" title="Xác Nhận">
                                            <i style="color: #00a65a;" class="fa fa-fw fa-check-circle"></i>
                                        </button>
                                    </form>
                                    <form action="<?php echo e(route('order.destroy', $value->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <input type="hidden" name="status" value="2">
                                        <button style="border: none; background: transparent;" type="submit" onclick="return confirm('Bạn có muốn xóa đơn hàng này không?')" title="Xóa">
                                            <i style="color: red;" class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
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
<?php $__env->startSection('dele'); ?>
<script>
    
    window.onload = function() {
        var alert = document.getElementById('success-alert');
        if (alert) {
            setTimeout(function() {
                alert.style.display = 'none'; 
            }, 5000); 
        }
    };
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/order/index.blade.php ENDPATH**/ ?>