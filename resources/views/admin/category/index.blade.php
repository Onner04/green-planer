@extends('admin.master')
@section('home')
<div class="content-wrapper" style="width:70% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả menu cha </h2>
          </div>
          <div class="child-box ">
            <div class="content">
                @if(Session::has('message'))
                    <div class="alert alert-success">
                          <button type="button" data-dismiss="alert" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <strong>
                              {{ Session::get('message') }}
                            </strong>
                    </div>
                @endif
            </div>
             <div class="child-box-header">
             <a href="{{ route('category.add') }}" class="child-box-header__add" >+ Thêm menu cha</a>

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
                              <th>Tên </th>
                              <th>trạng thái</th>
                              <th>menu con</th>                           
                              <th>Link</th>
                              <th>Hành Động </th>
                          </tr>
                          @foreach($category as $value) 
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><span class="table-news-name">{{ $value->name }}</span></td>
                            <td>
                              @if($value->status == 1)
                              <span class="label label-success">Hiển thị</span>
                              @else
                              <span class="label label-danger">Đang ẩn</span>
                              @endif
                            
                            </td>
                              <td>
                              

                                @foreach(isset($value->categoryChild) ? $value->categoryChild : [] as $values)
          
                                <p>{{$values->name}}</p>
                                @endforeach

                              </td>
                              <td>{{ $value->link }}</td>
                            <td>
                                    <a href="{{ route('category.edit', $value->id) }}" class="table-repair">Sửa</a>
                                    <a href="{{ route('category.delete', $value->id) }}" class="table-delete">Xóa</a>
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
