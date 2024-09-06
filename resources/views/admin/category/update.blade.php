@extends('admin.master')
@section('home')
<div class="content-wrapper" style="width:70% ;">
  <div class="body-add">
          <div class="body-add-content">
              <h2>Quản lý menu</h2>
          </div>
          <div class="body-add-box">
              <div class="body-add-box-content">
                  <h3 class="box-content-title">Thêm mới menu</h3>
              </div>
              <div class="body-box-add-select">
                  <p class="box-add-select-title">Tên menu</p>
                  <input type="text" placeholder="Nhập tên menu" class="box-add-select-input">
              </div>
              <div class="body-box-add-select">
                  <p class="box-add-select-title">link</p>
                  <input type="text" placeholder="Nhập link" class="box-add-select-input">
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
@stop