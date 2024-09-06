
<?php $__env->startSection('home'); ?>
<div class="content-wrapper" style="width:70% ;">
  <div class="body-add">
          <div class="body-add-content">
              <h2>Quản lý sản phẩm</h2>
          </div>
          <div class="body-add-box">
              <div class="body-add-box-content">
                  <h3 class="box-content-title">Thêm mới sản phẩm</h3>
              </div>
              <div class="body-box-add-select">
                  <p class="box-add-select-title">Tên sản phẩm</p>
                  <input type="text" placeholder="Nhập tên sản phẩm" class="box-add-select-input">
              </div>
              <div class="body-box-add-select">
                  <p class="box-add-select-title">số lượng sản phẩm</p>
                  <input type="text" placeholder="Nhập số lượng" class="box-add-select-input">
              </div>
              <div class="body-box-add-select">
                  <p class="box-add-select-title">giá sản phẩm</p>
                  <input type="text" placeholder="Nhập giá sản phẩm" class="box-add-select-input">
              </div>
              <div class="body-box-add-select">
                  <p class="box-add-select-title">giá sale</p>
                  <input type="text" placeholder="Nhập giá sale" class="box-add-select-input">
              </div>
              <div class="body-box-add-select">
                  <label style="font-size:15px ;" for="">Danh mục sản phẩm</label>
                  <select class="form-control" name="category_id">             
                    <option value="">test</option>                 
                  </select>
                </div>
              <div class="checkbox">
                  <span>chiều cao : </span>
                  <input type="checkbox">130-150cm
                  <input type="checkbox">130-150cm
              </div>       
              <div class="form-group">
                  <label for="file-upload">Ảnh sản phẩm</label>
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
                </div>
              <div class="form-group">
                  <label for="files">Ảnh mô tả</label>
                  <label for="files" style="display:block;height:120px">
                    <div class="image-preview" style="background-image:url(<?php echo e(url('assest')); ?>/img/upfile.JPG)"></div>
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
                  <textarea  name="description" id="content" ><?php echo e(old('description')); ?></textarea>                    
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
          </div>         
      </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('tinymce'); ?>
<script src="<?php echo e(url('assest')); ?>/tinymce/tinymce.min.js"></script>
<script src="<?php echo e(url('assest')); ?>/tinymce/config.js"></script>
<script>
        tinymce.init({
            selector: '#content'
        });
        function chooseFile(fileInput){
          if(fileInput.files && fileInput.files[0]){
            var reader = new FileReader();

            reader.onload = function (e) {
              $('#image').attr('src',e.target.result);
            }
            reader.readAsDataURL(fileInput.files[0]);
          }
        }
      let file_input = document.querySelector('#files');
      let image_preview = document.querySelector('.image-preview');    

$("#files").on('change', function () {
 var countFiles = $(this)[0].files.length;

 var imgPath = $(this)[0].value;
 var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
 var image_holder = $(".image-preview");
 image_holder.empty();

 if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
     if (typeof (FileReader) != "undefined") {
         
         for (var i = 0; i < countFiles; i++) {

             var reader = new FileReader();
             reader.onload = function (e) {
                 $("<img />", {
                     "src": e.target.result,
                         "class": "thumb-image"
                 }).appendTo(image_holder);
             }
             image_holder.show();
             reader.readAsDataURL($(this)[0].files[i]);
         }

      } else {
         alert("This browser does not support FileReader.");
     }
  } else {
     alert("Pls select only images");
 }
});
</script>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\code\laravel\Green-planer\resources\views/admin/product/add.blade.php ENDPATH**/ ?>