@extends('rongxing.rongxing')

@section('meta')
    <title>联系我们|河南冷库|冷库安装|速冻库|荣兴制冷设备有限公司</title>
    <meta name="Keywords" content="冷库,制冷,冷库安装,郑州冷库,河南冷库,郑州冷库安装,河南冷库安装,冷库安装公司,安装冷库,冷库设计、冷库维修、冷库制作、冷库机组、大型冷库,冷库工程,联系我们" />
    <meta name="Description" content="荣兴制冷设备有限公司成立于1994年4月，是一家专门从事制冷设备销售；大、中、小型冷库，中央空调，速冻隧道，盐水池设计、安装、售后及制冷产品研究与开发为一体的综合性企业。" />
    <meta name="apple-mobile-web-app-title" content="荣兴制冷经营设备有限公司">
@endsection

@section('CONTENT')
<section class="c-section">
    <div class="all">
        <div class="cdtl-border b-r5">
            <div class="cdtl-txt">
                <div class="page-title">联系我们</div>
                <div class="clear"></div>
                <div class="page-content">

                    <p style="TEXT-ALIGN: left">
                        <img src="/upfile/201408/2014082249858313.jpg" width="690"/>
                    </p>

                    <p style="TEXT-ALIGN: center">
                        <br/><strong>荣兴制冷设备经营有限公司联系方式</strong>
                    </p>

                    <br>

                    <p style="TEXT-ALIGN: center">
                    <div id="container" style=" HEIGHT: 232px"></div>
                    </p>
                    <br>
                    <p style="TEXT-ALIGN: left">
                        <strong>联系人：</strong>兰经理
                    </p>
                    <p style="TEXT-ALIGN: left">
                        <strong>电　话：</strong>0371-63881142
                    </p>
                    <p style="TEXT-ALIGN: left">
                        <strong>传　真：</strong>0371-63881142
                    </p>
                    <p style="TEXT-ALIGN: left">
                        <strong>手　机：</strong>137-0088-2923
                    </p>
                    <p style="TEXT-ALIGN: left">
                        <strong>Ｑ　Ｑ：</strong>496713192
                    </p>
                    <p style="TEXT-ALIGN: left">
                        <strong>邮　箱：</strong>496713192@qq.com
                    </p>
                    <p style="TEXT-ALIGN: left">
                        <strong>地　址：</strong>河南省 郑州市 索凌路博颂路丰乐五金机电城
                        25号楼1单元1层东荣兴制冷
                        <span style="LINE-HEIGHT: 0px; DISPLAY: none" id="_baidu_bookmark_start_39"></span>
                    </p>

                </div>
                <div class="clear"></div>
                <div class="pages"></div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.3&key=f5ca1c43faf305b9c8f837e93c917f2d"></script>
<script type="text/javascript">
    var map = new AMap.Map('container', {
        resizeEnable: true,
        zoom: 12,
        center: [113.6338019371, 34.8068870483]
    });
    var marker = new AMap.Marker({
        position: [113.6338019371, 34.8068870483],
    });
    marker.setMap(map);

    marker.setLabel({
        //修改label相对于maker的位置
        offset: new AMap.Pixel(-56, -22),
        content: "河南荣兴制冷设备有限公司"
    });

</script>
<script type="text/javascript" src="https://webapi.amap.com/demos/js/liteToolbar.js"></script>
@endsection


@section('navigation')
    <ul class="nav">
        <li><a  href="{{ url('/index') }}">网站首页<i class="fa fa-chevron-right"></i></a></li>

        <li><a   href="{{ url('/projects') }}">项目工程<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/product') }}">产品展示<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/honor') }}">荣誉资质<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/about') }}">关于我们<i class="fa fa-chevron-right"></i></a></li>

        <li><a  class="active" href="{{ url('/contact') }}">联系我们<i class="fa fa-chevron-right"></i></a></li>

    </ul>
@endsection

