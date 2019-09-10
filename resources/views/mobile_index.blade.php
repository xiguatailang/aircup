<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>造物记</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="full-screen" content="yes" />
    <meta name="x5-fullscreen" content="true" />
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/mobile_css.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>

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
<nav>
    <a href="{{ url('/about') }}">
        <img src="{{ URL::asset('/') }}image/mobile_nav_1.png" alt="" class="nav_1" />
    </a>
    <a href="{{ url('/') }}">
        <img src="{{ URL::asset('/') }}image/mobile_nav_2.png" alt="" class="nav_2" />
    </a>
    <a href="{{ url('/buy') }}">
        <img src="{{ URL::asset('/') }}image/mobile_nav_3.png" alt="" class="nav_3" />
    </a>
</nav>
<div class="index_1">
    <p class="index_1_1">一个新时代,即将开启</p>
    <p class="index_1_2">能放进上衣口袋的智能眼镜来了</p>
    <a href="{{ url('/buy') }}" class="index_1_3 mar">预订购买</a>
    <p class="index_1_4">很多人问我<br/>你为什么做智能眼镜<br/>“参与创造未来<br/>让生命更有意义”</p>
    <p class="index_1_4 index_1_5">然而<br/>我却在质疑声中出发<br/>直到今天也从未停止</p>
    <p class="index_1_6">你不会算法，没有供应链资源，你凭什么<br/><br/>这种项目都是MIT、斯坦福的人才能做<br/><br/> 我是科大少年班毕业，又在研究所工作，<br/>我都不敢做<br/><br/>你不知道做硬件有多难</p>
    <p class="index_1_4">走自己的路<br/>勇敢的追求梦想</p>
    <p class="index_1_6">希望可以激励,更多像我一样的平凡人<br/>勇敢的挑战自我，追求梦想</p>
</div>
<div class="index_2 index_2_1 mar">
    <p class="index_2_p1">2017年,独自上路</p>
    <p class="index_2_p2">那些质疑我的人是以他们有限的经验，<br/>预判我的结局<br/>而我的坚持源自，享受创造的过程<br/>并每天乐在其中</p>
    <a href="{{ url('/story2017') }}" class="index_2_p3 mar">了解更多故事</a>
</div>
<div class="index_2 index_2_2 mar">
    <p class="index_2_p1">2018年,探索中前行</p>
    <p class="index_2_p2">永远相信未来会更美好<br/>即使未来不理想<br/>我们也不应放弃努力</p>
    <a href="{{ url('/story2018') }}" class="index_2_p3 mar">了解更多故事</a>
</div>
<div class="index_2 index_2_3 mar">
    <p class="index_2_p1 index_2_p4">2019年</p>
    <p class="index_2_p2">做出一台重80g，<br/>可放进上衣口袋的智能眼镜</p>
</div>
<div class="h_50"></div>
<footer>
    <div class="footer_1">
        <a href="{{ url('/') }}" class="footer_1_a">造物记</a>
        <a href="{{ url('/about') }}" class="footer_1_a">关于我们</a>
        <a href="{{ url('/buy') }}" class="footer_1_a footer_1_a1">预定购买</a>
    </div>
    <div class="footer_2">
        <a href="" class="footer_2_1">隐私政策</a>
        <a href="" class="footer_2_1">服务条款</a>
        <span class="footer_2_1">©2019 京ICP备19040913号</span>
    </div>
</footer>
</body>
<script type="text/javascript">
    (function (doc, win) {
        var docEl = doc.documentElement,
            resizeEvt =
                "orientationchange" in window ? "orientationchange" : "resize",
            recalc = function () {
                var clientWidth = docEl.clientWidth;
                if (!clientWidth) return;
                if (clientWidth >= 720) {
                    docEl.style.fontSize = "100px";
                } else {
                    docEl.style.fontSize = 100 * (clientWidth / 720) + "px";
                }
            };
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener("DOMContentLoaded", recalc, false);
    })(document, window);
</script>

</html>
