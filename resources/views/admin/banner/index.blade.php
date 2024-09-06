@extends('admin.master')
@section('home')
<div class="content-wrapper" style="width:70% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả banner </h2>
          </div>
          <div class="child-box ">
          <div class="body-add-box">
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
                      <img src="{{ url('assest') }}/img/upfile.JPG" id="image" style="height:100%;border-radius:5px;" style="" alt="">
                    </label>
                  </div>
                  <label for="file-upload" style="margin-top:4px" class="custom-file">
                      <i class="fa fa-cloud-upload"></i>
                      Chọn ảnh
                  </label>
                  <input id="file-upload" type="file" value="{{old('file')}}" onchange="chooseFile(this)" name="file" class="form-control dn @error('image') is-invalid @enderror" >
                    @error('file')
                        <span class="message-err" style="color:red;">{{ $message }}</span>
                    @enderror
              </div>
                
              <div class="box-footer">
                  <button type="submit" class="btn ">Thêm mới</button>
                </div>
          </div>

              <div class="child-box-body">
                  <table class="table">
                      <tbody>
                          <tr class="table-news">
                              <th>STT</th>
                              <th>Tên </th>
                              <th>ảnh</th>                           
                              <th>Link</th>
                              <th>Hành Động </th>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td><span class="table-news-name">cây</span></td>
                            <td><img class="table-news-title"></img></td>
                            <td><span class="table-news-status">Link </span></td>
                            <td>
                                <a href="" class="table-repair">Sửa</a>
                                <a href="" class="table-delete">Xóa</a>
                            </td>
                          </tr>                    
                          <tr>
                            <td>1</td>
                            <td><span class="table-news-name">cây</span></td>
                            <td><img class="table-news-title"></img></td>
                            <td><span class="table-news-status">Link </span></td>
                            <td>
                                <a href="" class="table-repair">Sửa</a>
                                <a href="" class="table-delete">Xóa</a>
                            </td>
                          </tr>                    
                      </tbody>
                  </table>
              </div>
          </div>
   </div>
</div>

@stop
