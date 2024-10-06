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
              <form action="{{ route('attr.create') }}" method="POST">
                    @csrf
                  <div class="body-box-add-select">
                      <p class="box-add-select-title">chiều cao</p>
                      <input type="text" value="{{old('value')}}" name="height" placeholder="Nhập chiều cao" class="box-add-select-input">
                      <div>
                          @error('name')
                              <span class="message-err" style="color:red;">{{ $message }}</span>
                          @enderror

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
@stop