
<?php $__env->startSection('home'); ?>

<div class="content-wrapper" style="width:70% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả menu con </h2>
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
                 <a href="<?php echo e(route('category-child.add')); ?>" class="child-box-header__add" >+ Thêm menu con</a>

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
                              <th>Tên </th>
                              <th>trạng thái</th>
                              <th>menu cha</th>                           
                              <th>Hành Động </th>
                          </tr>
                          <?php $__currentLoopData = $categoryChild; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td><?php echo e($loop->iteration); ?></td>
                              <td><span class="table-news-name"><?php echo e($value->name); ?></span></td>
                              <td>                  
                                <?php if($value->status == 1): ?>
                                <span class="label label-success">Hiển thị</span >
                                <?php else: ?>
                                <span  class="label label-danger">Đang ẩn</span>
                                <?php endif; ?>
                              </td>
                              <td><span class="table-news-category"><?php echo e($value->Category->name); ?></span></td>                  
                              <td>
                                      <a href="<?php echo e(route('category-child.edit', $value->id)); ?>" class="table-repair">Sửa</a>
                                      <a href="<?php echo e(route('category-child.delete', $value->id)); ?>" class="table-delete">Xóa</a>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/category-child/index.blade.php ENDPATH**/ ?>