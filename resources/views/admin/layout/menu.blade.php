<div class="nav">
                <div class="nav-admin">
                    <i class="fa-solid fa-bookmark nav-admin-icon"></i> 
                    <p class="nav-admin-title">Nổi bật</p>
                    <i class="fa-solid fa-chevron-left nav-admin-icon-tick"></i>
               
                </div>
                <div class="nav-bar">
                    <ul class="nav-bar-list">
                        <li class="nav-bar-list-child nav-list-child-menu">
                            <div class="nav-bar-list-child__content">
                                <div class="box-select">
        
                                    <div class="nav-bar-list-child__content-icon">
                                    
                                        <i class="fa-solid fa-tree child__content-icon-img"></i>
                                    </div>
                                    <a href="#" class="nav-bar-list-child__content-title">Quản lý sản phẩm</a>
                                </div>
                                <div class="nav-bar-list-child__icon">
                                    <i class="fa-solid fa-chevron-left child__content-icon-extend"></i>
                                </div>
                            </div>
                            <ul class="nav-bar-list-child__content-box">
                                <li class="menu-list">
                                   <a href="{{ route('product.index') }}">Tất cả sản phẩm</a>
                                </li>
                                <li class="menu-list">
                                    <a href="{{ route('product.add') }}">Thêm sản phẩm</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-bar-list-child nav-list-child-menu">
                            <div class="nav-bar-list-child__content">
                                <div class="box-select">
        
                                    <div class="nav-bar-list-child__content-icon">
                                    
                                        <i class="fa-solid fa-list child__content-icon-img"></i>
                                    </div>
                                    <a href="#" class="nav-bar-list-child__content-title">Quản lý menu</a>
                                </div>
                                <div class="nav-bar-list-child__icon">
                                    <i class="fa-solid fa-chevron-left child__content-icon-extend"></i>
                                </div>
                            </div>
                            <ul class="nav-bar-list-child__content-box">
                                <li class="menu-list">
                                   <a href="{{ route('category.index') }}">menu cha</a>
                                </li>
                                <li class="menu-list">
                                    <a href="{{ route('category-child.home') }}">menu con</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-bar-list-child nav-list-child-select">
                            <div class="nav-bar-list-child__content">
                                <div class="box-select">
        
                                    <div class="nav-bar-list-child__content-icon">
                                    
                                        <i class="fa-solid fa-image child__content-icon-img"></i>
                                    </div>
                                    <a href="{{ route('banner.home') }}" class="nav-bar-list-child__content-title">Quản lý banner</a>
                                </div>
                                
                            </div>
                           
                        </li>
                        <li class="nav-bar-list-child nav-list-child-menu">
                            <div class="nav-bar-list-child__content">
                                <div class="box-select">
        
                                    <div class="nav-bar-list-child__content-icon">
                                  
                                        <i class="fa-solid fa-palette child__content-icon-img"></i>
                                    </div>
                                    <a href="#" class="nav-bar-list-child__content-title">Quản lý thuộc tính</a>
                                </div>
                                <div class="nav-bar-list-child__icon">
                                    <i class="fa-solid fa-chevron-left child__content-icon-extend"></i>
                                </div>
                            </div>
                            <ul class="nav-bar-list-child__content-box">
                                <li class="menu-list">
                                   <a href="{{ route('attr.home') }}">Tất cả thuộc tính</a>
                                </li>
                                <li class="menu-list">
                                    <a href="{{ route('attr.add') }}">Thêm thuộc tính</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-bar-list-child nav-list-child-select">
                            <div class="nav-bar-list-child__content ">
                                <div class="nav-bar-list-child__content-icon">
                                
                                    <i class="fa-solid fa-cart-shopping child__content-icon-img"></i>
                                </div>
                                <a href="{{ route('order.index') }}" class="nav-bar-list-child__content-title">Quản lý đơn hàng</a>
                            </div>
                           
                        </li>
                       
                        
                        <li class="nav-bar-list-child">
                            <div class="nav-bar-list-child__logout">
                                <div class="nav-bar-list-child__content-icon">
                                    <i class="fa-solid fa-right-from-bracket child__content-icon-img"></i>
                                </div>
                                <a href="#" class="nav-bar-list-child__content-title">Đăng xuất</a>
                            </div>
                            
                        </li>
                    </ul>
                </div>
            </div>
