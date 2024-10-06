@extends('master')
@section('home')
            <div class="slide">
                <div class="slide-move">
                    @foreach(isset($banner) ? $banner : [] as $value)         
                       <div class="slide-move__item {{ $loop->first ? 'active' : '' }}">
                           <a href="{{ $value->link }}" class="slide-move__item-link">
                                 <img class="slide-move__item-img"  src="{{ url('images') }}/{{ $value->image }}"alt="">
                           </a>
                       </div>
                      
                    @endforeach 
                </div>
                <div class="slide-next">
                    <span class="slide-up"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="slide-back"><i class="fa-solid fa-angle-left"></i></span>
                </div>
           </div>


           <div class="product">
                <div class="grid wide">
                    <div class="product-new">
                        <div class="product-heading">
                            <h2 class="product-heading__title">SẢN PHẨM MỚI</h2>
                            <h3 class="product-heading__subtitle">New </h3>
                         </div>
                         <div class="row">
                            @foreach(isset($product) ? $product : [] as $value)
                                <div class="col l-3 m-6 c-6">
                                    <div class="product">
                                        <a href="{{ route('product.detail',$value->id)}}" class="product-item">
                                            <div class="product-item__img" style="background-image:url({{ url('images') }}/{{ $value->image }})"></div>
                                            <h4 class="product-item__name">{{$value->name}}</h4>
                                            <div class="product-item__price">
                                               
                                                <span class="product-item__price-old">{{ number_format($value->sale_price, 0, ".", ".") }}đ</span>
                                                <span class="product-item__price-present">{{ number_format($value->price, 0, ".", ".") }}đ</span>
                                            </div>
                                            <span class="product-item__sale">Giảm {{ ceil(100 - (($value->sale_price / $value->price) * 100)) }}%</span>
                                        </a>
                                        <div class="product-item__btn">
                                            <a href="{{ route('product.detail', $value->id) }}" class="product-item__btn-buy">
                                                <i class="fa-solid fa-cart-shopping product-item__btn-buy-icon"></i>
                                            
                                                Đặt hàng
                                            </a>
                                        </div>
                                    </div>   
                                </div>
                            @endforeach
                           
                         </div>
                         <div class="see-all">
                            <a href="{{ route('see.all') }}" class="see-all-link">Xem tất cả mẫu mới</a>
                        </div>
                        
                    </div>

                    <div class="product-new">
                        <div class="product-heading">
                           <h2 class="product-heading__title">Sản Phẩm Bán Chạy </h2>
                           <h3 class="product-heading__subtitle">Top</h3>
                        </div>
                        <div class="row">

                        @foreach($Topbuy as $value)
                                <div class="col l-3 m-6 c-6">
                                    <div class="product">
                                        <a href="{{ route('product.detail',$value->id)}}" class="product-item">
                                            <div class="product-item__img" style="background-image:url({{ url('images') }}/{{ $value->image }})"></div>
                                            <h4 class="product-item__name">{{$value->name}}</h4>
                                            <div class="product-item__price">
                                               
                                                <span class="product-item__price-old">{{ number_format($value->sale_price, 0, ".", ".") }}đ</span>
                                                <span class="product-item__price-present">{{ number_format($value->price, 0, ".", ".") }}đ</span>
                                            </div>
                                            <span class="product-item__sale">Giảm {{ ceil(100 - (($value->sale_price / $value->price) * 100)) }}%</span>
                                        </a>
                                        <div class="product-item__btn">
                                            <a href="{{ route('product.detail', $value->id) }}" class="product-item__btn-buy">
                                                <i class="fa-solid fa-cart-shopping product-item__btn-buy-icon"></i>
                                            
                                                Đặt hàng
                                            </a>
                                        </div>
                                    </div>   
                                </div>
                            @endforeach
                         
                        </div>
                        <div class="see-all">
                            <a href="{{ route('product.top') }}" class="see-all-link">Xem tất cả</a>
                        </div>
                    </div>
                </div>
           </div>

          
@stop