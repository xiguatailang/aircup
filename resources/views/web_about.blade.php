<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>造物记</title>
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/web_css.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=0k9zbblGVozmyAZyKia0jF7o2LxhLCR5">
    </script>
</head>

<body>
<nav>
    <div class="w_1200 ov">
        <a href="{{ url('/') }}" class="left"><img src="{{ URL::asset('/') }}image/web/logo_h.png" alt="" class="nav_logo"></a>
        <a href="{{ url('/buy') }}" class="right nav_a">预定购买</a>
        <a href="{{ url('/about') }}" class="right nav_a_s">关于我们</a>
        <a href="{{ url('/') }}" class="right nav_a">造物记</a>
    </div>
</nav>
<div class="about_1 mar">
    <p class="story_1_1 f_60" style="padding-top:260px">使命</p>
    <p class="f_30 m_t20">让用户轻松、如影随形的获取信息</p>
    <p class="story_1_1 f_60" style="padding-top:100px">愿景</p>
    <p class="f_30 m_t20">将所有眼镜都换成智能眼镜</p>
</div>
<div class="mar p_80">
    <p class="f_60">价值观</p>
    <p class="f_30 m_t20">人人都是团队价值观的参与者、践行者和捍卫者</p>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>创造价值</span>
    </div>
    <div class="about_2_2 right">
        <span>满足用户的核心利益，才有价值；<br />每项改动，都是帮助用户解决问题服务</span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>尊重他人</span>
    </div>
    <div class="about_2_2 right">
        <span>尊重平等，公平待人，坦诚相待，团结互助</span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>不惧权利,<br />敬畏真理</span>
    </div>
    <div class="about_2_2 right">
        <span>为对的事情而坚持，不因畏惧权力而妥协</span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>保持专注,<br />保持简洁</span>
    </div>
    <div class="about_2_2 right">
        <span>专注本质，才能做到更好；<br />简洁的提高效率的最佳途径； </span>
    </div>
</div>
<div class="about_2 mar ov">
    <div class="about_2_1 left">
        <span>鼓励创新,<br />鼓励学习</span>
    </div>
    <div class="about_2_2 right">
        <span>在这里，新想法，快速试错，分享，<br />都将被鼓励；<br />学习是为了增长看问题本质的能力，<br />是为了找更优的方法</span>
    </div>
</div>
<div class="about_2 mar ov" style="border-bottom: 1px solid #999999">
    <div class="about_2_1 left">
        <span>言出必行</span>
    </div>
    <div class="about_2_2 right">
        <span>诺不轻许，言出必行；<br />注重承诺才是合作的基石</span>
    </div>
</div>
<div class="mar p_80">
    <p class="f_60">空杯的含义</p>
    <p class="f_30 m_t20" style="color: #666666">1、杯子人人拥有，每天使用；希望产品能够人人喜欢，时刻陪伴。<br /><br />2、不断创新，永不满足，保持空的状态,<br />才能在快速发展的行业中立足。
    </p>
</div>
<div class="mar p_80">
    <p class="f_60">公司地址</p>
    <p class="f_30 m_t20" style="color: #666666">北京市海淀区中关村鼎好大厦A座三层</p>
    <!-- <img src="img/about_1.png" alt="" class="about_img1 m_t40"> -->
    <div class="map m_t40 mar" id="map"></div>
</div>
<div class="w_720 p_80">
    <p class="f_48">关注我们</p>
    <img src="{{ URL::asset('/') }}image/web/about_2.png" alt="" class="about_img2 m_t40 mar">
</div>
<div class="w_720 p_80">
    <p class="f_48">给我们留言</p>
    <p class="about_p1 mar m_t40">邮箱</p>
    <input type="text" class="about_inp1 mar" placeholder="Aircup@cup.link">
    <p class="about_p1 mar m_t20">给我们留言</p>
    <textarea name="" id="" cols="" rows="" class="about_inp2 mar"></textarea>
    <button class="about_inp3 mar">发&nbsp;送</button>
</div>
<footer>
    <div class="w_1200 mar ov">
        <div class="footer_1 left">
            <a href="{{ url('/') }}" class="footer_1_a">造物记</a>
            <a href="{{ url('/about') }}" class="footer_1_a">关于我们</a>
            <a href="{{ url('/buy') }}" class="footer_1_a footer_1_a1">预定购买</a>
        </div>
        <div class="footer_2 right">
            <a href="" class="footer_2_1">隐私政策</a>
            <a href="" class="footer_2_1">服务条款</a>
            <span class="footer_2_1">©2019 京ICP备15059201号-4</span>
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
    //发送留言
    $(".about_inp3").click(function () {
        var mail = $(".about_inp1").val();
        var message = $(".about_inp2").val();
        if (mail == "") {
            alert("请填写您的邮箱")
            return
        } else if (message == "") {
            alert("请填写您的留言")
            return
        }
        $.ajax({
            url:"{{ url('/api/aircup/makefeedBack') }}",
            type:'POST',
            data: {
                email: mail,
                content: message
            },
            success: function (data) {
                if(data.status==200) {
                    alert("感谢您的宝贵留言")
                }else {
                    alert(data.msg)
                }
            }
        })
    })
    setTimeout(function () {
        //地图
        var map = new BMap.Map("map");
        // 创建地图实例
        var point = new BMap.Point(116.321146, 39.989646);
        // 创建点坐标
        map.centerAndZoom(point, 17);
        var marker = new BMap.Marker(point); // 创建标注
        map.addOverlay(marker);
    } ,1000 * 0.5);
</script>

</html>
