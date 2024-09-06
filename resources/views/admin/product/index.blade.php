@extends('admin.master')
@section('home')
<div class="content-wrapper" style="width:70% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả sản phẩm </h2>
          </div>
          <div class="child-box ">
             <div class="child-box-header">
             <a href="" class="child-box-header__add" >+ Thêm sản phẩm</a>

               <div class="child-box-search">
                   <input type="text" placeholder="Search" >
                   <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
               </div>

             </div>

              <div class="child-box-body">
                  <table class="table">
                      <tbody>
                          <tr class="table-news">
                              <th>STT</th>
                              <th>Tên sản phẩm</th>
                              <th>Ảnh</th>
                              <th>Số lượng</th>                           
                              <th>Giá</th>
                              <th>Giá đặc biệt</th>
                              <th>Thuộc danh mục</th>
                              <th>Trạng Thái</th>
                              <th>Hành Động </th>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td><span class="table-news-name">cây mk01</span></td>
                            <td><img class="table-news-title"></img></td>
                            <td><span class="table-news-category">200</span></td>
                            <td><span>599.000đ</span></td>
                            <td><span class="table-news-status">399.000đ </span></td>
                            <td><span class="table-news-status">cây trong nhà</span></td>
                            <td>
                         
                            <span class="label label-success">Hiển thị</span>
                         
                            <span class="label label-danger">Đang ẩn</span>
                          
                            </td>
                            <td>
                                    <a href="{{ route('update.product') }}" class="table-repair">Sửa</a>
                                    <a href="" class="table-delete">Xóa</a>
                            </td>
                          </tr>                    
                          <tr>
                            <td>1</td>
                            <td><span class="table-news-name">cây mk01</span></td>
                            <td><img class="table-news-title"></img></td>
                            <td><span class="table-news-category">200</span></td>
                            <td><span>599.000đ</span></td>
                            <td><span class="table-news-status">399.000đ </span></td>
                            <td><span class="table-news-status">cây trong nhà</span></td>
                            <td>
                         
                            <span class="label label-success">Hiển thị</span>
                         
                            <span class="label label-danger">Đang ẩn</span>
                          
                            </td>
                            <td>
                                    <a href="{{ route('update.product') }}" class="table-repair">Sửa</a>
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

