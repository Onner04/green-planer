@extends('admin.master')
@section('home')
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
@stop