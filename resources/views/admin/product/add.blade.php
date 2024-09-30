@extends('admin.master')
@section('home')
<div class="content-wrapper" style="width:70% ;">
  <div class="body-add">
          <section class="body-add-content">
              <h2>Quản lý sản phẩm</h2>
          </section>
          <div class="body-add-box" style="height:600px ; overflow-y: auto; "  >
              <div class="body-add-box-content">
                  <h3 class="box-content-title">Thêm mới sản phẩm</h3>
              </div>
              <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="body-box-add-select">
                        <p  class="box-add-select-title">Tên sản phẩm</p>
                        <input type="text" value="{{old('name')}}" name="name"  placeholder="Nhập tên sản phẩm" class="box-add-select-input">
                        @error('name')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="body-box-add-select">
                        <p class="box-add-select-title">số lượng sản phẩm</p>
                        <input type="text" value="{{old('quantity')}}" name="quantity"  placeholder="Nhập số lượng" class="box-add-select-input">
                        @error('name')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="body-box-add-select">
                        <p  class="box-add-select-title">giá sản phẩm</p>
                        <input type="text" value="{{old('price')}}" name="price"   placeholder="Nhập giá sản phẩm" class="box-add-select-input">
                        @error('name')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="body-box-add-select">
                        <p  class="box-add-select-title">giá sale</p>
                        <input type="text" value="{{old('sale_price')}}" name="sale_price"   placeholder="Nhập giá sale" class="box-add-select-input">
                        @error('sale_price')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="body-box-add-select">
                        <label style="font-size:15px ;" for="">Danh mục sản phẩm</label>
                        <select class="form-control" name="category_id"> 
                        @foreach($categoryChild as $value)            
                        <option  value="{{ $value->id }}">{{ $value->name }}</option> 
                        @endforeach                
                        </select>
                    </div>
                    <div class="checkbox">
                        <span>chiều cao : </span>
                
                        @foreach($attrSize as $value)
                        <label >
                        <input value="{{$value->id}}" name="attr[]" type="checkbox">{{ $value->value }}

                        </label>
                        @endforeach
                        
                    </div>       
                    <div class="form-group">
                        <label for="file-upload">Ảnh sản phẩm</label>
                        <div class="imageFile" style="height:120px;width:100%;">
                        <label for="file-upload" class="custom-file-upload">
                            <img src="{{ url('assest') }}/img/upfile.JPG" id="image" style="height:100%;border-radius:5px;" alt="">
                        </label>
                        </div>
                        <label for="file-upload" style="margin-top:4px" class="custom-file">
                            <i class="fa fa-cloud-upload"></i>
                            Chọn ảnh
                        </label>
                        <input id="file-upload" type="file" name="file" class="form-control dn @error('image') is-invalid @enderror">

                        @error('file')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="files">Ảnh mô tả</label>
                        <label for="files" style="display:block;height:120px">
                        <div class="image-preview" style="background-image:url( {{ url('assest') }}/img/upfile.JPG )"></div>
                        </label>
                        <label for="files" class="custom-file">
                            <i class="fa fa-cloud-upload"></i>
                            Chọn ảnh
                        </label>
                        <input id="files" type="file" multiple name="files[]" class="dn form-control @error('files') is-invalid @enderror">
                        @error('files')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="content">Mô tả</label>
                        <textarea  name="description" id="content" >{{old('description')}}</textarea>                    
                    </div> 
                    <div class="form-group">
                        <label for="input">Chọn trạng thái</label>
                        <div class="radio">
                        <label>
                            <input type="radio" name="status" id="input" value="1" checked="checked">
                            Hiện
                        </label>
                        <label>
                            <input type="radio" name="status" id="input" value="0">
                            Ẩn
                        </label>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn ">Thêm mới</button>
                    </div>
              </form>
          </div>         
     
  </div>
</div>
@stop
