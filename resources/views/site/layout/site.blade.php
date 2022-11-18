<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="">
    <meta name="facebook-domain-verification" content="k8ba98wh5xgy9of0kx5gb98ywk2mz8"/>
    <meta name="google-site-verification" content="SM8z0BLrA7oyaaXIGWbUZgguqjTMgPV2VdRDJYdrl9E"/>
    <link rel="canonical" href="">
    <link rel="icon" type="image/png"
          href="{{ isset($information['icon']) ?  $information['icon'] : '' }}">

    <title>@yield('title')</title>

    <meta name="description" content="@yield('meta_description')"/>


    <meta property="og:site_name" content="@yield('title')">
    <meta property="og:url" content="">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="website">
    <meta property="og:description" content="@yield('meta_description')"/>
    <meta property="og:image" content="@yield('meta_image')"/>
    <meta property="og:image:secure_url" content="@yield('meta_image')">
    <meta property="og:image:width" content="640">
    <meta property="og:image:height" content="640">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description"
          content="@yield('meta_description')">


    <script src="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/jquery.js') }}"
            type="text/javascript"></script>

    <script src="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/global.js') }}" defer="defer"></script>
    <link rel="alternate" hreflang="x-default" href="">
    <link rel="alternate" hreflang="fr-FR" href="">
    <link rel="alternate" hreflang="en-GB" href="">
    <link rel="alternate" hreflang="fr-GB" href="fr">


    <style id="shopify-dynamic-checkout-cart">
        @media screen and (min-width: 750px) {
            #dynamic-checkout-cart {
                min-height: 50px;
            }
        }

        @media screen and (max-width: 750px) {
            #dynamic-checkout-cart {
                min-height: 180px;
            }
        }
    </style>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Assistant:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,200;8..144,300;8..144,400;8..144,700&display=swap');
    </style>
    <style data-shopify>
        :root {
            @if($languageCurrent == 'vn')
            --font-body-family: Roboto Flex, sans-serif;
            --font-body-style: normal;
            --font-body-weight: 300;

            --font-heading-family: Assistant, sans-serif;
            --font-heading-style: normal;
            --font-heading-weight: 300;

            @else
            --font-body-family: Assistant, sans-serif;
            --font-body-style: normal;
            --font-body-weight: 400;

            --font-heading-family: Assistant, sans-serif;
            --font-heading-style: normal;
            --font-heading-weight: 400;

            @endif

            --font-body-scale: 1.0;
            --font-heading-scale: 1.0;

            --color-base-text: 18, 18, 18;
            --color-shadow: 18, 18, 18;
            --color-base-background-1: 255, 255, 255;
            --color-base-background-2: 0, 0, 0;
            --color-base-solid-button-labels: 255, 255, 255;
            --color-base-outline-button-labels: 18, 18, 18;
            --color-base-accent-1: 18, 18, 18;
            --color-base-accent-2:,,;
            --payment-terms-background-color: #FFFFFF;

            --gradient-base-background-1: #FFFFFF;
            --gradient-base-background-2: #000000;
            --gradient-base-accent-1: #121212;
            --gradient-base-accent-2: ;

            --media-padding: px;
            --media-border-opacity: 0.05;
            --media-border-width: 1px;
            --media-radius: 0px;
            --media-shadow-opacity: 0.0;
            --media-shadow-horizontal-offset: 0px;
            --media-shadow-vertical-offset: 0px;
            --media-shadow-blur-radius: 0px;

            --page-width: 160rem;
            --page-width-margin: 0rem;

            --card-image-padding: 0.0rem;
            --card-corner-radius: 0.0rem;
            --card-text-alignment: ;
            --card-border-width: 0.0rem;
            --card-border-opacity: 0.0;
            --card-shadow-opacity: 0.1;
            --card-shadow-horizontal-offset: 0.0rem;
            --card-shadow-vertical-offset: 0.0rem;
            --card-shadow-blur-radius: 0.0rem;

            --badge-corner-radius: 4.0rem;

            --popup-border-width: 1px;
            --popup-border-opacity: 0.1;
            --popup-corner-radius: 0px;
            --popup-shadow-opacity: 0.0;
            --popup-shadow-horizontal-offset: 0px;
            --popup-shadow-vertical-offset: 0px;
            --popup-shadow-blur-radius: 0px;

            --drawer-border-width: 1px;
            --drawer-border-opacity: 0.1;
            --drawer-shadow-opacity: 0.0;
            --drawer-shadow-horizontal-offset: 0px;
            --drawer-shadow-vertical-offset: 0px;
            --drawer-shadow-blur-radius: 0px;

            --spacing-sections-desktop: 0px;
            --spacing-sections-mobile: 0px;

            --grid-desktop-vertical-spacing: 8px;
            --grid-desktop-horizontal-spacing: 8px;
            --grid-mobile-vertical-spacing: 4px;
            --grid-mobile-horizontal-spacing: 4px;

            --text-boxes-border-opacity: 0.0;
            --text-boxes-border-width: 0px;
            --text-boxes-radius: 0px;
            --text-boxes-shadow-opacity: 0.0;
            --text-boxes-shadow-horizontal-offset: 0px;
            --text-boxes-shadow-vertical-offset: 0px;
            --text-boxes-shadow-blur-radius: 0px;

            --buttons-radius: 0px;
            --buttons-radius-outset: 0px;
            --buttons-border-width: 1px;
            --buttons-border-opacity: 1.0;
            --buttons-shadow-opacity: 0.0;
            --buttons-shadow-horizontal-offset: 0px;
            --buttons-shadow-vertical-offset: 0px;
            --buttons-shadow-blur-radius: 0px;
            --buttons-border-offset: 0px;

            --inputs-radius: 0px;
            --inputs-border-width: 1px;
            --inputs-border-opacity: 0.55;
            --inputs-shadow-opacity: 0.0;
            --inputs-shadow-horizontal-offset: 0px;
            --inputs-margin-offset: 0px;
            --inputs-shadow-vertical-offset: 0px;
            --inputs-shadow-blur-radius: 0px;
            --inputs-radius-outset: 0px;

            --variant-pills-radius: 40px;
            --variant-pills-border-width: 1px;
            --variant-pills-border-opacity: 0.55;
            --variant-pills-shadow-opacity: 0.0;
            --variant-pills-shadow-horizontal-offset: 0px;
            --variant-pills-shadow-vertical-offset: 0px;
            --variant-pills-shadow-blur-radius: 0px;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        html {
            box-sizing: border-box;
            font-size: calc(var(--font-body-scale) * 62.5%);
            height: 100%;
        }

        body {
            display: grid;
            grid-template-rows: auto auto 1fr auto;
            grid-template-columns: 100%;
            min-height: 100%;
            margin: 0;
            font-size: 1.5rem;
            letter-spacing: 0.06rem;
            line-height: calc(1 + 0.8 / var(--font-body-scale));
            font-family: var(--font-body-family);
            font-style: var(--font-body-style);
            font-weight: var(--font-body-weight);
        }

        @media screen and (min-width: 750px) {
            body {
                font-size: 1.6rem;
            }
        }
    </style>

    <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/base.css') }}" rel="stylesheet"
          type="text/css" media="all"/>
    <link href="{{ asset('site/menu.css') }}" rel="stylesheet"
          type="text/css" media="all"/>
    <link rel="preload" as="font"
          href="{{ asset('site/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2') }}"
          type="font/woff2" crossorigin>
    <link rel="preload" as="font"
          href="{{ asset('site/assistant/assistant_n4.bcd3d09dcb631dec5544b8fb7b154ff234a44630.woff2') }}"
          type="font/woff2" crossorigin>
    <link rel="stylesheet"
          href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-predictive-search.css') }}"
          media="print" onload="this.media='all'">

    <script async type="text/javascript" src="{{ asset('site/eg/script.js') }}"></script>

    <script async src="{{ asset('site/onsite/js/klaviyo.js') }}"></script>
    <script src="{{ asset('site/common.js') }}"></script>

    <!-- END app app block -->

</head>

<body>

<div id="loading">
    <div id="preloader">
        <img width="200" src="{{ asset('site/cacParis.png') }}" alt="">

    </div>
</div>

<a class="skip-to-content-link button visually-hidden" href="#MainContent">
    Skip to content
</a>

<div id="shopify-section-announcement-bar" class="shopify-section section-announcement">
    <div class="announcement-bar" role="region" aria-label="Announcement">
        <div class="announcement-slide-wrap ">
            <div class="announcement-slide-mask">
                <ul class="announcement-slide-grouping">
                    @foreach (\App\Entity\SubPost::showSubPost('slider-shipping-policy', 3) as $item)
                    <li class="announcement-slide">
                        <a href="#">{{ $item->title }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <script>
        var $slide = $('.announcement-slide'),
            $slideGroup = $('.announcement-slide-grouping');

        var slidesTotal = ($slide.length - 1),
            current = 0,
            isAutoSliding = true;

        var clickSlide = function () {
            //stop auto sliding
            window.clearInterval(autoSlide);
        };

        var updateIndex = function (currentSlide) {
            if (current === slidesTotal) {
                current = 0;
            } else {
                current++;
            }
            transition(current);
        };

        var transition = function (slidePosition) {
            var slidePositionNew = (slidePosition) * 30;
            $slideGroup.animate({
                'top': '-' + slidePositionNew + 'px'
            });
        };

        var autoSlide = window.setInterval(updateIndex, 3000);
    </script>
</div>
@include('site.common.header')
@yield('content')

@include('site.common.footer')

<ul hidden>
    <li id="a11y-refresh-page-message">Choosing a selection results in a full page refresh.</li>
</ul>

<script type="text/javascript">
    function subcribeEmailSubmit(e) {
        var email = $(e).find('.emailSubmit').val();
        var token =  $(e).find('input[name=_token]').val();

        $.ajax({
            type: "POST",
            url: '{{ route('subcribe_email', ['languageCurrent' => $languageCurrent]) }}',
            data: {
                email: email,
                _token: token
            },
            success: function(data) {
                var obj = jQuery.parseJSON(data);

                alert(obj.message);
            }
        });
        return false;
    }

    function addToOrder(e) {
        var data = $(e).serialize();

        $.ajax({
            type: "POST",
            url: '{{ route('addToCart', ['languageCurrent' => $languageCurrent]) }}',
            data: data,
            success: function(result){
                var obj = jQuery.parseJSON( result);

                var num = +$("#countOrder").text() + 1;

                $("#countOrder").text(num);

                $('#cart-notification').addClass('active');
                $('.cart-notification-product__image img').attr('src', obj.orderItems[0].image);
                $('.cart-notification-product__name').text(obj.orderItems[0].title);
                $('.cart-notification-product__name').text(obj.orderItems[0].title);
                $('.cart-notification-product__size').text(obj.size);


                alert('Đặt hàng thành công');
            },
            error: function(error) {
                //alert('Lỗi gì đó đã xảy ra!')
            }

        });

        return false;
    }
  function contact(e) {
        var $btn = $(e).find('button').text('Đang tải ...');
        var data = $(e).serialize();

        $.ajax({
            type: "POST",
            url: '{{ route('sub_contact', ['languageCurrent' => $languageCurrent]) }} ',
            data: data,
            success: function(result){s
                var obj = jQuery.parseJSON( result);
                // gửi thành công
                if (obj.status == 200) {
                    alert(obj.message);
                    $btn.text('Đăng ký ngay');

                    return;
                }

                // gửi thất bại
                if (obj.status == 500) {
                    alert(obj.message);
                    $btn.text('Đăng ký ngay');

                    return;
                }
            },
            error: function(error) {
                //alert('Lỗi gì đó đã xảy ra!')
            }
        });
        return false;
    }
</script>

</body>
</html>
