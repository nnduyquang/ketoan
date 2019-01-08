<!DOCTYPE Html>
<Html lang="en-US" class="lang-en_US" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<meta http-equiv="content-type" content="text/Html;charset=UTF-8"/>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="@yield('keyword')">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width">
    <meta property="og:title" content="@yield('title')"/>
    {{--<meta property="og:type" content="article" />--}}
    <link rel="shortcut icon" href="{{URL::asset('images/icon/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{URL::asset('images/icon/favicon.ico')}}" type="image/x-icon">
    <meta property="og:url" content="@yield('url-og')"/>
    <meta property="og:image" content="@yield('image-og')"/>
    <meta property="og:description" content="@yield('description')"/>
    <link rel="shortcut icon" href="images/icon/favicon.ico" type="image/x-icon">
    {{--<meta property="og:site_name" content="Site Name, i.e. Moz" />--}}
    {{ Html::style('css/core.common.css') }}
    {{ Html::style('css/core.frontend.css') }}
    {{ Html::style('css/frontend.css') }}
    @yield('styles')
    <style>

        .zalo-chat-widget {
            width: 100px!important;
            bottom: 13px!important;
            height: 100px!important;
        }

        .zs-container .zs-ico .zs-ico-main {
            width: 68px !important;
            height: 68px !important;
        }
        
    </style>
</head>
<body>
<header id="header">

</header>
<div class="zalo-chat-widget" data-oaid="1122548163818284612" data-welcome-message="Rất vui khi được hỗ trợ bạn!"
     data-autopopup="0" data-width="350" data-height="420"></div>

<script src="https://sp.zalo.me/plugins/sdk.js"></script>
<div id="blurrMe">
    @include('frontend.common.menu.m-menu')
    @include('frontend.common.menu.menu')
    @yield('slider')
    @yield('container')
</div>

@include('frontend.common.menu.m-sidebar')
@include('frontend.common.footer')

{{ Html::script('js/core.common.js') }}
{{ Html::script('js/core.frontend.js') }}
{{ Html::script('js/jquery.marquee.min.js') }}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('jv-scripts')
{{ Html::script('js/scripts.js') }}
<script>
    new WOW().init();
    $(function () {
        $('.marquee').marquee({
            duration: 10000,
            direction: 'left'
        });
    })

</script>

<div class="callback d-lg-none d-md-none" style="bottom: -50px">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:{{$listFrontendCommon['hotline']}}" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                                                    aria-hidden="true"></i></a>
    </div>
</div>
<div class="callback d-none d-md-block" style="right: 30px;bottom: -48px;left:inherit">
    <div class="phone_animation">
        <div class="phone_animation_circle"></div>
        <div class="phone_animation_circle_fill"></div>
        <a href="tel:{{$listFrontendCommon['hotline']}}" class="phone_animation_circle_fill_img"><i class="fas fa-phone"
                                                                                                    aria-hidden="true"></i></a>
    </div>
</div>

{{--<!--Start of Tawk.to Script-->--}}
{{--<script type="text/javascript">--}}
{{--var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();--}}
{{--(function(){--}}
{{--var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];--}}
{{--s1.async=true;--}}
{{--s1.src='https://embed.tawk.to/5c04913840105007f37aa974/default';--}}
{{--s1.charset='UTF-8';--}}
{{--s1.setAttribute('crossorigin','*');--}}
{{--s0.parentNode.insertBefore(s1,s0);--}}
{{--})();--}}
{{--</script>--}}
{{--<!--End of Tawk.to Script-->--}}
</body>

</Html>