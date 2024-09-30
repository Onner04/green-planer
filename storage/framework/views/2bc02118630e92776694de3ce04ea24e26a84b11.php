
<?php $__env->startSection('home'); ?>
<div class="content-wrapper" style="width:70% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách thuộc tính chiều cao</h2>
          </div>
          <div class="child-box ">
              <div class="content">
              <?php if(Session::has('message')): ?>
                    <div class="alert alert-success">
                          <button type="button" data-dismiss="alert" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <strong>
                              <?php echo e(Session::get('message')); ?>

                            </strong>
                    </div>
                <?php endif; ?>
              </div>
             <div class="child-box-header">
             <a href="<?php echo e(route('attr.add')); ?>" class="child-box-header__add" >+ Thêm mới</a>

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
                              <th>Tên</th>
                              <th>Giá trị</th>
                              <th>Hành Động </th>
                          </tr>
                          <?php $__currentLoopData = $attr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td><?php echo e($loop->iteration); ?></td>
                              <td><span class="table-news-name"><?php echo e($value->name); ?></span></td>
                              <td><span class="table-news-name"><?php echo e($value->value); ?></span></td>
                              <td>
                                      <a href="<?php echo e(route('attr.update',$value->id)); ?>" class="table-repair">Sửa</a>
                                      <a href="<?php echo e(route('attr.delete',$value->id)); ?>" class="table-delete">Xóa</a>
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


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/attr-product/index.blade.php ENDPATH**/ ?>