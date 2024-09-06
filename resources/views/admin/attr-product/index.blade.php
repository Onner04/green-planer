@extends('admin.master')
@section('home')
<div class="content-wrapper" style="width:70% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách thuộc tính chiều cao</h2>
          </div>
          <div class="child-box ">
             <div class="child-box-header">
             <a href="" class="child-box-header__add" >+ Thêm mới</a>

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
                              <th>Giá trị</th>
                              <th>Hành Động </th>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td><span class="table-news-name">cây mk01</span></td>
                            <td>
                                    <a href="" class="table-repair">Sửa</a>
                                    <a href="" class="table-delete">Xóa</a>
                            </td>
                          </tr>                    
                          <tr>
                            <td>1</td>
                            <td><span class="table-news-name">cây mk01</span></td>
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

