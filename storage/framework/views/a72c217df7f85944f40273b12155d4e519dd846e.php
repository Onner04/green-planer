
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
              <form action="<?php echo e(route('attr.create')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                  <div class="body-box-add-select">
                      <p class="box-add-select-title">chiều cao</p>
                      <input type="text" value="<?php echo e(old('value')); ?>" name="height" placeholder="Nhập chiều cao" class="box-add-select-input">
                      <div>
                          <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                              <span class="message-err" style="color:red;"><?php echo e($message); ?></span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                      </div>
                  </div>
                  <div class="box-footer">
                      <button type="submit" class="btn ">Thêm mới</button>
                </div>
              </form>
          </div>         
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/attr-product/add.blade.php ENDPATH**/ ?>