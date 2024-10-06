
<?php $__env->startSection('home'); ?>
<div class="content-wrapper" style="width:70% ;">
  <div class="body-add">
          <div class="body-add-content">
              <h2>Quản lý menu</h2>
          </div>
          <div class="body-add-box">
              <div class="body-add-box-content">
                  <h3 class="box-content-title">Thêm mới menu</h3>
              </div>
              <form action="" method="POST">
                <?php echo csrf_field(); ?>
                  <div class="body-box-add-select">
                      <p class="box-add-select-title">Tên menu</p>
                      <input type="text" value="<?php echo e(old('name')); ?>" placeholder="Nhập tên menu" name="name" class="box-add-select-input">
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
                  <div class="body-box-add-select">
                      <p class="box-add-select-title">link</p>
                      <input type="text" value="<?php echo e(old('link')); ?>" placeholder="Nhập link" name="link" class="box-add-select-input">
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
                    <div class="form-group">
                      <label for="input">Chọn trạng thái</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="status" id="input" value="1" checked="checked">
                          Hiện
                        </label>
                        <label>
                          <input type="radio" name="status" id="input" value="0">
                          Ẩn
                        </label>
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/category/add.blade.php ENDPATH**/ ?>