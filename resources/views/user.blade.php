@extends('master')
@section('style')
    <link rel="stylesheet" href="{{ url('fontend') }}/css/user.css">
@stop
@section('home')
<div class="content-wrapper" >
    <div class="container">
        <div class="container-link">
        <i class="fa-solid fa-house"></i>
        <a href="http://127.0.0.1:8000/" class="container-link-home">Trang chủ</a>
        <span class="container-link-child"> > Người dùng</span>
        </div>
        <div class="box">
            <div class="cate-user">
                <ul class="cate-user-list">
                    <li class="cate-user-list__child">
                        <p class="cate-user-list__child-link">Tài Khoản : {{ Auth::user()->email }}</p>
                    </li>
                    <li class="cate-user-list__child">
                        <a href="{{ route('product.cart') }}" class="cate-user-list__child-link">Giỏ hàng</a>
                    </li>
                    <li class="cate-user-list__child">
                        <a href="{{ route('logout.user') }}" class="cate-user-list__child-link">Đăng xuất</a>
                    </li>
                </ul>
            </div>

            <div class="order-section">
                <div class="product-list">
                    <table>
                        <thead>
                            <tr style="font-size: 1.3rem;">
                                <th>Sản phẩm</th>                        
                                <th>Thanh toán</th>
                                <th>Thời gian</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $value)
                            <tr>
                                <td >
                                    @foreach($value->orderDetail as $item)
                                    <img src="{{ url('images')}}/{{ $item->product->image }}" alt="Cây MK05" class="product-img">
                                    <p>
                                        
                                        Size: {{ $item->size }} , x{{ $item->quantity }}
                                    </p>
                                    @endforeach    
                                </td>
                                
                                <td>{{ number_format($value->total_price,0,".",".") }}đ</td>
                                <td>{{ $value->created_at }}</td>
                                <td style="font-weight: 600;">
                                    
                                    @if($value->status == 1)
                                        <span style="color: red;" class="label label-danger">Chờ giao hàng</span>
                                    @else
                                        <span style="color: #33FF66;" class="label label-success">Đang giao hàng</span>
                                    @endif
        
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