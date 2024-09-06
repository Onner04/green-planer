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
                              <th>Tên khách hàng</th>
                              <th>Sản phẩm</th>
                              <th>Số điện thoại</th>                           
                              <th>tổng thanh toán</th>
                              <th>Địa chỉ</th>
                              <th>Ghi chú</th>
                              <th>Thời gian</th>
                              <th>Trạng Thái</th>
                              <th>Hành Động </th>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td><span class="table-news-name">đào văn thành</span></td>
                            <td><img class="table-news-title"></img></td>
                            <td><span class="table-news-category">9876543456</span></td>
                            <td><span>599.000đ</span></td>
                            <td><span class="table-news-status">trung đông trực ninh nam định </span></td>
                            <td><span class="table-news-status">cho test sản phẩm</span></td>
                            <td><span class="table-news-status">2024-08-14 07:23:29</span></td>
                            <td>
                         
                            <span class="label label-success">Hiển thị</span>
                         
                            <span class="label label-danger">Đang ẩn</span>
                          
                            </td>
                            <td>
                            <input type="hidden" name="status" value="2">
                            <button style="border:none;background: transparent;" type="submit" class="" title="Xác Nhận"><i style="color:#00a65a" class="fa fa-fw fa-check-circle"></i></button>
                            <input type="hidden" name="status" value="2">
                            <button style="border:none;background: transparent;" type="submit" onclick="return confirm('Bạn có muốn xóa đơn hàng này không?')" class="" title="Xóa"><i style="color: red;" class="fa-solid fa-trash"></i></button>            
                          </td>  
                          </tr>                    
                          <tr>
                          <td>1</td>
                            <td><span class="table-news-name">đào văn thành</span></td>
                            <td><img class="table-news-title"></img></td>
                            <td><span class="table-news-category">9876543456</span></td>
                            <td><span>599.000đ</span></td>
                            <td><span class="table-news-status">trung đông trực ninh nam định </span></td>
                            <td><span class="table-news-status">cho test sản phẩm</span></td>
                            <td><span class="table-news-status">2024-08-14 07:23:29</span></td>
                            <td>
                         
                            <span class="label label-success">Hiển thị</span>
                         
                            <span class="label label-danger">Đang ẩn</span>
                          
                            </td>
                            <td>
                            <input type="hidden" name="status" value="2">
                            <button style="border:none;background: transparent;" type="submit" class="" title="Xác Nhận"><i style="color:#00a65a" class="fa fa-fw fa-check-circle"></i></button>
                            <input type="hidden" name="status" value="2">
                            <button style="border:none;background: transparent;" type="submit" onclick="return confirm('Bạn có muốn xóa đơn hàng này không?')" class="" title="Xóa"><i style="color: red;" class="fa-solid fa-trash"></i></button>            
                          </td>  
                          </tr>                    
                      </tbody>
                  </table>
              </div>
          </div>
   </div>
</div>

@stop

