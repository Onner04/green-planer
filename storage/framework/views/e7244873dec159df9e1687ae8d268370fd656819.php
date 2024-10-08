
<?php $__env->startSection('home'); ?>
<div class="content-wrapper" style="width:70% ;">
  <div class="body-add">
          <div class="body-add-content">
              <h2>Quản lý sản phẩm</h2>
          </div>
          <div class="body-add-box" style="height:600px ; overflow-y: auto; ">
              <div class="body-add-box-content">
                  <h3 class="box-content-title">Thêm mới sản phẩm</h3>
              </div>
              <form action="" method="POST"  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="body-box-add-select">
                    <p class="box-add-select-title">Tên sản phẩm</p>
                    <input type="text" value="<?php echo e($product->name); ?>" name="name" placeholder="Nhập tên sản phẩm" class="box-add-select-input">
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

                <div class="body-box-add-select">
                    <p class="box-add-select-title">số lượng sản phẩm</p>
                    <input type="text" value="<?php echo e($product->quantity); ?>" name="quantity" placeholder="Nhập số lượng" class="box-add-select-input">
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

                <div class="body-box-add-select">
                    <p class="box-add-select-title">giá sản phẩm</p>
                    <input type="text" value="<?php echo e($product->price); ?>" name="price" placeholder="Nhập giá sản phẩm" class="box-add-select-input">
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

                <div class="body-box-add-select">
                    <p class="box-add-select-title">giá sale</p>
                    <input type="text"  value="<?php echo e($product->sale_price); ?>" name="sale_price"  placeholder="Nhập giá sale" class="box-add-select-input">
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

                <div class="body-box-add-select">
                    <label style="font-size:15px ;" for="">Danh mục sản phẩm</label>
                    <select class="form-control" name="category_id">
                      <?php $__currentLoopData = $categorysub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option  value="<?php echo e($value->id); ?>" <?php echo e($product->category_id == $value->id ? 'selected' : ''); ?> ><?php echo e($value->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                  </div>


                <div class="checkbox">
                    <span>chiều cao : </span>
                    <?php $__currentLoopData = $attrSize; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <label>
                        <input value="<?php echo e($value->id); ?>" name="attr[]" type="checkbox" <?php echo e(in_array($value->id,$attr) ? "checked" : ""); ?>> <?php echo e($value->value); ?>

                      </label>  
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>       

                <div class="form-group">
                    <label for="file-upload">Ảnh sản phẩm</label>
                    <div class="imageFile" style="height:120px;width:100%;">
                      <label for="file-upload" class="custom-file-upload" style="position: relative ; overflow: hidden;">
                        <img src="<?php echo e(url('assest')); ?>/img/upfile.JPG" id="image" style="height:100%;border-radius:5px;"  alt="">
                            <?php $__currentLoopData = $imageProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                              <img style="position: absolute ; width:100% ; height: 100%;left: 0;object-fit: cover;" src="<?php echo e(url('images')); ?>/<?php echo e($value); ?>">
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </label>
                    </div>
                    <label for="file-upload" style="margin-top:4px" class="custom-file">
                        <i class="fa fa-cloud-upload"></i>
                        Chọn ảnh
                    </label>
                    <input id="file-upload" type="file" value="<?php echo e(old('file')); ?>"  name="file" class="form-control dn <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                      <?php $__errorArgs = ['file'];
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
                <div class="form-group">
                    <label for="files">Ảnh mô tả</label>
                    <label for="files" style="display:block;height:120px; position: relative">
                      <div class="image-preview" style="background-image:url( <?php echo e(url('assest')); ?>/img/upfile.JPG )"></div>
                            <?php $__currentLoopData = $imageProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                              <img style="position: absolute ; width:8% ; top:1px ;margin: 0 10px;" src="<?php echo e(url('images')); ?>/<?php echo e($value); ?>">
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </label>
                    <label for="files" class="custom-file">
                        <i class="fa fa-cloud-upload"></i>
                        Chọn ảnh
                      </label>
                    <input id="files"  type="file" value="<?php echo e(old('files')); ?>" multiple name="files[]" class="dn form-control <?php $__errorArgs = ['files'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" >
                      <?php $__errorArgs = ['files'];
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
                  <div class="form-group">
                    <label for="content">Mô tả</label>
                    <textare  name="description" id="content" ><?php echo e(old('description')); ?></textare>                    
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


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/product/update.blade.php ENDPATH**/ ?>