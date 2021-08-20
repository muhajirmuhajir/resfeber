@extends('layouts.frontpage')

@section('style')
<link rel="stylesheet" href="{{url('frontpage/assets/css/custom.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('frontpage/plugins/revslider/css/settings.css')}}">

<!-- Owl Carousel Assets -->
<link href="{{url('frontpage/css/owl.carousel.css')}}" rel="stylesheet">
<link href="{{url('frontpage/css/owl.theme.css')}}" rel="stylesheet">
<script src="{{url('frontpage/assets/js/jquery.min.js')}}"></script>
<!-- REVOLUTION JS FILES -->
<script type="text/javascript" src="{{url('frontpage/plugins/revslider/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{url('frontpage/plugins/revslider/js/jquery.themepunch.revolution.min.js')}}">
</script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript"
    src="{{url('frontpage/plugins/revslider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript"
    src="{{url('frontpage/plugins/revslider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript"
    src="{{url('frontpage/plugins/revslider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript"
    src="{{url('frontpage/plugins/revslider/js/extensions/revolution.extension.layeranimation.min.js')}}">
</script>
<script type="text/javascript"
    src="{{url('frontpage/plugins/revslider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript"
    src="{{url('frontpage/plugins/revslider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript"
    src="{{url('frontpage/plugins/revslider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript"
    src="{{url('frontpage/plugins/revslider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript"
    src="{{url('frontpage/plugins/revslider/js/extensions/revolution.extension.video.min.js')}}"></script>
<style type="text/css">
    #rev_slider_3_1_wrapper .tp-loader.spinner4 {
        background-color: #ffffff !important;
    }

    .hephaistos .tp-bullet {
        width: 12px;
        height: 12px;
        position: absolute;
        background: rgba(153, 153, 153, 0);
        border: 3px solid rgba(29, 184, 193, 0.9);
        border-radius: 50%;
        cursor: pointer;
        box-sizing: content-box;
        box-shadow: 0px 0px 2px 1px rgba(130, 130, 130, 0.3)
    }

    .hephaistos .tp-bullet:hover,
    .hephaistos .tp-bullet.selected {
        background: rgba(255, 255, 255, 0);
        border-color: rgba(220, 36, 38, 1)
    }
</style>
@endsection

@section('script')
<script src="{{url('frontpage/js/owl.carousel.min.js')}}"></script>

@endsection

@section('content')

<div id="dtr-main-content">
    <section class="dtr-section dtr-hero-section-top-padding">
        <div id="rev_slider_3_1_wrapper"
            class="rev_slider_wrapper fullwidthbanner-container dtr-hero-section-top-padding"
            data-alias="travel-home-new" data-source="gallery"
            style="margin:0px auto;background:rgba(211,211,211,0);padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.4.1 auto mode -->
            <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-8" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                        data-thumb="assets/100x50_d0c75-ba_1.jpg" data-delay="9000" data-rotate="0"
                        data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src='backpage/images/image 18.png' alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme" id="slide-8-layer-1"
                            data-x="['left','left','center','center']" data-hoffset="['806','608','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['146','150','150','165']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":810,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+7610","speed":560,"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; white-space: nowrap; font-size: 60px; line-height: 22px; font-weight: 400; color: #1E247E;text-transform:uppercase;">
                            Resfeber </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme" id="slide-8-layer-2"
                            data-x="['left','left','center','center']" data-hoffset="['808','608','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['199','206','206','201']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":510,"speed":720,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+6840","speed":580,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 6; white-space: nowrap; font-size: 22px; line-height: 11px; font-weight: 400; color: #F4974E;text-transform:uppercase;">
                            Explore the globe with us! </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme" id="slide-8-layer-3"
                            data-x="['left','left','center','center']" data-hoffset="['806','607','1','-1']"
                            data-y="['top','top','top','top']" data-voffset="['250','265','265','256']"
                            data-width="['364','364','363','361']" data-height="['50','50','52','69']"
                            data-whitespace="normal" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":950,"speed":770,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+6110","speed":640,"frame":"999","to":"x:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 7; min-width: 364px; max-width: 364px; max-width: 50px; max-width: 50px; white-space: normal; font-size: 15px; line-height: 5px; font-weight: 400; color: #000000;font-family:Lexend Deca;">
                            Kawan setiamu ketika liburan.. </div>

                        <div class="tp-caption   tp-resizeme" id="slide-8-layer-4"
                            data-x="['left','left','center','center']" data-hoffset="['805','573','-1','0']"
                            data-y="['top','top','top','top']" data-voffset="['275','308','289','278']"
                            data-width="['331','331','416','416']" data-height="['73','73','none','none']"
                            data-whitespace="normal" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":820,"speed":880,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+6200","speed":650,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[10,10,10,10]"
                            data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]"
                            data-paddingleft="[10,10,10,10]"
                            style="z-index: 7; min-width: 331px; max-width: 331px; max-width: 73px; max-width: 73px; white-space: normal; font-size: 14px; line-height: 22px; font-weight: 400; color: #000000;background-color:rgba(255, 255, 255, 0.5);">
                            Kami akan membantumu menemukan penawaran serta rute terbaik untuk liburan. </div>
                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption rev-btn " id="slide-8-layer-5" data-x="['left','left','center','center']"
                            data-hoffset="['804','608','0','2']" data-y="['top','top','top','top']"
                            data-voffset="['360','355','355','353']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                            data-responsive="off"
                            data-frames='[{"delay":1320,"speed":840,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5600","speed":410,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]"
                            style="z-index: 8; white-space: nowrap; font-size: 14px; line-height: 10px; font-weight: 700; color: #000000;text-transform:uppercase;background-color:rgba(243, 190, 78, 0.75);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                            Mulai seakarang </div>


                    </li>
                   
                   
                    <!-- SLIDE  -->
                    <li data-index="rs-10" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                        data-thumb="assets/100x50_a23f0-ba_3.jpg" data-rotate="0" data-saveperformance="off"
                        data-mediafilter="lofi" data-title="Slide" data-param1="" data-param2="" data-param3=""
                        data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9=""
                        data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src='backpage/images/image 22.png' alt="" data-bgposition="center center"
                            data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption   tp-resizeme" id="slide-10-layer-1"
                            data-x="['left','left','center','center']" data-hoffset="['843','576','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['79','96','96','96']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":10,"speed":780,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+7700","speed":510,"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5; white-space: nowrap; font-size: 50px; line-height: 48px; font-weight: 400; color: #FFFFFF;text-transform:uppercase;">
                            Mulai <br> Perjalananmu! </div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption   tp-resizeme" id="slide-10-layer-2"
                            data-x="['left','left','center','center']" data-hoffset="['841','573','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['218','231','231','209']"
                            data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                            data-responsive_offset="on"
                            data-frames='[{"delay":360,"speed":940,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+6880","speed":650,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[10,10,10,10]"
                            data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]"
                            data-paddingleft="[10,10,10,10]"
                            style="z-index: 6; white-space: nowrap; font-size: 14px; line-height: 22px; font-weight: 600; color: #000000;background-color:rgba(255, 255, 255, 0.5);">
                            "Klik" Travel sekarang! </div>

                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption   tp-resizeme" id="slide-10-layer-3"
                            data-x="['left','left','center','center']" data-hoffset="['836','573','-1','0']"
                            data-y="['top','top','top','top']" data-voffset="['303','308','289','278']"
                            data-width="['331','331','416','416']" data-height="['73','73','none','none']"
                            data-whitespace="normal" data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":820,"speed":880,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+6200","speed":650,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[10,10,10,10]"
                            data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]"
                            data-paddingleft="[10,10,10,10]"
                            style="z-index: 7; min-width: 331px; max-width: 331px; max-width: 73px; max-width: 73px; white-space: normal; font-size: 14px; line-height: 22px; font-weight: 400; color: #000000;background-color:rgba(255, 255, 255, 0.5);">
                            Kami menyediakan berbagai informasi tempat wisata beserta harga yang spesial. </div>

                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption rev-btn " id="slide-10-layer-4"
                            data-x="['left','left','center','center']" data-hoffset="['829','571','1','0']"
                            data-y="['top','top','top','top']" data-voffset="['391','405','380','362']"
                            data-width="['252','257','254','252']" data-height="['42','43','42','42']"
                            data-whitespace="normal" data-type="button" data-responsive_offset="on"
                            data-responsive="off"
                            data-frames='[{"delay":1160,"speed":850,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+5450","speed":760,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                            data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                            data-paddingleft="[35,35,35,35]"
                            style="z-index: 8; min-width: 252px; max-width: 252px; max-width: 42px; max-width: 42px; white-space: normal; font-size: 15px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1);background-color:rgba(0,0,0,0.75);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                            Mulai berwisata sekarang</div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-9" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                    data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                    data-thumb="assets/100x50_a8dd4-ba_2.jpg" data-rotate="0" data-saveperformance="off"
                    data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5=""
                    data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src='backpage/images/image 23.png' alt="" data-bgposition="center center"
                        data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption   tp-resizeme" id="slide-9-layer-1"
                        data-x="['left','left','center','center']" data-hoffset="['725','586','0','0']"
                        data-y="['top','top','top','top']" data-voffset="['104','101','101','101']" data-width="227"
                        data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":10,"speed":800,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+7870","speed":300,"frame":"999","to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 5; min-width: 227px; max-width: 227px; white-space: nowrap; font-size: 40px; line-height: 35px; font-weight: 500; color: #FFFFFF;text-transform:uppercase;">
                        Bagaimana <br> Website kami bekerja? </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption   tp-resizeme" id="slide-9-layer-2"
                        data-x="['left','left','center','center']" data-hoffset="['723','585','0','0']"
                        data-y="['top','top','top','top']" data-voffset="['203','208','208','208']"
                        data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"delay":560,"speed":740,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+7150","speed":300,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeInOut"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                        style="z-index: 6; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 400; color: #FFFFFF;font-family:Open Sans;">
                        Kalian bisa mengunjungi kami dimanapun! </div>


                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption   tp-resizeme" id="slide-8-layer-3"
                        data-x="['left','left','center','center']" data-hoffset="['725','573','-1','0']"
                        data-y="['top','top','top','top']" data-voffset="['250','308','289','278']"
                        data-width="['331','331','416','416']" data-height="['130','130','none','none']"
                        data-whitespace="normal" data-type="text" data-responsive_offset="on"
                        data-frames='[{"delay":820,"speed":880,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"+6200","speed":650,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                        data-textAlign="['inherit','inherit','center','center']" data-paddingtop="[10,10,10,10]"
                        data-paddingright="[10,10,10,10]" data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[10,10,10,10]"
                        style="z-index: 7; min-width: 331px; max-width: 331px; max-width: 73px; max-width: 73px; white-space: normal; font-size: 14px; line-height: 22px; font-weight: 400; color: #000000;background-color:rgba(255, 255, 255, 0.5);">
                        <strong>Resfeber</strong> adalah sebuah website yang membantu para traveller untuk menjelajahi wisata di seluruh Indonesia dengan memberikan informasi, harga tiket, serta travel terbaik. </div>

                    <!-- LAYER NR. 11 -->
                    <a href="{{route('register')}}" class="tp-caption rev-btn " id="slide-9-layer-4" data-x="['left','left','center','center']"
                        data-hoffset="['724','579','0','0']" data-y="['top','top','top','top']"
                        data-voffset="['390','366','366','366']" data-width="none" data-height="none"
                        data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                        data-responsive="off"
                        data-frames='[{"delay":1460,"speed":790,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;z:1;","ease":"Power3.easeInOut"},{"delay":"+5780","speed":300,"frame":"999","to":"y:50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,1);bs:solid;bw:0 0 0 0;"}]'
                        data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]"
                        data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]"
                        data-paddingleft="[35,35,35,35]"
                        style="z-index: 9; white-space: nowrap; font-size: 17px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1);background-color:rgba(0,0,0,0.75);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;font-family:Lexend Deca;">
                        Daftar Sekarang </a>
                </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        var tpj = jQuery;

        var revapi3;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_3_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_3_1");
            } else {
                revapi3 = tpj("#rev_slider_3_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//localhost/revslider-standalone/revslider/public/assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "hephaistos",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 20,
                            space: 5,
                            tmp: ''
                        }
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1170, 1024, 778, 480],
                    gridheight: [555, 555, 500, 500],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner4",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/

    </script>
    <!-- wisata section starts -->
    <section id="wisata" class="dtr-section dtr-box-layout dtr-py-100">

        <!-- heading starts -->
        <div class="dtr-section-heading-wrapper">
            <h2>Terpopuler</h2>
            <p>Bingung mau liburan kemana? Berikut ini adalah 3 rekomendasi <br> destinasi wisata terpopuler yang paling
                sering dikunjungi! </p>
        </div>
        <!-- heading ends -->

        <!--== row starts ==-->
        <div class="row">
            @foreach ($wisataPopuler as $wisata)
            <div class="col-12 col-md-4">
                <div class="dtr-blog-item">
                    <!-- image -->
                    <div class="dtr-post-img"> <img @if ($wisata->thumbnail)
                        src="{{Storage::url($wisata->thumbnail->media_url)}}"
                        @else
                        src="{{url('assets/images/ranu.png')}}"
                        @endif alt="image">
                    </div>
                    <!-- content -->
                    <div class="dtr-post-content"> <span class="dtr-blog-cat">{{$wisata->city->province->name}}</span>
                        <h5><a href="{{route('detailwisata', ['slug' => $wisata->slug])}}">{{$wisata->name}}</a></h5>
                        <p class="text-justify">{{$wisata->history}}</p>
                    </div>
                    <!-- content ends -->
                </div>
            </div>
            @endforeach


        </div>
        <!--== row ends ==-->

    </section>
    <!-- wisata section ends -->

    <section id="city" class="dtr-section dtr-box-layout dtr-py-100">
        <!-- heading starts -->
        <div class="dtr-section-heading-wrapper">
            <h2>Kota Terpopuler</h2>
            <p>Berikut ini adalah 3 kota terpopuler yang sering dicari
            </p>
        </div>
        <!-- heading ends -->
        <div class="row">
            <div class="col-md-4">
                <div class="position-relative">
                    <img class="img-fluid" src="{{url('frontpage/assets/images/malang.png')}}" alt="">

                    <a href="{{route('wisata')}}?city=malang" class="position-absolute city-text h1">
                        Malang
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative">
                    <img class="img-fluid" src="{{url('frontpage/assets/images/yogyakarta.png')}}" alt="">

                    <a href="{{route('wisata')}}?city=yogyakarta" class="position-absolute city-text h1">
                        Yogyakarta
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="position-relative">
                    <img class="img-fluid" src="{{url('frontpage/assets/images/surabaya.png')}}" alt="">
                    <a href="{{route('wisata')}}?city=surabaya" class="position-absolute city-text h1">
                        Surabaya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section starts
================================================== -->
    <section id="services" class="dtr-section dtr-box-layout dtr-box-wrapper-round dtr-box-padding bg-white">

        <!--== row 1 starts ==-->
        <div class="row">

            <!-- column 1 starts -->
            <div class="col-12 col-md-6">

                <!-- heading starts -->
                <div class="dtr-section-heading-wrapper">
                    <h2>Mengapa Harus Resfeber?</h2>
                    <p>Resfeber merupakan platform yang berisi tentang informasi lengkap tempat wisata beserta paket
                        wisata yang ada. </p>
                </div>
                <!-- heading ends -->

            </div>
            <!-- column 1 ends -->

            <!-- column 2 starts -->
            <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
                <div class="dtr-feature-img icon-center" style="background-color: #EFDBFE;"><img
                        src="{{url('frontpage/assets/images/ic-terupdate.png')}}" alt="" srcset=""></div>
                <h5>Terupdate</h5>
                <p>Seluruh informasi pada resfeber diperbarui dalam jangka waktu tertentu sehingga informasi yang
                    disajikan up to date.</p>
            </div>
            <!-- column 2 ends -->

            <!-- column 3 starts -->
            <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
                <div class="dtr-feature-img icon-center" style="background-color: #FFDBDB;"><img
                        src="{{url('frontpage/assets/images/ic-mitra.png')}}" alt="" srcset=""></div>
                <h5>Mitra</h5>
                <p>Resfeber bekerjasama dengan lebih dari 100 mitra agen tour travel yang menyediakan paket wisata.</p>
            </div>
            <!-- column 3 ends -->

        </div>
        <!--== row 1 ends ==-->

        <!--== row 2 starts ==-->
        <div class="row">

            <!-- column 1 starts -->
            <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
                <div class="dtr-feature-img icon-center" style="background-color: #DBE7FE;"><img
                        src="{{url('frontpage/assets/images/ic-kredibel.png')}}" alt="" srcset=""></div>
                <h5>Kredibel</h5>
                <p>Seluruh informasi pada resfeber valid dan dapat dipercaya.</p>
            </div>
            <!-- column 1 ends -->

            <!-- column 2 starts -->
            <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
                <div class="dtr-feature-img icon-center" style="background-color: #FEE8DB"><img
                        src="{{url('frontpage/assets/images/ic-akurat.png')}}" alt="" srcset=""></div>
                <h5>Akurat</h5>
                <p>Seluruh informasi pada resfeber sudah dilakukan verifikasi dan validasi langsung ke lapangan.</p>
            </div>
            <!-- column 2 ends -->

            <!-- column 3 starts -->
            <div class="col-12 col-md-3 dtr-feature dtr-feature-top dtr-feature-square">
                <div class="dtr-feature-img icon-center" style="background-color: #DBFEE7;"><img
                        src="{{url('frontpage/assets/images/ic-lengkap.png')}}" alt="" srcset=""></div>
                <h5>Lengkap</h5>
                <p>Seluruh informasi pada resfeber mencakup banyak aspek secara detail, diataranya sejarah, jam
                    operasional, fasilitas, biaya tiket dan lainnya.</p>
            </div>
            <!-- column 3 ends -->

        </div>
        <!--== row 2 ends ==-->

    </section>
    <!-- services section ends


================================================== -->

</div>
<!-- == main content ends == -->
@endsection
