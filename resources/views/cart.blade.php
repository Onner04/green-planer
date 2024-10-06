@extends('master')
@section('style')
    <link rel="stylesheet" href="{{ url('fontend') }}/css/cart.css">
@stop
@section('home')
<div class="container-wrapper">
    <div class="cart">

        <div class="breadcrumb">
            <a href="http://127.0.0.1:8000/">Trang chủ</a> > Giỏ hàng
        </div>
        <div class="cart-body">

            <table>
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng giá</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart->getItems() as $key => $value)
                    <tr>              
                        <td >
                            <img src="{{url('images')}}/{{$value['image']}}" alt="" class="product-image">
                            <div>
                                <strong>{{ $value['product_name'] }}</strong><br>
                                Chiều cao : {{$value['height']}}<br>                        
                            </div>
                        </td>
                        <td>{{ number_format($value['price'],0,".",".") }} đ</td>
                        <td>
                            <form action="{{ route('cart.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $key }}" >
                                <input type="number"  name="quantity" value="{{ $value['quantity'] }}" min="1" class="quantity-input">
                                <button class="update-btn" type="submit">Cập nhật</button>
                            </form>
                        </td>
                        <td>{{ number_format($value['price'] * $value['quantity'],0,".",".") }} đ</td>
                        <td><a href="{{ route('cart.delete',$key ) }}" class="remove-btn">Xóa</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>

            <div class="order-summary">
                <h3>Giá trị đơn hàng</h3>
                <p>Tổng giá: {{ number_format($totalPrice,0,".",".")}} đ</p>
                <p>Tổng số lượng: {{ $totalQuantity }}</p>
                <p class="order-price"><strong>TỔNG THANH TOÁN: {{ number_format($totalPrice,0,".",".")}} đ</strong></p>
                <a href="{{ route('product.order') }}" class="order-btn">ĐẶT HÀNG</a>
            </div>
        </div>
    </div>
</div>
@stop