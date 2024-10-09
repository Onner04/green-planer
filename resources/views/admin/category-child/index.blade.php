@extends('admin.master')
@section('home')

<div class="content-wrapper" style="width:70% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả menu con </h2>
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
                 <a href="{{ route('category-child.add') }}" class="child-box-header__add" >+ Thêm menu con</a>

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
                              <th>menu cha</th>                           
                              <th>Hành Động </th>
                          </tr>
                          @foreach($categoryChild as $value)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td><span class="table-news-name">{{$value->name}}</span></td>
                              <td>                  
                                @if($value->status == 1)
                                <span class="label label-success">Hiển thị</span >
                                @else
                                <span  class="label label-danger">Đang ẩn</span>
                                @endif
                              </td>
                              <td><span class="table-news-category">{{ $value->Category->name }}</span></td>                  
                              <td>
                                      <a href="{{ route('category-child.edit', $value->id) }}" class="table-repair">Sửa</a>
                                      <a href="{{ route('category-child.delete', $value->id) }}" class="table-delete">Xóa</a>
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
<script>
  function chooseFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('image').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}
</script>