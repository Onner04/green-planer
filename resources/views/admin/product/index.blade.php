@extends('admin.master')
@section('home')

<div class="content-wrapper" style="width:70% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả sản phẩm </h2>
          </div>


          <div class="child-box ">
              <div class="content">
              @if(Session::has('message'))
                    <div class="alert alert-success">
                         
                            <span aria-hidden="true">&times;</span></button>
                            <strong>
                              {{ Session::get('message') }}
                            </strong>
                    </div>
                @endif
              </div>

             <div class="child-box-header">
             <a href="{{route('product.add')}}" class="child-box-header__add" >+ Thêm sản phẩm</a>

               <div class="child-box-search">
                   <input type="text" placeholder="Search" >
                   <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
               </div>

             </div>

              <div class="child-box-body">
                  <table class="table">
                      <thead>
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
                      </thead>
                        <tbody>
                          @foreach($product as $value)
                          <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td><span class="table-news-name">{{ $value->name }}</span></td>
                              <td><img src="{{url('images')}}/{{ $value->image }}" style="width:60px" class="table-news-title"></img></td>
                              <td><span class="table-news-category">{{ $value->quantity }}</span></td>
                              <td><span>{{ number_format($value->price,0,".",".") }}đ</span></td>
                              <td><span class="table-news-status">{{ number_format($value->sale_price,0,".",".") }}đ</span></td>
                              <td><span class="table-news-status">{{ $value->Category->name }}</span></td>
                              <td>
                                @if($value->status == 1)
                                  <span class="label label-success">Hiển thị</span>
                                @else
                                  <span class="label label-danger">Đang ẩn</span>
                                @endif
                          
                              </td>
                              <td>
                                    <a href="{{ route('edit.product',$value->id) }}" class="table-repair">Sửa</a>
                                    <a href="{{ route('delete.product',$value->id) }}" class="table-delete">Xóa</a>
                              </td>
                          </tr>                    
                          @endforeach           
                        </tbody>
                  </table>
              </div>
          </div>
   </div>
</div>

@stop

