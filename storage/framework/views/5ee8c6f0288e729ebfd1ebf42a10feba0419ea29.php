
<?php $__env->startSection('home'); ?>
<div class="content-wrapper" style="width:70% ; ">

  <div class="child"  style="margin-top: 30px;">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả banner </h2>
          </div>
          <div class="child-box " style="height: 100vh;">
         
                <div class="body-add-box-content">
                  <h3 class="box-content-title">Thêm mới banner</h3>
                </div>
                <div class="body-box-add-select">
                    <p class="box-add-select-title">Tên banner</p>
                    <input type="text" placeholder="Nhập tên menu" class="box-add-select-input">
                </div>
                <div class="body-box-add-select">
                  <p class="box-add-select-title">link</p>
                  <input type="text" placeholder="Nhập link" class="box-add-select-input">
                </div>
                <div class="form-group">
                  <label for="file-upload">Ảnh banner</label>
                    <div class="imageFile" style="height:120px;width:100%;">
                    <label for="file-upload" class="custom-file-upload">
                      <img src="<?php echo e(url('assest')); ?>/img/upfile.JPG" id="image" style="height:100%;border-radius:5px;" style="" alt="">
                    </label>
                </div>
                  <label for="file-upload" style="margin-top:4px" class="custom-file">
                      <i class="fa fa-cloud-upload"></i>
                      Chọn ảnh
                  </label>
                  <input id="file-upload" type="file" value="<?php echo e(old('file')); ?>" onchange="chooseFile(this)" name="file" class="form-control dn <?php $__errorArgs = ['image'];
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
                
                <div class="box-footer">
                  <button type="submit" class="btn ">Thêm mới</button>
                </div>
                <div class="child-box-body" style="border-top: 1px solid #c9c6c6; ">
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
                    <table class="table" style="margin-top: 20px;">
                        <tbody>
                            <tr class="table-news">
                                <th>STT</th>
                                <th>Tên </th>
                                <th>ảnh</th>                           
                                <th>Link</th>
                                <th>Hành Động </th>
                            </tr>
                            <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($value->id); ?></td>
                                <td><span class="table-news-name"><?php echo e($value->name); ?></span></td>
                                <td><img src="<?php echo e(url('images')); ?>/<?php echo e($value->image); ?>" style="width:60px" class="table-news-title"></img></td>
                                <td><span class="table-news-status"><?php echo e($value->link); ?></span></td>
                                <td>              
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
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/banner/index.blade.php ENDPATH**/ ?>