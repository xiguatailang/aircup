
<link rel="stylesheet" href="{{ URL::asset('css/common.css') }}">
<script src="{{ URL::asset('js/jquery.cookie.min.js') }}"></script>

<nav>
    <div class="w_1200 ov">
        <a href="{{ url('/') }}" class="left"><img src="{{ URL::asset('/') }}image/web/logo_h.png" alt="" class="nav_logo"></a>
        <span class="right nav_a" onclick="lan()">中&nbsp;/&nbsp;EN</span>
        <a href="https://www.kickstarter.com/projects/aircup/light-video-a-pair-of-magic-ar-smart-glasses" target="_blank" class="right nav_a">预订购买</a>
        <a href="{{ url('/about') }}" class="right nav_a">关于我们</a>
        <a href="{{ url('/creation') }}" class="right nav_a">造物记</a>
        <a href="{{ url('/') }}" class="right nav_a_s">首页</a>
    </div>
</nav>

<script>

    function lan(){
        var language = $.cookie('language');
        if(language=="en"){
            $.cookie('language', 'cn', { expires: 30 });
        }else{
            $.cookie('language', 'en', { expires: 30 });
        }
        window.location.reload();
    }
</script>
