<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('fontend')}}/css/main.css">
    <link rel="stylesheet" href="{{ url('fontend')}}/css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header class="header">

            <!-- navbar and search on mobile-table -->
            <div class="header-left">
                <div class="header-menu-mobile">
                    <i class="fa-solid fa-bars header-menu-mobile-icon"></i>
                </div>

                <div class="nav-mobile-overlay">

                </div>

                <nav class="nav-mobile">
                    <div class="nav-mobile-title">
                        <h4 class="nav-mobile-title-sub">
                            MENU
                        </h4>
                    </div>
                    <ul class="nav-mobile-list">
                        <li class="nav-mobile-item">
                            <a href="" class="nav-mobile-item__link">HOME</a>
                        </li>
                        <li class="nav-mobile-item ">
                            <a href="#" class="nav-mobile-item__link">
                                SIÊU SALE THÁNG 8
                                
                                <i class="fa-regular fa-circle-down sb-caret"></i>
                            </a>

                            <ul class="nav-mobile__child">
                                <li class="nav-mobile__child-item ">
                                    <a href="" class="nav-mobile_ _child-item-link">599k</a>
                                </li> 
                                <li class="nav-mobile__child-item ">
                                    <a href="" class="nav-mobile_ _child-item-link">999k</a>
                                </li> 
                            </ul>
                        </li>
                        <li class="nav-mobile-item ">
                            <a href="#" class="nav-mobile-item__link">
                                BỘ SƯU TẬP
                                
                                <i class="fa-regular fa-circle-down sb-caret"></i>
                            </a>

                            <ul class="nav-mobile__child">
                                <li class="nav-mobile__child-item ">
                                    <a href="" class="nav-mobile_ _child-item-link">cây trong nhà</a>
                                </li> 
                                <li class="nav-mobile__child-item ">
                                    <a href="" class="nav-mobile_ _child-item-link">cây ngoài trời</a>
                                </li> 
                            </ul>
                        </li>
                        <li class="nav-mobile-item ">
                            <a href="#" class="nav-mobile-item__link">
                                PHỤ KIỆN 
                                
                                <i class="fa-regular fa-circle-down sb-caret"></i>
                            </a>

                            <ul class="nav-mobile__child">
                                <li class="nav-mobile__child-item ">
                                    <a href="" class="nav-mobile_ _child-item-link">Trang trí</a>
                                </li> 
                                <li class="nav-mobile__child-item ">
                                    <a href="" class="nav-mobile_ _child-item-link">Chậu cây</a>
                                </li> 
                            </ul>
                        </li>
                        <li class="nav-mobile-item">
                            <a href="" class="nav-mobile-item__link">ALBUM</a>
                        </li>
                        <li class="nav-mobile-item">
                            <a href="" class="nav-mobile-item__link">TIN TỨC</a>
                        </li>
                        
                    </ul>
                    <div class="nav-close">
                        <i class="ti-close nav-close-icon"></i>
                    </div>
                </nav>

                <div class="header-menu-mobile">
                    
                    <i class="fa-solid fa-magnifying-glass header-menu-mobile-search"></i>
                </div>
                
                
            </div>

            <div class="header-logo">
                <a class="header-logo__link" href="#">
                    <h2 class="header-logo__link-title">tree<h2>
                </a>
            </div>
            <div class="header-menu  hide-on-mobile-table">
                <ul class="header-menu-list">
                    <li class="header-menu__item">
                        <a href="" class="header-menu__item-link">Home</a>
                    </li>
                    <li class="header-menu__item">
                        <a href="#" class="header-menu__item-link">SIÊU SALE THÁNG 8</a>
                        <ul class="header-menu__child">
                            
                                <li class="header-menu__child-item">
                                    <a href="" class="header-menu__child-item-link">sale 599k</a>
                                </li>
                                <li class="header-menu__child-item">
                                    <a href="" class="header-menu__child-item-link">sale 799k</a>
                                </li>
                                <li class="header-menu__child-item">
                                    <a href="" class="header-menu__child-item-link">sale 1199k</a>
                                </li>
                        </ul>
                        </li>
                    <li class="header-menu__item">
                        <a href="" class="header-menu__item-link header-menu__item-link-access">BỘ SƯU TẬP</a>
                        <ul class="header-menu__child">
                                <li class="header-menu__child-item">
                                    <a href="" class="header-menu__child-item-link">Cây trong nhà</a>
                                </li>
                                <li class="header-menu__child-item">
                                    <a href="" class="header-menu__child-item-link">Cây ngoài trời</a>
                                </li>
                        </ul>
                        </li>
                    <li class="header-menu__item">
                        <a href="" class="header-menu__item-link header-menu__item-link-access">PHỤ KIỆN</a>
                        <ul class="header-menu__child">
                                <li class="header-menu__child-item">
                                    <a href="" class="header-menu__child-item-link">Trang trí</a>
                                </li>
                                <li class="header-menu__child-item">
                                    <a href="" class="header-menu__child-item-link">Chậu cây</a>
                                </li>
                        </ul>
                        </li>
                    
                    <li class="header-menu__item">
                        <a href="" class="header-menu__item-link">ALBUM</a>
                        </li>
                    <li class="header-menu__item">
                        <a href="" class="header-menu__item-link">TIN TỨC</a>
                        </li>
                </ul>

            </div>
            <div class="header-right ">
                <div class="header-search hide-on-mobile-table">
                    <div class="header-search__form" action="">
                    <input class="header-search__form-input" type="text" placeholder="Tìm kiếm...">
                    <span class="header-search__form-btn">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    </div>
                </div>
                <div class="header-function">
                    
                <div class="header-function-sub">
                    <a href="" class="header-user__link" title="Đăng nhập" ><i class="fa-regular fa-user"></i></a>
                </div>
                <div class="header-function-sub">
                <a href="" class="header-user__link" title="Giỏ hàng"><i class="fa-solid fa-cart-shopping"></i></a> 
                </div>
                </div>
            </div>

        </header>

        <div class="app__container">
            @yield('home')
        </div>
        <div class="contact">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-3 m-6 c-6 contact-item_padding">
                            <div class="contact-item">
                                <a class="contact-item_link" href="">
                                    <img class="contact-item_img" src="{{ url('fontend') }}/img/freeship.png" alt="">
                                    <h2 class="contact-item_content">MIỄN PHÍ GIAO HÀNG</h2>
                                <p class="contact-item_content-sub">Với hóa đơn từ 300.000đ</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6 contact-item_padding">
                            <div class="contact-item">
                                <a class="contact-item_link" href="">
                                    <img class="contact-item_img" src="{{ url('fontend') }}/img/antoan.png" alt="">
                                    <h2 class="contact-item_content">03 NGÀY</h2>
                                <p class="contact-item_content-sub">Đổi trả sản phẩm trong vòng 03 ngày</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6 contact-item_padding">
                            <div class="contact-item">
                                <a class="contact-item_link" href="#">
                                    <img class="contact-item_img" src="{{ url('fontend') }}/img/call.png" alt="">
                                    <h2 class="contact-item_content">MUA HÀNG (8h00-20h00, T2-CN)</h2>
                                <p class="contact-item_content-sub">Mua hàng : 0913.408.222 /  CSKH : 039.733.9077</p>
                                </a>
                            </div>
                        </div>
                        <div class="col l-3 m-6 c-6 contact-item_padding">
                            <div class="contact-item">
                                <a class="contact-item_link" href="">
                                    <img class="contact-item_img" src="{{ url('fontend')}}/img/thuhang.png" alt="">
                                    <h2 class="contact-item_content">Kiểm tra hàng thoải mái</h2>
                                <p class="contact-item_content-sub">04 công ty tại hà nội</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <footer class="footer">
            <div class="grid wide">
                <div class="row">
                    <div class="col l-3 m-6 c-6 ">
                        <div class="footer__content">
                        <h4 class="footer__content-heading">
                            CHÍNH SÁCH VÀ QUY ĐỊNH:
                        </h4>
                        <a href="" class="footer__content-title">Cách thức đặt hàng</a>
                        <a href="" class="footer__content-title">Chính sách thành viên</a>
                        <a href="" class="footer__content-title">Chính sách giao hàng</a>
                        <a href="" class="footer__content-title">Quy định đổi trả</a>
                        <a href="" class="footer__content-title">Hình thức thanh toán</a>
                        <a href="" class="footer__content-title">Chính sách bảo mật</a>
                        <a href="" class="footer__content-title">Chính sách xử lý khiêu nại</a>
                        </div>
                    </div>
                    <div class="col l-3 m-6 c-6 ">
                    <div class="footer__content">
                        <h4 class="footer__content-heading">
                        VỀ CHÚNG TÔI:
                        </h4>
                        <p class="footer__content-title"><strong>Công ty TNHH NABI SHOP</strong></p>
                        <p class="footer__content-title"><strong>Địa chỉ: </strong>Số 98 Phố Dương Quảng Hàm, Phường Quan Hoa, Quận Cầu Giấy, TP. Hà Nội</p>
                        <p class="footer__content-title"><strong>Mã số doanh nghiệp: </strong>0108901419 do Sở kế hoạch và đầu tư thành phố Hà Nội cấp ngày 30/08/2024</p>
                        <p class="footer__content-title"><strong>Điện thoại: </strong>091.9295.123</p>
                        <p class="footer__content-title"><strong>Email: </strong>daothanh@gmail.com</p>
                        <a href="">
                            <img class="Verification" src="https://storage.googleapis.com/cdn.nhanh.vn/boCongThuong.png" alt="">
                        </a>      
                    </div>

                </div>
                <div class="col l-3 m-6 c-6 ">
                    <div class="footer-form" style="margin-top: 30px;">                           
                        <h3 class="footer-form_heading">NHẬN ĐĂNG KÝ THÔNG TIN MỚI</h3>
                        <div class="footer-form_form">
                            <input class="footer-form_input" type="email" placeholder="Nhập email của bạn...">
                            <button class="footer-form_button">ĐĂNG KÝ</button>
                        </div> 
                    </div>
                </div>
                <div class="col l-3 m-6 c-6 ">
                    <h4 class="footer__content-heading">ĐỊA CHỈ CỦA CHÚNG TÔI:</h4>
                    <div >  
                        <iframe class="map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9329097122104!2d105.79798477476935!3d21.03537028755241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab40a7887c9d%3A0x1e3a6c023e1d3e4!2zOTggRMawxqFuZyBRdeG6o25nIEjDoG0sIFF1YW4gSG9hLCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1725030137241!5m2!1svi!2s"
                        width="100%"
                        height="300"
                        style="border: 0;"
                        allowfullscreen=""
                        loading="lazy"
                        ></iframe>                        
                    </div>
                </div>
                
                

            </div>
        </footer

    </div>


</body>

<script src="{{'fontend'}}/js/main.js"></script>
@yield('javascrip')
</html>