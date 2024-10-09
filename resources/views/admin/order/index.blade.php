@extends('admin.master')
@section('home')

<div class="content-wrapper" style="width:79% ; ">

  <div class="child">
          <div class="child-header">
              <h2 class="child-header-content">Danh sách tất cả sản phẩm </h2>
          </div>
          <div class="child-box " style="width:100%;">
              <div class="content">
              @if(Session::has('message'))
                    <div class="alert alert-success" id="success-alert">
                            <span aria-hidden="true">&times;</span></button>
                            <strong>
                              {{ Session::get('message') }}
                            </strong>
                    </div>
                @endif
              </div>
             <div class="child-box-header">

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
                          @foreach($order as $value)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><span class="table-news-name">{{ $value->name }}</span></td>
                                <td>
                                    @foreach($value->orderDetail as $item)
                                        <div style="display: flex;">
                                            <img src="{{ url('images/' . $item->product->image) }}" style="width: 60px;" class="table-news-title" alt="{{ $item->product->product_name }}">
                                            <div class="product-item" style="line-height: 20px;">
                                              <p> {{ $item->size }}</p>
                                              <p style="color: #373ce3;"> x{{ $item->quantity }}</p>

                                            </div>
                                           
                                        </div>
                                    @endforeach
                                </td>
                                <td><span class="table-news-category">{{ $value->phone }}</span></td>
                                <td><span>{{ number_format($value->total_price, 0, ".", ".") }}đ</span></td>
                                <td class="table-news-add" style="width: 25%;"><span>{{ $value->addrest }}</span></td>
                                <td><span class="table-news-status">{{ $value->note }}</span></td>
                                <td><span class="table-news-status">{{ $value->created_at }}</span></td>
                                <td>
                                    @if($value->status == 1)
                                        <span class="label label-danger">Chưa xác nhận</span>
                                    @else
                                        <span class="label label-success">Đã xác nhận</span>
                                    @endif
                                </td>
                                <td  style="display: flex;">
                                    <form action="{{ route('order.update', $value->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="status" value="2">
                                        <button style="border: none; background: transparent;" type="submit" title="Xác Nhận">
                                            <i style="color: #00a65a;" class="fa fa-fw fa-check-circle"></i>
                                        </button>
                                    </form>
                                    <form action="{{ route('order.destroy', $value->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="status" value="2">
                                        <button style="border: none; background: transparent;" type="submit" onclick="return confirm('Bạn có muốn xóa đơn hàng này không?')" title="Xóa">
                                            <i style="color: red;" class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
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
@section('dele')
<script>
    
    window.onload = function() {
        var alert = document.getElementById('success-alert');
        if (alert) {
            setTimeout(function() {
                alert.style.display = 'none'; 
            }, 5000); 
        }
    };
</script>
@stop

