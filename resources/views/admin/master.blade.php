<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assest/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('assest/css/admin.css')}}">
    <link rel="stylesheet" href="{{ asset('assest/css/base.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper" style="background-color: rgb(238, 239, 240);">
        @include('admin.layout.header')
        <div class="content-wrapper" style="display: flex; ">
        @include('admin.layout.menu')
        @yield('home')
        </div>
    </div>
    <script src="{{}}"></script>
</body>
<script>
    const $ = document.querySelector.bind(document)
    const $$ = document.querySelectorAll.bind(document)

    const adminLink = $('.header-admin__item-link');
    const childMenu = $('.header-admin__child');

        adminLink.addEventListener('click', (event) => {
            event.preventDefault();
            childMenu.classList.toggle('active'); 
        });
        const menus = $$('.nav-bar-list-child.nav-list-child-menu .nav-bar-list-child__content');
        const items = $$(' .nav-bar-list-child__content-box');
        const arrows = $$('.child__content-icon-extend'); 
        const selects = $$('.nav-list-child-select');

        selects.forEach((select,item) => {
            select.addEventListener('click', () => {
                selects.forEach((select,i) => {
                    if(i==item){
                        select.classList.toggle('selected-in');
                    }else {
                        select.classList.remove('selected-in');
                    }
                })
            });
        });

        menus.forEach((menu, index) => {
            menu.addEventListener('click', () => {
                items.forEach((item, i) => {
                    if (i === index) {
                        item.classList.toggle('active');
                        arrows[i].classList.toggle('rotate');
                        menu.classList.toggle('selected');
                    } else {
                        item.classList.remove('active');
                        arrows[i].classList.remove('rotate');
                        menus[i].classList.remove('selected');
                    }
                });
            });
        });    

</script>
@yield('tinymce')
</html>