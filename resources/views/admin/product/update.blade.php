@extends('admin.master')
@section('home')

<div class="content-wrapper" style="width:70% ;">
  <div class="body-add">
          <div class="body-add-content">
              <h2>Quản lý sản phẩm</h2>
          </div>
          <div class="body-add-box" style="height:600px ; overflow-y: auto; ">
              <div class="body-add-box-content">
                  <h3 class="box-content-title">Thêm mới sản phẩm</h3>
              </div>
              <form action="" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="body-box-add-select">
                    <p class="box-add-select-title">Tên sản phẩm</p>
                    <input type="text" value="{{$product->name}}" name="name" placeholder="Nhập tên sản phẩm" class="box-add-select-input">
                    <div>

                      @error('name')
                          <span class="message-err" style="color:red;">{{ $message }}</span>
                      @enderror
                    </div>
                </div>

                <div class="body-box-add-select">
                    <p class="box-add-select-title">số lượng sản phẩm</p>
                    <input type="text" value="{{$product->quantity}}" name="quantity" placeholder="Nhập số lượng" class="box-add-select-input">
                    <div>
                      @error('quantity')
                          <span class="message-err" style="color:red;">{{ $message }}</span>
                      @enderror

                    </div>
                </div>

                <div class="body-box-add-select">
                    <p class="box-add-select-title">giá sản phẩm</p>
                    <input type="text" value="{{$product->price}}" name="price" placeholder="Nhập giá sản phẩm" class="box-add-select-input">
                    <div>

                      @error('price')
                              <span class="message-err" style="color:red;">{{ $message }}</span>
                      @enderror
                    </div>
                </div>

                <div class="body-box-add-select">
                    <p class="box-add-select-title">giá sale</p>
                    <input type="text"  value="{{$product->sale_price}}" name="sale_price"  placeholder="Nhập giá sale" class="box-add-select-input">
                    <div>

                      @error('sale_price')
                              <span class="message-err" style="color:red;">{{ $message }}</span>
                      @enderror
                    </div>
                  </div>

                <div class="body-box-add-select">
                    <label style="font-size:15px ;" for="">Danh mục sản phẩm</label>
                    <select class="form-control" name="category_id">
                      @foreach($categorysub as $value)
                      <option  value="{{ $value->id }}" {{ $product->category_id == $value->id ? 'selected' : '' }} >{{ $value->name }}</option>
                      @endforeach
                  </select>
                  </div>


                <div class="checkbox">
                    <span>chiều cao : </span>
                    @foreach($attrSize as $value)
                      <label>
                        <input value="{{$value->id}}" name="attr[]" type="checkbox" {{ in_array($value->id,$attr) ? "checked" : "" }}> {{ $value->value }}
                      </label>  
                     @endforeach
                </div>       

                <div class="form-group">
                    <label for="file-upload">Ảnh sản phẩm</label>
                    <div class="imageFile" style="height:120px;width:100%;">
                      <label for="file-upload" class="custom-file-upload" style="position: relative ; overflow: hidden;">
                        <img src="{{ url('assest') }}/img/upfile.JPG" id="image" style="height:100%;border-radius:5px;"  alt="">
                            @foreach($imageProduct as $value) 
                              <img style="position: absolute ; width:100% ; height: 100%;left: 0;object-fit: cover;" src="{{ url('images') }}/{{$value}}">
                           @endforeach
                      </label>
                    </div>
                    <label for="file-upload" style="margin-top:4px" class="custom-file">
                        <i class="fa fa-cloud-upload"></i>
                        Chọn ảnh
                    </label>
                    <input id="file-upload" type="file" value="{{old('file')}}"  name="file" class="form-control dn @error('image') is-invalid @enderror" >
                      @error('file')
                          <span class="message-err" style="color:red;">{{ $message }}</span>
                      @enderror
                  </div>
                <div class="form-group">
                    <label for="files">Ảnh mô tả</label>
                    <label for="files" style="display:block;height:120px; position: relative">
                      <div class="image-preview" style="background-image:url( {{ url('assest') }}/img/upfile.JPG )"></div>
                            @foreach($imageProduct as $value) 
                              <img style="position: absolute ; width:8% ; top:1px ;margin: 0 10px;" src="{{ url('images') }}/{{$value}}">
                           @endforeach 
                    </label>
                    <label for="files" class="custom-file">
                        <i class="fa fa-cloud-upload"></i>
                        Chọn ảnh
                      </label>
                    <input id="files"  type="file" value="{{old('files')}}" multiple name="files[]" class="dn form-control @error('files') is-invalid @enderror" >
                      @error('files')
                          <span class="message-err" style="color:red;">{{ $message }}</span>
                      @enderror
                  </div>
                  <div class="form-group">
                    <label for="content">Mô tả</label>
                    <textare  name="description" id="content" >{{old('description')}}</textare>                    
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
</div>
@stop

