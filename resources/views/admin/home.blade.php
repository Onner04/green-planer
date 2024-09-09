@extends('admin.master')
@section('home')
<div class="content-wrapper" style="width:80%">
<div class="containner-home">
                <div class="container-home-data">
                    <div class="container-home-data__box">
                        <div class="container-home-data__box-item">
                            <p class="container-home-data__box-item-title">Đơn đặt hàng</p>
                            <p class="container-home-data__box-item-core">84</p>
                        </div>
                       
                        <i class="fa-solid  fa-bag-shopping container-home-data__box-item-icon"></i>
                    </div>
                    <div class="container-home-data__box">
                        <div class="container-home-data__box-item">
                            <p class="container-home-data__box-item-title">Doanh Thu</p>
                            <p class="container-home-data__box-item-core">$72,00</p>
                        </div>
                        
                        <i class="fa-brands fa-shopify container-home-data__box-item-icon"></i>
                    </div>
                    <div class="container-home-data__box">
                        <div class="container-home-data__box-item">
                            <p class="container-home-data__box-item-title">Lượt truy cập</p>
                            <p class="container-home-data__box-item-core">72</p>
                        </div>
                       
                        <i class="fa-solid fa-eye container-home-data__box-item-icon"></i>
                    </div>
                </div>

                <div class="container-home-child">
                    <div class="container-home-child-top">
                        <h3 class="container-home-child-top__title">Top bán chạy</h3>
                        <div class="container-home-child-top__product">
                            <img src="./assest/img/455801961_2322232441456785_4605837728110953984_n.png" alt="" class="container-home-child-top__product-img">
                            <div class="container-home-child-top__product-info">
                                <p class="container-home-child-top__product-name">Tên cây: Hoa Sen</p>
                                <p class="container-home-child-top__product-name">Doanh thu: 755.000đ</p>
                            </div>
                            <p class="container-home-child-top__product-sum">Số lượng đơn hàng : 75</p>
                        </div>
                        <div class="container-home-child-top__product">
                            <img src="./assest/img/455801961_2322232441456785_4605837728110953984_n.png" alt="" class="container-home-child-top__product-img">
                            <div class="container-home-child-top__product-info">
                                <p class="container-home-child-top__product-name">Tên cây: Hoa Sen</p>
                                <p class="container-home-child-top__product-name">Doanh thu: 755.000đ</p>
                            </div>
                            <p class="container-home-child-top__product-sum">Số lượng đơn hàng : 75</p>
                        </div>
                        <div class="container-home-child-top__product">
                            <img src="./assest/img/455801961_2322232441456785_4605837728110953984_n.png" alt="" class="container-home-child-top__product-img">
                            <div class="container-home-child-top__product-info">
                                <p class="container-home-child-top__product-name">Tên cây: Hoa Sen</p>
                                <p class="container-home-child-top__product-name">Doanh thu: 755.000đ</p>
                            </div>
                            <p class="container-home-child-top__product-sum">Số lượng đơn hàng : 75</p>
                        </div>

                    </div>


                    <div class="chart">
                        <svg width="600" height="400">
                            
                            <defs>
                                <linearGradient id="gradientBlue" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" style="stop-color:rgba(190, 94, 4, 0.1);" />
                                    <stop offset="100%" style="stop-color:rgba(121, 207, 247, 0);" />
                                </linearGradient>
                                <linearGradient id="gradientOrange" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" style="stop-color:rgba(241, 69, 30, 0.1);" />
                                    <stop offset="100%" style="stop-color:rgba(255, 255, 255, 0);" />
                                </linearGradient>
                                <linearGradient id="gradientGreen" x1="0" y1="0" x2="0" y2="1">
                                    <stop offset="0%" style="stop-color:rgba(5, 131, 47, 0.1);" />
                                    <stop offset="100%" style="stop-color:rgba(255, 255, 255, 0);" />
                                </linearGradient>
                            </defs>
                
                            
                            <text x="30" y="350" fill="#000" font-size="12px">0</text>
                            <text x="30" y="300" fill="#000" font-size="12px">50</text>
                            <text x="30" y="250" fill="#000" font-size="12px">100</text>
                            <text x="30" y="200" fill="#000" font-size="12px">150</text>
                            <text x="30" y="150" fill="#000" font-size="12px">200</text>
                            <text x="30" y="100" fill="#000" font-size="12px">250</text>
                            <text x="30" y="50" fill="#000" font-size="12px">300</text>
                
                            
                            <text x="50" y="370" fill="#000" font-size="12px">Jan</text>
                            <text x="100" y="370" fill="#000" font-size="12px">Feb</text>
                            <text x="150" y="370" fill="#000" font-size="12px">Mar</text>
                            <text x="200" y="370" fill="#000" font-size="12px">Apr</text>
                            <text x="250" y="370" fill="#000" font-size="12px">May</text>
                            <text x="300" y="370" fill="#000" font-size="12px">Jun</text>
                            <text x="350" y="370" fill="#000" font-size="12px">Jul</text>
                            <text x="400" y="370" fill="#000" font-size="12px">Aug</text>
                            <text x="450" y="370" fill="#000" font-size="12px">Sep</text>
                            <text x="500" y="370" fill="#000" font-size="12px">Oct</text>
                            <text x="550" y="370" fill="#000" font-size="12px">Nov</text>
                            <text x="600" y="370" fill="#000" font-size="12px">Dec</text>
                
                            
                            <path d="M50,300 C150,150 250,450 350,250 C450,50 550,350 600,200 L600,350 L50,350 " 
                                  fill="url(#gradientBlue)" stroke="#cc6101" stroke-width="3"/>
                            
                            
                            <path d="M50,350 C150,250 250,300 350,200 C450,100 550,250 600,150 L600,350 L50,350 " 
                                  fill="url(#gradientOrange)" stroke="#ff0080" stroke-width="3"/>
                            
                            
                            <path d="M50,320 C150,180 250,380 350,230 C450,80 550,280 600,100 L600,350 L50,350 " 
                                  fill="url(#gradientGreen)" stroke="#515050" stroke-width="3"/>
                        </svg>
                    </div>                           
                </div>

            </div>
</div>
@stop