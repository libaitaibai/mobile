@extends('rongxing.rongxing')

@section('meta')
    <title>{{ $productDetail->title }}-荣兴制冷设备有限公司</title>
    <meta name="Keywords" content="{{ $productDetail->title }},冷库,制冷,冷库安装,郑州冷库,河南冷库,水果冷库,河南冷库安装,冷库安装公司,安装冷库,冷库设计、冷库维修、保鲜冷库、医药冷库、水果冷库,冷库工程,产品展示" />
    <meta name="Description" content="荣兴制冷设备有限公司成立于1994年4月，是一家专门从事制冷设备销售；大、中、小型冷库，中央空调，速冻隧道，盐水池设计、安装、售后及制冷产品研究与开发为一体的综合性企业。" />
    <meta name="apple-mobile-web-app-title" content="荣兴制冷经营设备有限公司">
@endsection

@section('CONTENT')
<section class="c-section">
    <div class="all">
        <div class="cdtl-border b-r5">
            <div class="cdtl-txt">
                <div class="page-title">产品展示-{{ $productDetail->title }}</div>
                <div class="clear"></div>
                <div class="page-content">

                    <div class="show-title">
                        <h1><a><b>{{ $productDetail->title }}</b></a></h1>
                    </div>
                    <div class="show-content">
                        {!! $productDetail->content !!}
                    </div>

                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('navigation')
    <ul class="nav">
        <li><a  href="{{ url('/index') }}">网站首页<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/projects') }}">项目工程<i class="fa fa-chevron-right"></i></a></li>

        <li><a  class="active" href="{{ url('/product') }}">产品展示<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/honor') }}">荣誉资质<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/about') }}">关于我们<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/contact') }}">联系我们<i class="fa fa-chevron-right"></i></a></li>

    </ul>
@endsection