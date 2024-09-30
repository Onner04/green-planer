@extends('admin.master')
@section('home')
<div class="content-wrapper" style="width:70% ; ">

  <div class="child"  style="margin-top: 30px;">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả banner </h2>
          </div>
          <div class="child-box " style="height: 100vh;">
         
                <div class="body-add-box-content">
                  <h3 class="box-content-title">Thêm mới banner</h3>
                </div>

                <form action="{{ route('banner.add') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="body-box-add-select">
                      <p class="box-add-select-title">Tên banner</p>
                      <input type="text" name="name" placeholder="Nhập tên menu" class="box-add-select-input">
                  </div>
                  <div class="body-box-add-select">
                    <p class="box-add-select-title">link</p>
                    <input type="text" name="link" placeholder="Nhập link" class="box-add-select-input">
                  </div>
                  <div class="form-group">
                    <label for="file-upload">Ảnh banner</label>
                      <div class="imageFile" style="height:120px;width:100%;">
                      <label for="file-upload" class="custom-file-upload">
                        <img src="{{ url('assest') }}/img/upfile.JPG" id="image" style="height:100%;border-radius:5px;"  alt="">
                      </label>
                  </div>
                    <label for="file-upload" style="margin-top:4px" class="custom-file">
                        <i class="fa fa-cloud-upload"></i>
                        Chọn ảnh
                    </label>
                    <input id="file-upload" type="file" value="{{old('file')}}" name="file" class="form-control dn @error('image') is-invalid @enderror" >
                      @error('file')
                          <span class="message-err" style="color:red;">{{ $message }}</span>
                      @enderror
                  
                  <div class="box-footer">
                    <button type="submit" class="btn ">Thêm mới</button>
                  </div>

                </form>
                <div class="child-box-body" style="border-top: 1px solid #c9c6c6; ">
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
                    <table class="table" style="margin-top: 20px;">
                        <tbody>
                            <tr class="table-news">
                                <th>STT</th>
                                <th>Tên </th>
                                <th>ảnh</th>                           
                                <th>Link</th>
                                <th>Hành Động </th>
                            </tr>
                            @foreach($banner as $value)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><span class="table-news-name">{{$value->name}}</span></td>
                                <td><img src="{{url('images')}}/{{ $value->image }}" style="width:60px" class="table-news-title"></img></td>
                                <td><span class="table-news-status">{{$value->link}}</span></td>
                                <td>              
                                    <a href="{{ route('banner.delete', $value->id) }}" class="table-delete">Xóa</a>
                                </td>
                              </tr>
                            @endforeach                    
                                         
                        </tbody>
                    </table>
                </div>
          </div>

          </div>
   </div>
</div>

@stop
@section('banner')
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
@stop
