<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('assest') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('assest') }}/css/all.css">
    <link rel="stylesheet" href="{{ url('assest') }}/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="body">
        <div class="title">Admin</div>
        <div class="box">
            <div class="box-title">
                <h3 class="box-title-content">Đăng nhập để quản trị trang web</h3>
            </div>
            <form action="" method="post">
                @csrf
                <div class="box-input">
                    <input type="email" placeholder="tài khoản" class="box-input-select" name="email" value="{{old('email')}}">
                    <i class="fa-solid fa-envelope box-input-icon"></i>
                </div>
                <div class="box-input">
                    <input type="password" placeholder="mật khẩu" class="box-input-select" name="password" value="{{'password'}">
                    <i class="fa-solid fa-unlock-keyhole box-input-icon"></i>
                </div>
    
                <div class="box-check">   
                    <input type="checkbox">
                    <span class="box-check-click-content">Nhớ mật khẩu</span>
                </div>

            </form>

            <div class="box-select">
                <div class="box-select-create">
                    <button>Tạo tài khoản</button>
                </div>
                <div class="box-select-create" >
                    <button >Đăng nhập</button>
                </div>
            </div>

        </div>
    </div>
</body>
</html>