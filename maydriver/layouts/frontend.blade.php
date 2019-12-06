<!doctype html>
<html>

@include(_get_frontend_layout_path('frontend._head'))
<body id="page-top">
@include(_get_frontend_layout_path('frontend._nav'))

@yield('content')

@include(_get_frontend_layout_path('frontend._footer'))
@include(_get_frontend_layout_path('frontend.js'))
<a href="{{ asset('images/sofar_wechat.jpg') }}" data-lightbox="image-1" data-title="微信二维码">
    <img src="{{ asset('images/weixin-brands.png') }}" alt="wechat" class="fixed-wechat">
</a>
</body>
</html>