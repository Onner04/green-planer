@extends('admin.master')
@section('home')

<div class="content-wrapper" style="width:70% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách thuộc tính chiều cao</h2>
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
             <a href="{{ route('attr.add') }}" class="child-box-header__add" >+ Thêm mới</a>

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
                              <th>Tên</th>
                              <th>Giá trị</th>
                              <th>Hành Động </th>
                          </tr>
                          @foreach($attr as $value)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td><span class="table-news-name">{{ $value->name }}</span></td>
                              <td><span class="table-news-name">{{ $value->value }}</span></td>
                              <td>
                                      <a href="{{ route('attr.update',$value->id) }}" class="table-repair">Sửa</a>
                                      <a href="{{ route('attr.delete',$value->id) }}" class="table-delete">Xóa</a>
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

