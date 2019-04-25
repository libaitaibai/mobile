<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no,minimal-ui">
    <meta name="renderer" content="webkit">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="email=no">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link href="https://www.rongxingzhileng.cn//Public/Home/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
    <link rel="apple-touch-icon" href='/common/images/apple-touch-icon.png'>
    <link rel="icon" href='/common/images/favicon.ico'>
    <link rel="stylesheet" type="text/css" href="/css/af.ui.base.css" />
    <link rel="stylesheet" type="text/css" href="/css/css.css" />
    <link href="/css/style.css" rel="stylesheet">
    <link href="/common/css/font-awesome.min.css" rel="stylesheet">
    <script src="/common/js/TouchSlide.1.1.js"></script>
    @yield('meta')

</head>

<body>
    @include('layouts.header')

    @yield('CONTENT')

    @include('layouts.footer')

<aside>
    <div class="load"><span><i class="fa fa-refresh fa-spin fa-5x"></i><p>加载中...</p></span></div>
    <div class="navbg"></div>
    <div class="ewm">
        <div class="ewm-bg"></div>
        <div class="ewm-box"><img src="/upfile/201408/2014082236374109.png"/></div>
    </div>
    <nav>
        <span class="close"><i class="fa fa-times fa-lg"></i></span>

        @yield('navigation')

        {{--<ul class="nav">--}}
            {{--<li><a  href="{{ url('/index') }}">网站首页<i class="fa fa-chevron-right"></i></a></li>--}}
            {{--<!--            class="active"-->--}}
            {{--<li><a  href="{{ url('/projects') }}">项目工程<i class="fa fa-chevron-right"></i></a></li>--}}
            {{--<li><a  href="{{ url('/product') }}">产品展示<i class="fa fa-chevron-right"></i></a></li>--}}
            {{--<li><a  href="{{ url('/honor') }}">荣誉资质<i class="fa fa-chevron-right"></i></a></li>--}}
            {{--<li><a  href="{{ url('/about') }}">关于我们<i class="fa fa-chevron-right"></i></a></li>--}}
            {{--<li><a  href="{{ url('/contact') }}">联系我们<i class="fa fa-chevron-right"></i></a></li>--}}
        {{--</ul>--}}

    </nav>
</aside>
<script src="/js/jQuery.js"></script>
</body>
</html>