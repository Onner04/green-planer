
<?php $__env->startSection('home'); ?>
<div class="content-wrapper" style="width:70% ;">
  <div class="body-add">
          <div class="body-add-content">
              <h2>Quản lý thuộc tính</h2>
          </div>
          <div class="body-add-box">
              <div class="body-add-box-content">
                  <h3 class="box-content-title">Thêm mới thuộc tính</h3>
              </div>
              <div class="body-box-add-select">
                  <p class="box-add-select-title">chiều cao</p>
                  <input type="text" placeholder="Nhập chiều cao" class="box-add-select-input">
              </div>
              <div class="box-footer">
                  <button type="submit" class="btn ">Thêm mới</button>
                </div>
          </div>         
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/attr-product/add.blade.php ENDPATH**/ ?>