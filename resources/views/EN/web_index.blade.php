<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>The Creation</title>
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/web_css.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{{ URL::asset('/') }}image/web/logo_h.png"/>

    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?e6e8e979116c873af381afaf9cb8daf1";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>

<body>
<div class="index_1 mar">
    <nav>
        <div class="w_1200 ov">
            <a href="{{ url('/home/en') }}" class="left"><img src="{{ URL::asset('/') }}image/web/logo_h.png" alt="" class="nav_logo"></a>
            <a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses" target="_blank" class="right nav_a">Pre-order</a>
            <a href="{{ url('/about/en') }}" class="right nav_a">About Us</a>
            <a href="{{ url('/home/en') }}" class="right nav_a_s">The Creation</a>
        </div>
    </nav>
    <div class="w_1200">
        <p class="f_72" style="padding-top:350px">A new era is coming soon</p>
        <p class="f_30 p_t40">Smart glasses that can be put into your pockets are here</p>

        <p class="f_70 c_f" style="padding-top:690px;">Many people ask me why I choose Smart Glasses.<br />“To create the future, and to give life more meaning”</p>
        <p class="f_70 c_f" style="padding-top:560px;">I started with voices of doubts that has not yet stopped</p>
        <p class="f_36 c_f" style="padding-top:100px;">
            You don’t know algorithms. You have no supply chains. How dare you?<br /><br />Such project is for MTI or Stanford geniuses.<br /><br />I graduated from Special Class for the Gifted Young in University of Science and Technology of China, and now work in a research institute, but I dare not do it.<br /><br />You know nothing about the difficulties in developing hardware.
        </p>
        <p class="f_70 c_f" style="padding-top:660px;">Go your own way, and find the courage to pursue your dreams</p>
        <p class="f_36 c_f" style="padding-top:100px;">I hope to encourage more ordinary people like me to challenge ourselves, and pursue dreams.</p>
    </div>
</div>
<div class="index_2 ov w_1200">
    <div class="index_3 left">
        <p class="index_2_p1">In 2017, I began the journey alone.</p>
        <p class="index_2_p2">Those who doubt me predict my end with their limited experience.<br />But my persistence comes from the enjoyment of creation.<br />I enjoy it every day.</p>
        <a href="{{ url('/story2017/en') }}" class="index_2_p3 mar">To know more stories.</a>
    </div>
    <div class="index_4 right">
        <p class="index_2_p1">In 2018, I march forward in exploration.</p>
        <p class="index_2_p2">I always believe the future is better.<br />Even though it is no ideal,<br />We should still keep trying.</p>
        <a href="{{ url('/story2018/en') }}" class="index_2_p3 mar">To know more stories.</a>
    </div>
</div>
<div class="index_5 mar index_2">
    <p class="index_2_p1" style="padding-top:80px;">In 2019,</p>
    <p class="index_2_p2">Make a pair of 80-gram smart glasses that can be put into your pockets.</p>
</div>
<footer class="index_2">
    <div class="w_1200 mar ov">
        <div class="footer_1 left">
            <a href="{{ url('/home/en') }}" class="footer_1_a">The Creation</a>
            <a href="{{ url('/about/en') }}" class="footer_1_a">About Us</a>
            <a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses" target="_blank" class="footer_1_a footer_1_a1">Pre-order</a>
        </div>
        <div class="footer_2 right">
            <a href="" class="footer_2_1">隐私政策</a>
            <a href="" class="footer_2_1">服务条款</a>
            <span class="footer_2_1">©2019 京ICP备19040913号</span>
        </div>
    </div>
</footer>
</body>
<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            var topp = $(document).scrollTop();
            if (topp > 10) {
                $("nav").css({
                    "background": "#3c3d3d"
                });
                $(".nav_a").css({
                    "color": "#fff"
                });
                $(".nav_logo").attr("src", "{{ URL::asset('/') }}image/web/logo_b.png");
            } else if (topp < 10) {
                $("nav").css({
                    "background": "rgba(0,0,0,0)"
                });
                $(".nav_a").css({
                    "color": "#333"
                });
                $(".nav_logo").attr("src", "{{ URL::asset('/') }}image/web/logo_h.png");
            }
        })
    })
</script>

</html>
