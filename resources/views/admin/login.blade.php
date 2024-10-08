<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ url('assest') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('assest') }}/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
</head>
<body style="background-image: url('{{url('assest')}}/img/admin-lo.jpg')">
<div class="wrapper">
            <form action="{{ route('postLogin.admin') }}" method="POST">
                @csrf
                <h1>Login admin</h1>
                
                <div class="input-box">
                    <input type="email" value="{{ old('email') }}"  name="email" placeholder="Tài khoản ....">
                    <i class='bx bxs-user'></i>
                    @error('email')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                </div>
                <div class="input-box">
                    <input type="password" value="{{ old('password') }}"  name="password" placeholder="Mật khẩu ....">
                    <i class='bx bxs-lock-alt'></i>
                    @error('password')
                            <span class="message-err" style="color:red;">{{ $message }}</span>
                        @enderror
                </div>
                <button type="submit" class="btn">Đăng nhập</button>
            </form>
        </div>
</body>
</html>