@extends('rongxing.rongxing')

@section('meta')
    <title>关于我们|河南冷库|冷库安装|保鲜库|荣兴制冷设备有限公司</title>
    <meta name="Keywords" content="冷库,制冷,冷库安装,郑州冷库,河南冷库,郑州冷库安装,河南冷库安装,冷库安装公司,安装冷库,冷库设计、冷库维修、冷库有关、冷库机组、大型冷库,水果冷库" />
    <meta name="Description" content="荣兴制冷设备有限公司成立于1994年4月，是一家专门从事制冷设备销售；大、中、小型冷库，中央空调，速冻隧道，盐水池设计、安装、售后及制冷产品研究与开发为一体的综合性企业。" />
    <meta name="apple-mobile-web-app-title" content="荣兴制冷经营设备有限公司">
@endsection

@section('CONTENT')
<section class="c-section">
    <div class="all">
        <div class="cdtl-border b-r5">
            <div class="cdtl-txt">
                <div class="page-title">公司简介</div>
                <div class="clear"></div>
                <div class="page-content">

                    <p style="TEXT-ALIGN: left; TEXT-INDENT: 2em"><strong>企业介绍</strong></p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        郑州市荣兴制冷设备有限公司坐落在河南郑州美丽的金水河畔，人杰地灵，天宝物华；京广与陇海铁路在此交汇，交通便利，四通八达.
                    </p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        本公司成立于1994年4月，是一家专门从事制冷设备销售. 大、中、小型冷库，中央空调，速冻隧道，盐水池的设计、安装、售后及制冷产品研究与开发为一体的综合性企业。
                    </p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        郑州市荣兴制冷设备工程有限公司主要经营：谷轮半封闭压缩机、全封闭涡旋压缩机组；北峰系列；雪梅系列；美优乐制冷机组；玻璃钢；彩钢板；不锈钢；聚苯乙烯；聚氨酯双面冷库板以及各种型号冷风机。
                    </p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        本公司成立以来，凭借其较强的技术力量与完好的售后优势，在以市场为导向，以质量求生存，以信誉为生命，以服务为根本的经营理念指导下，审时度势，不断创新和发展，在同行业中一直处于领先地位，并取得较好的口碑。
                    </p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        “郑州荣兴”拥有一批技术先进、工作积极的精英骨干，并组建了一支永不言弃的安装队伍，保证每个工程量都能稳步上升。我公司不求数量，只求质量，宁让利润，不让市场，不偷工减料，不弄虚作假，童叟无欺。特别注重完善客户服务管理系统，确保每个工程都得到良好的服务，为广大客户提供优质服务。
                    </p><p style="TEXT-ALIGN: left; TEXT-INDENT: 2em">
                        我公司愿与广大客户共同发展，挑战极限、超越自我、实现互利双赢！

                        <br/>
                    <div id="slideBox" class="slideBox">
                        <div class="bd">
                            <ul>

                                <li><img src="/images/rongxing/indexJpg/rongxing1.jpg"/></li>
                                <li><img src="/images/rongxing/indexJpg/rongxing10.jpg"/></li>
                                <li><img src="/images/rongxing/indexJpg/rongxing3.jpg"/></li>

                            </ul>
                        </div>
                        <div class="hd"><ul><li>荣兴制冷</li></ul></div>
                    </div>
                    </p></p>

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

        <li><a  href="{{ url('/honor') }}">荣誉资质<i class="fa fa-chevron-right"></i></a></li>

        <li><a  class="active" href="{{ url('/about') }}">关于我们<i class="fa fa-chevron-right"></i></a></li>

        <li><a  href="{{ url('/contact') }}">联系我们<i class="fa fa-chevron-right"></i></a></li>

    </ul>
@endsection
