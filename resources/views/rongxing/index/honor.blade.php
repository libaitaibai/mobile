@extends('rongxing.rongxing')

@section('meta')
    <title>荣誉资质|河南冷库|冷库安装|荣兴制冷设备有限公司</title>
    <meta name="Keywords" content="冷库,制冷,冷库安装,郑州冷库,河南冷库,郑州冷库安装,河南冷库安装,冷库安装公司,安装冷库,冷库设计、冷库维修、保鲜冷库、医药冷库、水果冷库,冷库工程,荣誉资质" />
    <meta name="Description" content="荣兴制冷设备有限公司成立于1994年4月，是一家专门从事制冷设备销售；大、中、小型冷库，中央空调，速冻隧道，盐水池设计、安装、售后及制冷产品研究与开发为一体的综合性企业。" />
    <meta name="apple-mobile-web-app-title" content="荣兴制冷经营设备有限公司">
@endsection

@section('CONTENT')
<section class="c-section">
    <div class="all">
        <div class="cdtl-border b-r5">
            <div class="cdtl-txt">
                <div class="page-title">荣誉资质</div>
                <div class="clear"></div>
                <div class="page-content">

                    <div id="slideBox" class="slideBox">
                        <img src="/images/rongxing/honor/honor.jpg"/>
                        <div class="hd">荣兴制冷经营设备有限公司</div>
                    </div>
                    <p style="TEXT-ALIGN: left; TEXT-INDENT: 2em;font-size:16px;"><strong>荣兴制冷荣获2012年制冷行业明星企业</strong></p>

                    <br>

                    <div id="slideBox" class="slideBox">
                        <img src="/images/rongxing/honor/honor1.jpg"/>
                        <div class="hd">荣兴制冷经营设备有限公司</div>
                    </div>
                    <p style="TEXT-ALIGN: left; TEXT-INDENT: 2em;font-size:16px;"><strong>荣兴制冷荣获2016年河南省重信用企业</strong></p>

                    <br>

                    <p style="TEXT-ALIGN: left;"><strong>致尊敬的客户:</strong></p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        荣兴制冷自1992年成立以来,
                    </p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        凭借其较强的技术力量与完好的售后优势，在以市场为导向，以质量求生存，以信誉为生命，以服务为根本的经营理念指导下，审时度势，不断创新和发展，在同行业中一直处于领先地位，并取得较好的口碑!
                    </p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        我公司不求数量，只求质量，宁让利润，不让市场，不偷工减料，不弄虚作假，童叟无欺。
                    </p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        我公司愿与广大客户共同发展，挑战极限、超越自我、实现互利双赢！
                    </p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        感谢客户的通力配合,荣兴制冷才有今天的成就!感谢各位合作伙伴!荣兴制冷的明天会越来越好!

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('navigation')
    <ul class="nav">
        <li><a  href="{{ url('/index') }}">网站首页<i class="fa fa-chevron-right"></i></a></li>

        <li><a   href="{{ url('/projects') }}">项目工程<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/product') }}">产品展示<i class="fa fa-chevron-right"></i></a></li>

        <li><a  class="active" href="{{ url('/honor') }}">荣誉资质<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/about') }}">关于我们<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/contact') }}">联系我们<i class="fa fa-chevron-right"></i></a></li>

    </ul>
@endsection
