@extends('master')
@section('home')
<style>
    @media only screen and (max-width: 768px) {
        table{
            width: 100%;
        }
    }
</style>
<div class="app__container" style="display:flex ;justify-content:center ; ">
    <div class="container-body"style="margin-top: 100px; width:85%">
        <div class="branch">
            <ul class="branch-arrow">
                <li class="branch-item"><a href="#" class="branch-item-link"><i class="fa-solid fa-house"></i> Trang chủ <i class="fa-solid fa-angle-right"></i></a></li>
                @if ($cateChild)
                    <li class="branch-item">
                        <a href="#" class="branch-item-link">{{ $cateChild->name }} <i class="fa-solid fa-angle-right"></i></a>
                    </li>
                @else
                    <li class="branch-item">
                        <a href="#" class="branch-item-link">null<i class="fa-solid fa-angle-right"></i></a>
                    </li>
                @endif
                <li class="branch-item disable"><span>{{ $product->name }}</span></li>
            </ul>
        </div>

        <div class="product-detail">
            <div class="product-detail-item">
                <img src="{{ url('images') }}/{{$product->image}}" alt="" class="product-item-img">

                <div class="product-item-detail">
                    <ul class="product-item-detail-list">
                        @foreach( $images as $key =>$image)
                        <li class="product-item-detail-list__child" >
                            <img src="{{ url('images') }}/{{$image}}" alt="" class="product-item-detail-list__child-img">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="product-info">
                <h2 class="product-info-name">{{ $product->name }}</h2>
                <div class="product-info-price">
                    <p class="last-price">Giá cũ : <span>{{ number_format($product->price,0,".",".") }}đ</span></p>
                    <p class="new-price">Giá mới : <span>{{ number_format($product->sale_price,0,".",".") }}đ</span></p>
                </div>
               
                <div class="form">
                    <form action="{{ route('cart.add') }}" method="POST">
                    @csrf
                        <h3 class="title-method"> 
                           Chiều cao : 
                        </h3>
                        <label class="label-height">
                            @foreach( isset($height) ? $height : [] as $item)                     
                            <input class="label-height-item" name="height" value="{{ $item }}" type="radio">{{$item}}
                            @endforeach
                            @error('height')
                                <span class="message-err" style="color:red;font-size: 14px;display: block;">{{ $message }}</span>
                            @enderror
                        </label>
                        <div class="lable-num">
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <label class="quantity-form" for="number">Số lượng:</label>
                            <input class="number-input" id="number" type="number" min="1" name="quantity"  value = "1">
                            <input type="hidden" name="action" value="add">
    
                            <button type = "submit" class = "btn">
                                Thêm vào giỏ hàng <i class="fa-solid fa-cart-shopping"></i>
                            
                            </button>
                    </form>
                    </div>

                    <div class="describe">
                        <h3 class="describe-title">Mô tả sản phẩm :</h3>
                        <p class="describe-content">
                            {{!! $product->description !!}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-new">
            <div class="product-heading">
               <h2 class="product-heading__title">Sản Phẩm Liên Quan </h2>
               <h3 class="product-heading__subtitle">Connection</h3>
            </div>
            <div class="row">
                @foreach( isset($productRelate) ? $productRelate : [] as $value)
                
                <div class="col l-3 m-6 c-6 ">
                    <div class="product">
                        <a href=" {{  route('product.detail',$value->id) }} " class="product-item">
                            <div class="product-item__img" style="background-image:url({{ url('images') }}/{{ $value->image }})"></div>
                            <h4 class="product-item__name">{{$value->name}}</h4>
                            <div class="product-item__price">
                                <span class="product-item__price-old">{{ number_format($value->sale_price,0,".",".") }}đ</span>
                                <span class="product-item__price-present">{{ number_format($value->price,0,".",".") }}đ</span>
                            </div>
                            <span class="product-item__sale">Giảm {{ ceil(100-(($value->sale_price/ $value->price)*100)) }}%</span>
                        </a>
                        <div class="product-item__btn">
                            
                            
                            <a href="{{ route('product.detail',$value->id) }}" class="product-item__btn-buy">
                                <i class="ti-eye"></i>
                                    Xem chi tiết
                            </a>
                        </div>
                    </div>                               
                </div>
                @endforeach
              
            </div>
            <div class="see-all">
                <a href="" class="see-all-link">Xem tất cả</a>
            </div>
        </div>

    </div>
        </div>
@stop

@section('js')
<script>
    var heights = document.querySelectorAll('.label-height-item')

    heights.forEach(function(item,index){
        item.onclick = function(){
            if(document.querySelector(".label-height-item.border-black")){
                document.querySelector(".lable-size.border-black").classList.remove('border-black')
            }
            this.classList.add('border-black');
        }
    })
</script>
@stop