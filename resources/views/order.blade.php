@extends('master')
@section('style')
    <link rel="stylesheet" href="{{ url('fontend') }}/css/order.css">
@stop
@section('home')
<div class="container-wrapper">
<div class="container-cart">
        <div class="menu-link">
            <i class="fas fa-home"></i> <span style="cursor: pointer;">Trang chủ > Đặt hàng</span>
        </div>
        <h2>Vui lòng nhập các trường bên dưới để hoàn tất đơn hàng của bạn</h2>
        
        <div class="order-section">
            <div class="product-list">
                <table>
                    <thead>
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $cart->getItems() as $key => $value)
                        <tr>
                            
                            <td>    
                                <img src="{{ url('images') }}/{{ $value['image'] }}" alt="Cây MK05" class="product-img">
                                <div>
                                    <strong>{{ $value['product_name'] }}</strong><br>
                                    Chiều cao: {{$value['height']}}<br>
                                    Số lượng: {{ $value['quantity'] }}
                                </div>
                            </td>
                            <td>{{ number_format($value['price'],0,".",".") }} đ</td>
                            <td>{{ $value['quantity'] }}</td>
                            <td>{{ number_format($value['price'] * $value['quantity'],0,".",".") }} đ</td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="total-label">Tổng thanh toán:</td>
                            <td class="total-price">{{ number_format($totalPrice,0,".",".")}} đ</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="shipping-info">
                <h3>Thông tin giao hàng</h3>
                <form action="" method="POST">
                    @csrf
                    <div class="body-box-select">
                        <label for="name">Tên:</label>
                        <input type="text" id="name" name="name" placeholder="Nhập tên của bạn ...">
                        @error('name')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="body-box-select">
                        <label for="phone">Số điện thoại:</label>
                        <input type="tel" id="phone" name="phone" placeholder="Nhập số điện thoại ....">
                        @error('name')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="body-box-select">
                        <label for="address">Địa chỉ:</label>
                        <input type="text" id="address" name="address" placeholder="Nhập địa chỉ ....">
                        @error('name')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="body-box-select">
                        <label for="note">Ghi chú:</label>
                        <textarea type="text" cols="30" rows="10" id="note" name="note"></textarea>

                    </div>

                    <button class="btn" style="margin-top: 20px;" type="submit">Đặt hàng</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop