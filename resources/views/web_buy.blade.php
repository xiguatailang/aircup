<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>预定</title>
    <link rel="stylesheet" href="{{ URL::asset('/') }}css/web_css.css" />
    <script src="{{ URL::asset('/') }}js/jquery.min.js"></script>
</head>

<body style="background-color:#f7f7f7;">
<nav>
    <div class="w_1200 ov">
        <a href="{{ url('/') }}" class="left"><img src="{{ URL::asset('/') }}image/web/logo_h.png" alt="" class="nav_logo"></a>
        <a href="{{ url('/buy') }}" class="right nav_a_s">预定购买</a>
        <a href="{{ url('/about') }}" class="right nav_a">关于我们</a>
        <a href="{{ url('/') }}" class="right nav_a">造物记</a>
    </div>
</nav>
<div class="buy_1 mar">
    <p class="f_30 buy_2">产品预计10月发售，实际价格已发售通知为准。如要购买请填写表单，留下联系方式，<br />我们会第一时间与您联系。首批购买者会有纪念礼物呦～
    </p>
    <p class="f_60 buy_3">预订信息</p>
    <div class="buy_4 mar">
        <p class="buy_5">1、您的姓名？<span>*</span></p>
        <input type="text" class="buy_6" id="name">
        <p class="buy_5 m_t40">2、您的性别？<span>*</span></p>
        <input type="text" class="buy_6" id="sex">
        <p class="buy_5 m_t40">3、您的邮箱？<span>*</span></p>
        <input type="text" class="buy_6" id="mail">
        <p class="buy_5 m_t40">4、您的年龄？<span>*</span></p>
        <input type="text" class="buy_6" id="age">
        <p class="buy_5 m_t40">5、您的微信号？</p>
        <input type="text" class="buy_6" id="wx">
        <p class="buy_5 m_t40">6、您的学校或单位？</p>
        <input type="text" class="buy_6" id="address">
        <p class="buy_5 m_t40">7、给我们的留言</p>
        <textarea name="" id="" cols="" rows="" class="about_inp2 mar"
                  style="border-bottom: #666666 1px solid;width:100%;font-size:0.26rem;"></textarea>
        <button class="about_inp3 mar">发&nbsp;送</button>
        <p class="buy_7">我们会妥善保管您信息</p>
    </div>
</div>
<footer class="index_2">
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
<script type="text/javascript">
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
        var name = $("#name").val();
        var sex = $("#sex").val();
        var mail = $("#mail").val();
        var age = $("#age").val();
        var wx = $("#wx").val();
        var address = $("#address").val();
        var message = $(".about_inp2").val();
        if (name == "") {
            alert("请填写您的名字")
            return
        } else if (sex == "") {
            alert("请填写您的性别")
            return
        } else if (mail == "") {
            alert("请填写您的邮箱")
            return
        } else if (age == "") {
            alert("请填写您的年龄")
            return
        }
        $.ajax({
            url: "{{ url('/api/aircup/makeorder') }}",
            type:'POST',
            data: {
                name: name,
                sex: sex,
                email: mail,
                age: age,
                wx_id: wx,
                address: address,
                feedback: message
            },
            success: function (data) {

                if(data.status==200) {
                    alert("感谢您的预购")
                }else {
                    alert(data.msg)
                }
            }
        })
    })
</script>

</html>
