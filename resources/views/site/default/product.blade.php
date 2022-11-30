@extends('site.layout.site')

@section('title', $product->title)
@section('meta_description',  $product->description )
@section('keywords', '')

@section('content')
    <div class="evo-themes">
        <section class="bread-crumb margin-bottom-10"style="background-image:url({{ isset($product->image) ? $product->image : '/site/image/image.jpg' }}); background-size: cover;
                background-repeat: no-repeat;
                background-position: center;">
            <div class="container">
                <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="" title="Trang chủ">
                            <span itemprop="name">Trang chủ</span>
                            <meta itemprop="position" content="1"/>
                        </a>
                    </li>

                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <span itemprop="name">{{ $product->title }}</span>
                        <meta itemprop="position" content="3"/>
                    </li>

                </ul>
            </div>
        </section>
        <section class="product margin-top-30" itemscope itemtype="http://schema.org/Product">
            <div class="container">
                <div class="details-product padding-bottom-10">
                    <div class="product-bottom row">
                        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6">
                            <div class="relative product-image-block">

                                <div class="slider-big-video clearfix margin-bottom-10">
                                    <div class="slider slider-for">

                                        <a href="{{ $product->image }}"
                                           title="Click để xem">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                                 data-lazy="{{ $product->image }}"
                                                 alt="{{ $product->title }}"
                                                 data-image="{{ $product->image }}"
                                                 class="img-responsive center-block">
                                        </a>

                                    </div>
                                </div>
                                <div class="slider-has-video clearfix">
                                    <?php
                                        $imageList = explode(',', $product->image_list)
                                    ?>
                                    <div class="slider slider-nav">
                                        @foreach($imageList as $image)
                                        <div class="fixs">
                                            <img class="lazy"
                                                 src="{{ $image }}"
                                                 data-src="{{ $image }}"
                                                 alt="{{ $product->title }}"
                                                 data-image="{{ $image }}"/>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-lg-6 col-md-6 details-pro">
                            <div class="product-top clearfix">
                                <h1 class="title-head">{{ $product->title }}</h1>

                                <div class="sku-product clearfix">
                                    <div class="item-sku">
                                        <span class="item-title">Mã nhân viên:</span>
                                        <span class="vendor">{{ $product->code }}</span>
                                    </div>
                                </div>

                            </div>
                            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                <div class="inventory_quantity">
                                    <span class="stock-brand-title">Tình trạng:</span>

                                    <span class="a-stock a2">
                                        <link itemprop="availability"  href="http://schema.org/InStock"/>{{ $product->properties }}</span>

                                </div>
                                <div class="price-box clearfix">

                                    <div class="special-price">
                                        <span class="price product-price">Liên hệ </span>
                                    </div>

                                </div>


                                <div class="evo-product-summary product_description margin-bottom-10">
                                    <a class="evo-product-tabs-header hidden-lg hidden-md" href="javascript:void(0);">
                                        <span>Mô tả ngắn</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="5.658" height="9.903"
                                             viewBox="0 0 5.658 9.903">
                                            <path d="M5429 1331.94l4.451 4.451-4.451 4.452" stroke="#1c1c1c"
                                                  stroke-linecap="round" fill="none"
                                                  transform="translate(-5428.5 -1331.44)"></path>
                                        </svg>
                                    </a>
                                    <div class="rte description rte-summary">
                                        <p>{{ $product->description }}</p>
                                    </div>
                                </div>


                            </div>
                            <div class="evo-product-policy">
                                <h4>Chính sách mua hàng</h4>
                                <div class="evo-product-policy-item">
                                    <img class="lazy"
                                         src="{{ asset('site/100/302/581/themes/798703/assets/evo_policy_image_1.svg') }}"
                                         data-src="{{ asset('site/100/302/581/themes/798703/assets/evo_policy_image_1.svg') }}"
                                         alt="Đổi người trong vòng 3 ngày nếu khách hàng không hài lòng."/>
                                    <p>Đổi người trong vòng 3 ngày nếu khách hàng không hài lòng.</p>
                                </div>
                                <div class="evo-product-policy-item">
                                    <img class="lazy"
                                         src="{{ asset('site/100/302/581/themes/798703/assets/evo_policy_image_2.svg') }}"
                                         data-src="{{ asset('site/100/302/581/themes/798703/assets/evo_policy_image_2.svg') }}"
                                         alt="Người giúp việc có kinh nghiệm được đào tạo bài bản."/>
                                    <p>Người giúp việc có kinh nghiệm được đào tạo bài bản.</p>
                                </div>
                                <div class="evo-product-policy-item">
                                    <img class="lazy"
                                         src="{{ asset('site/100/302/581/themes/798703/assets/evo_policy_image_3.svg') }}"
                                         data-src="{{ asset('site/100/302/581/themes/798703/assets/evo_policy_image_3.svg') }}"
                                         alt="Cung cấp đầy đủ hợp đồng lao động."/>
                                    <p>Cung cấp đầy đủ hợp đồng lao động.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="margin-top-20">
                        <div class="product-tab e-tabs padding-bottom-10 evo-tab-product-mobile">
                            <ul class="tabs tabs-title clearfix d-none d-sm-flex">
                                <li class="tab-link" data-tab="tab-1"><span>Mô tả</span></li>
                                <li class="tab-link" data-tab="tab-2"><span>Giới thiệu</span></li>

                            </ul>

                            <div id="tab-1" class="tab-content active">
                                <a class="evo-product-tabs-header d-sm-block d-md-none d-lg-none"
                                   href="javascript:void(0);">
                                    <span>Mô tả</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="5.658" height="9.903"
                                         viewBox="0 0 5.658 9.903">
                                        <path d="M5429 1331.94l4.451 4.451-4.451 4.452" stroke="#1c1c1c"
                                              stroke-linecap="round" fill="none"
                                              transform="translate(-5428.5 -1331.44)"></path>
                                    </svg>
                                </a>
                                <div class="rte">
                                    {!! $product->content !!}
                                </div>
                            </div>


                            <div id="tab-2" class="tab-content">
                                <a class="evo-product-tabs-header d-sm-block d-md-none d-lg-none"
                                   href="javascript:void(0);">
                                    <span>Giới thiệu</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="5.658" height="9.903"
                                         viewBox="0 0 5.658 9.903">
                                        <path d="M5429 1331.94l4.451 4.451-4.451 4.452" stroke="#1c1c1c"
                                              stroke-linecap="round" fill="none"
                                              transform="translate(-5428.5 -1331.44)"></path>
                                    </svg>
                                </a>
                                <div class="rte">
                                    {!! isset($information['gioi-thieu-trang-chi-tiet']) ? $information['gioi-thieu-trang-chi-tiet'] : '' !!}
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="row margin-top-10 margin-bottom-10">
                    <div class="col-lg-12">
                        <div class="related-product product-white-bg">
                            <div class="home-title text-center">
                                <h2><a href="#" title="Lựa chọn khác dành cho bạn">Lựa chọn khác dành cho bạn</a></h2>
                            </div>
                            <div class="evo-owl-product clearfix">
                                @foreach(\App\Entity\Product::showProduct('dich-vu', 8) as $id => $item)
                                <div class="evo-slick">
                                    <div class="evo-product-block-item">
                                        <div class="image">
                                            <a class="primary_img" href="{{ route('product', ['post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                               title="{{ isset($item['title']) ? $item['title'] : '' }}">
                                                <img class="img-responsive center-block lazy loaded"
                                                     src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                                     data-src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                                     alt="{{ isset($item['title']) ? $item['title'] : '' }}"/>
                                            </a>

                                        </div>
                                        <div class="product-meta">
                                            <h3><a href="{{ route('product', ['post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                                   title="{{ isset($item['title']) ? $item['title'] : '' }}">{{ isset($item['title']) ? $item['title'] : '' }}</a>
                                            </h3>
                                            <div class="content_price">

                                                <strong>Liên hệ</strong>

                                            </div>
                                            <form action="cart/add" method="post" enctype="multipart/form-data"
                                                  class="hidden-md variants form-nut-grid form-ajaxtocart"
                                                  data-id="product-actions-11732690">

                                                <a class="button ajax_addtocart" href="{{ route('product', ['post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}" title="Chi tiết">Chi
                                                    tiết</a>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <script>
            $(document).on('click', '.btn-buy-now-click', function (e) {
                e.preventDefault();
                $('[data-role=addtocart]').click();
            });
            $('.evo-owl-product').slick({
                dots: true,
                arrows: false,
                infinite: false,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 5,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    }
                ]
            });
            $('.slider-nav').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                centerMode: false,
                infinite: false,
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 1025,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 4
                        }
                    }
                ]
            });
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                lazyLoad: 'ondemand',
                fade: true,
                infinite: false,
                asNavFor: '.slider-nav',
                adaptiveHeight: false,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            dots: true
                        }
                    }
                ]
            });
            $('.slider-big-video .slider-for a').each(function () {
                $(this).attr('rel', 'lightbox-demo');
            });
            var variantsize = false;
            var alias = 'nguyen-thi-oanh';
            var getLimit = 10;
            var productOptionsSize = 1;

            jQuery('.swatch :radio').change(function () {
                var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                var optionValue = jQuery(this).val();
                jQuery(this)
                    .closest('form')
                    .find('.single-option-selector')
                    .eq(optionIndex)
                    .val(optionValue)
                    .trigger('change');
            });

            function scrollToxx() {
                if ($(window).width() > 767) {
                    $('html, body').animate({scrollTop: $('.product-tab.e-tabs').offset().top}, 'slow');
                    $('.tab-content, .product-tab .tab-link').removeClass('current');
                    $('#tab-3, .product-tab .tab-link:nth-child(3)').addClass('current');
                    return false;
                } else {
                    $('html, body').animate({scrollTop: $('.product-tab.e-tabs #tab-3').offset().top}, 'slow');
                    $('.product-tab.e-tabs #tab-3').addClass('active');
                }
            }

            function scrollToxxs() {
                $('html, body').animate({scrollTop: $('.product-tab.e-tabs').offset().top}, 'slow');
                return false;
            }

            $('.btn--view-more .less-text').click(function () {
                scrollToxxs();
            })
            if ($(window).width() < 767) {
                $('.evo-tab-product-mobile .tab-content .evo-product-tabs-header').on('click', function (e) {
                    e.preventDefault();
                    var $this = $(this);
                    $this.parents('.evo-tab-product-mobile .tab-content').find('.rte').stop().slideToggle();
                    $(this).parent().toggleClass('active')
                    return false;
                });
            }
            $('.evo-product-summary .evo-product-tabs-header').on('click', function (e) {
                e.preventDefault();
                var $this = $(this);
                $this.parents('.evo-product-summary').find('.rte-summary').stop().slideToggle();
                $(this).parent().toggleClass('active')
                return false;
            });
        </script>
    </div>
@endsection

