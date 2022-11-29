<!DOCTYPE html>
<html lang="vi">
<head>

    <meta charset="UTF-8"/>
    <meta name="google-site-verification" content="aavyAd9XwRR2Q2oKqEW3NS4Hv9S5p69UcSb7nN5jddA"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description"
          content="@yield('meta_description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="canonical" href="">

    <meta name='revisit-after' content='1 days'/>
    <meta name="robots" content="noodp,index,follow"/>
    <meta name="theme-color" content="#5e2e86"/>

    <link rel="icon" href="{{ asset('site/100/302/581/themes/798703/assets/favicon.png') }}" type="image/x-icon"/>
    <link rel="apple-touch-icon" href="{{ asset('site/100/302/581/themes/798703/assets/favicon.png') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:image" content="@yield('meta_image')">
    <meta property="og:image:secure_url" content="https:100/302/581/themes/798703/assets/logo.png">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="@yield('keywords')">
    <link rel="stylesheet" href="{{ asset('site/bootstrap/code/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <link href="{{ asset('site/100/302/581/themes/798703/assets/evo-main.scss.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('site/100/302/581/themes/798703/assets/evo-index.scss.css') }}" rel="stylesheet"
          type="text/css"/>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxchimp/1.3.0/jquery.ajaxchimp.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
    <script src="{{ asset('site/assets/themes_support/placeholderTypewriter.js') }}"></script>
    <!--script src="dist/js/stats.min.js"></script-->

</head>
<body class="index">
@include('site.common.search')
@include('site.common.header')
@yield('content')
@include('site.common.footer')

<style>
    .mobile-hotline {
        display: none
    }

    .hotline {
        position: fixed;
        left: 10px;
        bottom: 10px;
        z-index: 9000;
        display: block;
        background: #5e2e86;
        color: white;
        padding-top: 5px;
        padding-bottom: 5px;
        padding-left: 12px;
        padding-right: 12px;
        border-radius: 99px;
    }

    .hotline .hotline-number {
        font-size: 20px;
        color: # #FFFFFF;
        font-weight: bold
    }

    @media (max-width: 767px) {

        .hotline {

            display: none;

        }

        .mobile-hotline {
            display: block;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            height: 60px;
            position: fixed;
            z-index: 9999999
        }

        .mobile-hotline .mobile-hotline-left {
            width: 45%;
            float: left;
            text-align: center;
            background: #5e2e86;
            margin-left: 10px;
            margin-right: 5px;
            margin-top: 7px;
            height: 45px;
            border-radius: 4px
        }

        .mobile-hotline .mobile-hotline-left a {
            color: white;
            line-height: 46px;
            font-size: 16px;
            font-weight: bold
        }

        .mobile-hotline .mobile-hotline-right {
            width: 45%;
            float: right;
            text-align: center;
            background: #ffffff;
            margin-left: 5px;
            margin-right: 10px;
            margin-top: 7px;
            height: 45px;
            border-radius: 4px
        }

        .mobile-hotline .mobile-hotline-right a {
            color: purple;
            line-height: 46px;
            font-size: 16px;
            font-weight: bold
        }
    }
</style>

<a href="tel:1900636008">
    <div class="hotline">
        <span class="before-hotline">Hotline:</span>
        <span class="hotline-number">{{ isset($information['hotline']) ? $information['hotline'] :''}}</span>
    </div>
</a>
<div class="mobile-hotline">
    <div class="mobile-hotline-right">
        <a href="https://zalo.me/{{ isset($information['hotline']) ? $information['hotline'] :''}}" target="blank">Chat Zalo</a>
    </div>
    <div class="mobile-hotline-right">
        <a href="tel:{{ isset($information['hotline']) ? $information['hotline'] :''}}"
                                         target="blank">Gọi điện ngay</a>
    </div>
</div>

<div class="backdrop__body-backdrop___1rvky"></div>
<script src="{{ asset('site/100/302/581/themes/798703/assets/evo-index-js.js') }}" type="text/javascript"></script>


<script src="{{ asset('site/100/302/581/themes/798703/assets/main.js') }}" type="text/javascript"></script>


<script>
    $("document").ready(function ($) {
        var nav = $('.evo-main-nav');

        $(window).scroll(function () {
            if ($(this).scrollTop() > 125) {
                nav.addClass("f-nav");
            } else {
                nav.removeClass("f-nav");
            }
        });
    });
</script>
<style>
    .f-nav {
        z-index: 99999;
        position: fixed !important;
        left: 0;
        top: 0;
        margin-top: 0px;
        width: 100%;
        margin: 0 auto;
        background: #fff
    }
</style>

</body>
</html>
<style>
    div#getfly-optin-form-iframe-1620440826653 iframe {
        height: 250px !important;
    }
</style>