@extends('master')
@section('style')
    <link rel="stylesheet" href="{{ url('fontend') }}/css/order.css">
@stop
@section('home')
<div class="content-wrapper">
    <div class="prize">
            <h1 class="prize-title">THANKS YOU !</h1>

            <p class="prize-content">
                Cảm ơn bạn đã dành trọn niềm tin cho chúng mình. Sự tin tưởng này là nguồn động lực rất lớn để shop không ngừng cố gắng phát triển và hoàn thiện từng ngày.
Hãy mở sản phẩm ngay nhé
            </p>


            <div class="prize-box">
                <div class="prize-box-child">
                    <div class="prize-box-child-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <p class="prize-box-child-content">Địa chỉ nhận hàng :</p>
                    
                    <p class="prize-box-child-info">Tên : {{$order->name}}</p>
                    <p class="prize-box-child-info">Địa chỉ : {{$order->addrest}}</p>
                    <p class="prize-box-child-info">Số điện thoại : {{$order->phone}}</p>
                    
                </div>
                <div class="prize-box-child">
                    <div class="prize-box-child-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                   
                    <p class="prize-box-child-content">Đơn hàng :</p>
                    @foreach($cart->getItems() as $value)
                    <p class="prize-box-child-info">Tên : {{ $value['product_name'] }}</p>
                    <div class="prize-box-child-info-tree">
                        <img src="{{ url('images/' . $value['image']) }}" alt="{{ $value['product_name'] }}" class="prize-box-child-img">
                        <div class="prize-box-child-info-tree-ass">
                            
                            <p class="prize-box-child-info">Size : {{ $value['height'] }}</p>
                            <p class="prize-box-child-info">Số lượng : x{{ $value['quantity'] }}</p>
                            
                        </div>
                        
                    </div>
                    @endforeach
                   
                </div>
                <div class="prize-box-child">
                    <div class="prize-box-child-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <p class="prize-box-child-content">Thanh toán  :</p>
                    <p class="prize-box-child-info">Tổng thanh toán </p>
                    <p class="prize-box-child-info">{{ number_format($totalPrice,0,".",".")}} đ</p>
                    
                    
                </div>
            </div>

            <div class="prize-exit" >
                <a href="http://127.0.0.1:8000/" class="prize-exit-link"><< Trở lại </a>
                <a href="http://127.0.0.1:8000/" class="prize-exit-link">Tiếp tục mua hàng >></a>
            </div>
    </div>
</div>
@stop