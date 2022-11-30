@extends('site.layout.site')

@section('title', isset($information['meta_title']) ? $information['meta_title'] : '')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')
    <div class="evo-themes">
        <h1 class="d-none">{{ isset($information['ten-cong-ty']) ? $information['ten-cong-ty'] : ''}}</h1>
        <section class="awe-section-1">
            <div class="home-slider " style="margin:0 auto">
                @foreach(\App\Entity\SubPost::showSubPost('slide', 4) as $id => $item)
                    <div class="item">
                        <a href="{{ isset($item['link']) ? $item['link'] : '' }}" class="clearfix"
                           title="{{ isset($item['title']) ? $item['title'] : '' }}">
                            <picture>
                                <img src=" {{ isset($item['image']) ? $item['image'] : '' }}"
                                     alt=" {{ isset($item['title']) ? $item['title'] : '' }}"
                                     class="lazy img-responsive center-block"/>
                            </picture>
                        </a>
                    </div>
                @endforeach


            </div>
            <h4 style="text-align:center; margin-top:20px;">
                Vui lòng để lại thông tin đăng ký, chúng tôi sẽ liên hệ với bạn
            </h4>
            <div id="getfly-optin-form">
                <form method="post" action="" onSubmit="return contact(this);">
                    {!! csrf_field() !!}
                    <div id="getfly-form" class="getfly-form">
                        <div class="getfly-row">
                            <label class="getfly-label getfly-label-c">Mã KH + Tên KH + Công việc<span
                                        class="getfly-span getfly-span-c">*</span></label>
                            <input type="text"
                                 class="getfly-input getfly-margin"
                                 name="name"
                                 placeholder="Họ và tên *" required>
                        </div>
                        <div class="getfly-row">
                            <label class="getfly-label getfly-label-c">Điện thoại<span
                                        class="getfly-span getfly-span-c">*</span></label>
                            <input type="text"
                                 name="phone"
                                 id="phone"
                                 class="getfly-input phone getfly-margin"
                                 placeholder="SĐT: 0123456789 *" required>
                        </div>
                        <div class="getfly-row">
                            <label class="getfly-label getfly-label-c">Địa chỉ<span
                                        class="getfly-span getfly-span-c">*</span></label>
                            <input type="text"
                                 class="getfly-input getfly-margin"
                                 name="address"
                                 placeholder="Địa chỉ *" required>
                        </div>
                        <input type="hidden" name="type" value="ajax" >
                        <div class=" getfly-btn">
                            <button class="getfly-button getfly-button-bg getfly-margin">
                                Đăng ký
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </section>

        <style>
            .getfly-form {
                max-width: 450px!important;
                margin: 0 auto;
                padding: 25px!important;
                font-size: 12px;
                line-height: 30px!important;
                color: #777;
                border: 1px solid #eae6e6;
                font-family: sans-serif;
                background: #fff !important;
            }
            .getfly-margin {
                margin: 5px;
            }
            .getfly-button-bg {
                 background: #9C00FF;
            }
            .getfly-button {
                 cursor: pointer;
                 border: none;
                 background: #f58632;
                 color: #FFF;
                 padding: 10px 20px;
                 font-size: 18px;
                 outline: 0;
                 font-family: sans-serif;
            }
        </style>

        <section class="awe-section-2">
            <div class="section_introduce">
                <div class="container">
                    <div class="row">
                        @foreach(\App\Entity\SubPost::showSubPost('blog-gioi-thieu', 1) as $id => $item)
                            <div class="col-lg-12 text-center ">
                                <h3>
                                    {{ isset($item['title']) ? $item['title'] : '' }}
                                </h3>
                                <p></p>
                                <img class="lazy img-responsive mx-auto d-block"
                                     src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                     data-src="{{ isset($item['image']) ? $item['image'] : '' }}"/>
                                <a class="readmore"
                                   href="{{ isset($item['link']) ? $item['link'] : '' }}"
                                   title="Đọc tiếp"> Xem thêm</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <style>
                .readmore {
                    display: inline-block;
                    margin-top: 15px;
                    text-transform: uppercase;
                    font-weight: 700;
                    font-size: 13px;
                    color: #5e2e86;
                }

            </style>
        </section>


        <section class="awe-section-3">
            <div class="section_why">
                <div class="container">
                    <div class="row">
                        @foreach(\App\Entity\SubPost::showSubPost('tai-sao-chon-chung-toi', 1) as $id => $item)
                            <div class="col-lg-6 order-lg-last about-content">
                                <span>{{ isset($item['description']) ? $item['description'] : '' }}</span>
                                <h3>{{ isset($item['title']) ? $item['title'] : '' }}</h3>
                                <div>
                                    {!! isset($item['content']) ? $item['content'] : '' !!}
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <img class="lazy img-responsive mx-auto d-block"
                                     src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                     data-src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                     alt="{{ isset($item['description']) ? $item['description'] : '' }}"/>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <section class="awe-section-4">
            <div class="section_service lazy" data-src="{{ asset('site/100/302/581/themes/798703/assets/service_bg.png') }}">
                <div class="container">
                    <div class="section_service_title text-center">
                        <span></span>
                        <h3>{{ isset($information['title-block-dich-vu']) ? $information['title-block-dich-vu'] : '' }}</h3>
                        <p></p>
                    </div>
                    <div class="row">
                        @foreach(\App\Entity\Post::newPost('dich-vu', 6) as $id => $item)
                        <div class="col-lg-4 col-md-6 col-6 p-xs-min">
                            <div class="services-box">
                                <div class="icon">
                                    <img class="lazy"
                                         src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                         data-src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                         alt="{{ isset($item['title']) ? $item['title'] : '' }}"/>
                                </div>
                                <a href="{{ route('post', ['cate_slug' => 'dich-vu', 'post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}" title="{{ isset($item['title']) ? $item['title'] : '' }}">
                                    <h3>{{ isset($item['title']) ? $item['title'] : '' }}</h3>
                                </a>
                                <p class="d-none d-lg-block d-xl-block d-md-block">
                                    {{ \App\Ultility\Ultility::textLimit($item['description'], 20) }}
                                </p>

                                <a class="d-none d-lg-block d-xl-block d-md-block"
                                   href="{{ route('post', ['cate_slug' => 'dich-vu', 'post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                   title="Xem chi tiết">Xem chi tiết</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <section class="awe-section-5">
            <div class="section_project">
                <div class="container">
                    <div class="section_service_title text-center">
                        <span>Thông tin nhân sự</span>
                        <h3>
                            <a href="/vn/menus/dich-vu" title="DANH SÁCH NGƯỜI GIÚP VIỆC">
                                DANH SÁCH NGƯỜI GIÚP VIỆC
                            </a>
                        </h3>
                        <p></p>
                    </div>
                    <div class="row">
                        @foreach(\App\Entity\Product::showProduct('dich-vu', 8) as $id => $item)
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="evo-product-block-item">
                                <div class="image">
                                    <a class="primary_img"
                                       href="{{ route('product', ['post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                       title="{{ isset($item['title']) ? $item['title'] : '' }}">
                                        <img class="img-responsive center-block lazy loaded"
                                             src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                             data-src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                             alt="{{ isset($item['title']) ? $item['title'] : '' }}"/>
                                    </a>

                                </div>
                                <div class="product-meta">
                                    <h3><a href="{{ route('product', ['post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                           title="{{ isset($item['title']) ? $item['title'] : '' }}">{{ isset($item['title']) ? $item['title'] : '' }}</a></h3>
                                    <div class="content_price">
                                        <strong>Liên hệ</strong>
                                    </div>
                                    <form action="cart/add" method="post" enctype="multipart/form-data" class="hidden-md variants form-nut-grid form-ajaxtocart" data-id="product-actions-19880398">
                                    <a class="button ajax_addtocart"
                                       href="{{ route('product', ['post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                       title="Chi tiết">Chi tiết</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <section class="awe-section-6">
            <div class="section_customer">
                <div class="container">
                    <div class="row">
                        @foreach(\App\Entity\SubPost::showSubPost('blog-chi-tiet', 4) as $id => $item)
                        <div class="col-lg-3 col-md-3 col-6">
                            <div class="customer-item">
                                <img class="lazy"
                                     src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                     data-src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                     alt="{{ isset($item['title']) ? $item['title'] : '' }}"/>
                                <span>{{ isset($item['description']) ? $item['description'] : '' }}</span>
                                <p>{{ isset($item['title']) ? $item['title'] : '' }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <section class="awe-section-7">
            <div class="section_partner">
                <div class="container">
                    <div class="evo-brands">
                        @foreach(\App\Entity\SubPost::showSubPost('doi-tac', 4) as $id => $item)
                        <a class="brands-item" href="#" title="{{ isset($item['title']) ? $item['title'] : '' }}">
                            <img class="lazy img-responsive mx-auto d-block"
                                 src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                 data-src="{{ isset($item['image']) ? $item['image'] : '' }}" alt="{{ isset($item['title']) ? $item['title'] : '' }}"/>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <section class="awe-section-8">


            <div class="section_blogs">
                <div class="container">
                    <div class="section_service_title text-center">
                        <span>Tin tức</span>
                        <h3><a href="tin-tuc" title="Kiến thức chọn người giúp việc">Kiến thức chọn người giúp việc</a>
                        </h3>
                        <p></p>
                    </div>
                    <div class="row">
                        @foreach(\App\Entity\Post::newPost('tin-tuc', 3) as $id => $item)
                        <div class="col-lg-4 col-md-4">
                            <div class="evo-item-blogs">
                                <div class="evo-article-image">
                                    <a href="{{ route('post', ['cate_slug' => 'tin-tuc', 'post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                       title="{{ isset($item['title']) ? $item['title'] : '' }}">

                                        <img src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                             alt="{{ isset($item['title']) ? $item['title'] : '' }}"
                                             class="lazy img-responsive mx-auto d-block loaded"/>

                                    </a>
                                </div>
                                <h3 class="line-clamp">
                                    <a href="{{ route('post', ['cate_slug' => 'tin-tuc', 'post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                       title="{{ isset($item['title']) ? $item['title'] : '' }}">
                                        {{ isset($item['title']) ? $item['title'] : '' }}
                                    </a>
                                </h3>
                                <p>
                                   {{ \App\Ultility\Ultility::textLimit($item['description'], 20) }}
                                </p>
                                <a class="readmore" href="{{ route('post', ['cate_slug' => 'tin-tuc', 'post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                   title="Đọc tiếp">
                                    Đọc tiếp
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


    </div>


@endsection



