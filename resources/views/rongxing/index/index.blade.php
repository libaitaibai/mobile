@extends('rongxing.rongxing')

@section('meta')
    <title>荣兴制冷设备有限公司</title>
    <meta name="Keywords" content="冷库,制冷,冷库安装,郑州冷库,河南冷库,郑州冷库安装,河南冷库安装,冷库安装公司,安装冷库,冷库设计、冷库维修、冷库制作、冷库机组、大型冷库,冷库工程" />
    <meta name="Description" content="荣兴制冷设备有限公司成立于1994年4月，是一家专门从事制冷设备销售；大、中、小型冷库，中央空调，速冻隧道，盐水池设计、安装、售后及制冷产品研究与开发为一体的综合性企业。" />
    <meta name="apple-mobile-web-app-title" content="荣兴制冷经营设备有限公司">
@endsection

@section('CONTENT')
<section>
    <div class="panel">
        <div class="all">
            <figure>
                <div id="slideBox" class="slideBox">
                    <div class="bd">
                        <ul>

                            <li><img src="/images/rongxing/indexJpg/rongxing1.jpg"/></li>
                            <li><img src="/images/rongxing/indexJpg/rongxing2.jpg"/></li>
                            <li><img src="/images/rongxing/indexJpg/rongxing8.jpg"/></li>
                            <li><img src="/images/rongxing/indexJpg/rongxing9.jpg"/></li>
                            <li><img src="/images/rongxing/indexJpg/rongxing3.jpg"/></li>

                        </ul>
                    </div>
                    <div class="hd"><ul><li></li></ul></div>
                </div>
            </figure>
            <ul class="inavgrp all clear-fix">
                <li class="inavgrp-son"><a href="{{ url('/honor') }}">荣誉资质</a></li>
                <li class="inavgrp-son"><a href="{{ url('/projects') }}">项目工程</a></li>
                <li class="inavgrp-son"><a href="{{ url('/product') }}">产品展示</a></li>
                <li class="inavgrp-son"><a href="{{ url('/honor') }}">新闻资讯</a></li>
                <li class="inavgrp-son"><a href="{{ url('/about') }}">关于我们</a></li>
                <li class="inavgrp-son"><a href="{{ url('/contact') }}">联系我们</a></li>
            </ul>
            <div class="itl all">
                <div class="itl-more fr"><a href="{{ url('/product') }}">更多>></a></div>
                <div class="itl-tl">产品展示<span>  products</span></div>
            </div>
            <div class="ipro clear-fix">
                @foreach ($product as $detail)
                <div class="metro-b">
                    <a href="{{ url('/project/product',['pid'=>$detail->projectid]) }}">
                        <span class="pic"><img width="100%" src="{{ $detail->showImage }}"   alt="{{ $detail->title }}"/></span>
                        <span class="text">{{ $detail->title }}</span>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="itl all">
                <div class="itl-more fr"><a href="{{ url('/projects') }}">更多>></a></div>
                <div class="itl-tl">项目工程<span>  Projects</span></div>
            </div>
            <div class="ipro clear-fix">
                @foreach ($projects as $detail1)
                <div class="metro-b">
                    <a href="{{ url('/project/project',['pid'=>$detail1->projectid]) }}">
                        <span class="pic"><img width="100%" src="{{ $detail1->showImage }}"   alt="{{ $detail1->title }}"/></span>
                        <span class="text">{{ $detail1->title }}</span>
                    </a>
                </div>
                @endforeach
            </div>

            <div class="itl-inews">
                <div class="itl-more fr"><a href="{{ url('/product') }}">更多>></a></div>
                <div class="itl-tl">最新活动<span>  news</span></div>
            </div>

            <ul class="inews">
                @foreach ($news as $new)
                <li><span></span>
                    <a href="{{ url('/project/product',['pid'=>$new->projectid]) }}">
                        {{ $new->title }}
                    </a>
                </li>
                @endforeach
            </ul>

            <div class="itl all">
                <div class="itl-more fr"><a href="{{ url('/about') }}">更多>></a></div>
                <div class="itl-tl">关于我们<span class="itl-tl-en">  about us</span></div>
            </div>
            <div class="iabout">荣兴制冷设备经营有限公司 :<br />
                　　郑州市金水区荣兴制冷设备商行主要经营： 谷轮半封闭压缩机、全封闭涡旋压缩机组；北峰系列；雪梅系列；美优乐制冷机组；玻璃钢；彩钢板；不锈钢；聚苯乙烯；
                聚氨酯双面冷库板以及各种型号冷风机。业务范围延伸到河南省范围内各个县市（郑州、安阳、新乡、许昌、信阳、南阳、开封、洛阳、商丘、焦作、鹤壁、濮阳、周口、漯河），欢迎惠顾！
            </div>
            <div class="itel">全国服务热线：<span>0371-63881142</span></div>
        </div>
    </div>
</section>
<style>
    .inavgrp-son a{
        font:1.2em/2 "Microsoft Yahei";
    }
</style>
@endsection

@section('navigation')
    <ul class="nav">
        <li><a  class="active" href="{{ url('/index') }}">网站首页<i class="fa fa-chevron-right"></i></a></li>

        <li><a   href="{{ url('/projects') }}">项目工程<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/product') }}">产品展示<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/honor') }}">荣誉资质<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/about') }}">关于我们<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/contact') }}">联系我们<i class="fa fa-chevron-right"></i></a></li>

    </ul>
@endsection
