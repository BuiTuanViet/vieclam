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
                <div id="getfly-form" class="getfly-form">
                    <div class="getfly-row">
                        <label class="getfly-label getfly-label-c">Mã KH + Tên KH + Công việc<span
                                    class="getfly-span getfly-span-c">*</span></label>
                        <input type="text"
                                                                                             class="getfly-input getfly-margin"
                                                                                             name="account_name"
                                                                                             placeholder="Họ và tên *">
                    </div>
                    <div class="getfly-row">
                        <label class="getfly-label getfly-label-c">Điện thoại<span
                                    class="getfly-span getfly-span-c">*</span></label>
                        <input type="text"
                                                                                             name="account_phone"
                                                                                             id="account_phone"
                                                                                             class="getfly-input phone getfly-margin"
                                                                                             placeholder="SĐT: 0123456789 *">
                    </div>
                    <div class="getfly-row">
                        <label class="getfly-label getfly-label-c">Địa chỉ<span
                                    class="getfly-span getfly-span-c">*</span></label>
                        <input type="text"
                                                                                             class="getfly-input getfly-margin"
                                                                                             name="account_address"
                                                                                             placeholder="Địa chỉ *">
                    </div>
                    <div class=" getfly-btn">
                        <button class="getfly-button getfly-button-bg getfly-margin">Đăng ký</button>
                    </div>
                </div>
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
        </section>


        <section class="awe-section-4">
            <div class="section_service lazy" data-src="100/302/581/themes/798703/assets/service_bg.png?1668669091843">
                <div class="container">
                    <div class="section_service_title text-center">
                        <span></span>
                        <h3>Dịch vụ của GIÚP VIỆC HỒNG PHÚC</h3>
                        <p></p>
                    </div>
                    <div class="row">


                        <div class="col-lg-4 col-md-6 col-6 p-xs-min">
                            <div class="services-box">
                                <div class="icon">
                                    <img class="lazy"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                         data-src="100/302/581/themes/798703/assets/service_img_1.svg?1668669091843"
                                         alt="Giúp việc gia đình "/>
                                </div>
                                <a href="gv-gia-dinh" title="Giúp việc gia đình ">
                                    <h3>Giúp việc gia đình </h3>
                                </a>
                                <p class="d-none d-lg-block d-xl-block d-md-block">Trong những ngày đầu năm bận rộn,
                                    thuê
                                    giúp việc là giải pháp lý tưởng được rất nhiều gia đình hiện đại lựa chọn để cả nhà
                                    có
                                    thể thảnh thơi mà nhà cửa vẫn được tranh hoàng, sạch bóng tinh tươm.</p>
                                <a class="d-none d-lg-block d-xl-block d-md-block" href="gv-gia-dinh"
                                   title="Xem chi tiết">Xem
                                    chi tiết</a>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-6 p-xs-min">
                            <div class="services-box">
                                <div class="icon">
                                    <img class="lazy"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                         data-src="100/302/581/themes/798703/assets/service_img_2.svg?1668669091843"
                                         alt="Giúp việc chăm bé"/>
                                </div>
                                <a href="giup-viec-cham-em-be" title="Giúp việc chăm bé">
                                    <h3>Giúp việc chăm bé</h3>
                                </a>
                                <p class="d-none d-lg-block d-xl-block d-md-block">Trẻ em luôn cần sự yêu thương, chăm
                                    sóc .
                                    Bố mẹ đã dành cho các bé tình yêu thương nhưng đôi khi do quá bận rộn, họ không có
                                    nhiều
                                    thời gian chăm sóc cho bé. Thấu hiểu điều này, Vạn Phúc cung cấp dịch vụ giúp việc
                                    chăm
                                    bé, để các bé luôn được chăm sóc tốt nhất, để bố mẹ bé yên tâm đi làm.</p>
                                <a class="d-none d-lg-block d-xl-block d-md-block" href="giup-viec-cham-em-be"
                                   title="Xem chi tiết">Xem chi tiết</a>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-6 p-xs-min">
                            <div class="services-box">
                                <div class="icon">
                                    <img class="lazy"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                         data-src="100/302/581/themes/798703/assets/service_img_3.svg?1668669091843"
                                         alt="Giúp việc hành chính"/>
                                </div>
                                <a href="giup-viec-theo-gio-hanh-chinh" title="Giúp việc hành chính">
                                    <h3>Giúp việc hành chính</h3>
                                </a>
                                <p class="d-none d-lg-block d-xl-block d-md-block">Cuộc sống hiện đại khiến cho bạn
                                    không có
                                    nhiều thời gian để chăm sóc cho tổ ấm. Với những gia đình đang sống ở chung cư, nhà
                                    riêng vừa muốn có giúp việc vừa muốn tiết kiệm được chi phí thì dịch vụ giúp việc
                                    theo
                                    giờ của Hồng Phúc sẽ là sự lựa chọn hoàn hảo nhất.
                                </p>
                                <a class="d-none d-lg-block d-xl-block d-md-block" href="giup-viec-theo-gio-hanh-chinh"
                                   title="Xem chi tiết">Xem chi tiết</a>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-6 p-xs-min">
                            <div class="services-box">
                                <div class="icon">
                                    <img class="lazy"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                         data-src="100/302/581/themes/798703/assets/service_img_4.svg?1668669091843"
                                         alt="Giúp việc chăm người già"/>
                                </div>
                                <a href="giup-viec-cham-nguoi-gia" title="Giúp việc chăm người già">
                                    <h3>Giúp việc chăm người già</h3>
                                </a>
                                <p class="d-none d-lg-block d-xl-block d-md-block">Người già thường rất nhạy cảm, cần
                                    được
                                    được quan tâm và chăm sóc nhiều hơn. Nhưng làm sao để giữ trọn đạo Hiếu khi mà ngoài
                                    kia
                                    còn bao nhiêu bọn bề cuộc sống. Thấu hiểu được nỗi lòng của con cháu nên Hồng Phúc
                                    đã
                                    mang đến dịch vụ giúp việc chăm người già để có thể giúp bạn san sẻ được phần nào
                                    những
                                    khó khăn đấy.</p>
                                <a class="d-none d-lg-block d-xl-block d-md-block" href="giup-viec-cham-nguoi-gia"
                                   title="Xem chi tiết">Xem chi tiết</a>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-6 p-xs-min">
                            <div class="services-box">
                                <div class="icon">
                                    <img class="lazy"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                         data-src="100/302/581/themes/798703/assets/service_img_5.svg?1668669091843"
                                         alt="Giúp việc chăm người bệnh"/>
                                </div>
                                <a href="giup-viec-cham-nguoi-benh" title="Giúp việc chăm người bệnh">
                                    <h3>Giúp việc chăm người bệnh</h3>
                                </a>
                                <p class="d-none d-lg-block d-xl-block d-md-block">Cuộc sống hiện đại, mọi người đều lo
                                    làm
                                    việc mà không có thời gian chăm sóc người trong gia đình của mình không may bị bệnh.
                                    Đến
                                    với Trung tâm giúp việc Hồng Phúc chúng tôi các bạn sẽ được cung cấp Dịch vụ chăm
                                    sóc
                                    người bệnh tại bệnh viện và tại các gia đình đáp ứng mọi nhu cầu của bạn.</p>
                                <a class="d-none d-lg-block d-xl-block d-md-block" href="giup-viec-cham-nguoi-benh"
                                   title="Xem chi tiết">Xem chi tiết</a>
                            </div>
                        </div>


                        <div class="col-lg-4 col-md-6 col-6 p-xs-min">
                            <div class="services-box">
                                <div class="icon">
                                    <img class="lazy"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                         data-src="100/302/581/themes/798703/assets/service_img_6.svg?1668669091843"
                                         alt="Cung cấp lao động phổ thông"/>
                                </div>
                                <a href="giup-viec-lao-dong-pho-thong" title="Cung cấp lao động phổ thông">
                                    <h3>Cung cấp lao động phổ thông</h3>
                                </a>
                                <p class="d-none d-lg-block d-xl-block d-md-block"> Kinh tế phát triển nhu cầu sử dụng
                                    lao
                                    động phổ thông tăng cao. Do đó trên thị trường có không ít công ty hoạt động trong
                                    lĩnh
                                    vực này. Trung tâm giúp việc Hồng Phúc vẫn lấy được sự tin yêu lựa chọn của khách
                                    hàng.
                                    Chúng tôi luôn phấn đấu để trở thành một công ty hàng đầu trong lĩnh vực cung cấp
                                    giúp
                                    việc lao động phổ thông.</p>
                                <a class="d-none d-lg-block d-xl-block d-md-block" href="giup-viec-lao-dong-pho-thong"
                                   title="Xem chi tiết">Xem chi tiết</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>


        <section class="awe-section-5">
            <div class="section_project">
                <div class="container">
                    <div class="section_service_title text-center">
                        <span>Thông tin nhân sự</span>
                        <h3><a href="nguoi-giup-viec" title="DANH SÁCH NGƯỜI GIÚP VIỆC">DANH SÁCH NGƯỜI GIÚP VIỆC</a>
                        </h3>
                        <p></p>
                    </div>
                    <div class="row">


                        <div class="col-lg-3 col-md-3 col-6">

                            <div class="evo-product-block-item">
                                <div class="image">
                                    <a class="primary_img" href="nguyen-thi-oanh" title="Nguy&#7877;n Th&#7883; Oanh">
                                        <img class="img-responsive center-block lazy"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="thumb/large/100/302/581/products/0nv2.jpg?v=1606449152550"
                                             alt="Nguy&#7877;n Th&#7883; Oanh"/>
                                    </a>

                                </div>
                                <div class="product-meta">
                                    <h3><a href="nguyen-thi-oanh" title="Nguy&#7877;n Th&#7883; Oanh">Nguy&#7877;n Th&#7883;
                                            Oanh</a></h3>
                                    <div class="content_price">

                                        <strong>Liên hệ</strong>

                                    </div>
                                    <form action="cart/add" method="post" enctype="multipart/form-data"
                                          class="hidden-md variants form-nut-grid form-ajaxtocart"
                                          data-id="product-actions-19879015">

                                        <a class="button ajax_addtocart" href="nguyen-thi-oanh" title="Chi tiết">Chi
                                            tiết</a>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-6">

                            <div class="evo-product-block-item">
                                <div class="image">
                                    <a class="primary_img" href="tran-thi-minh" title="Vũ Th&#7883; B&#7897;">
                                        <img class="img-responsive center-block lazy"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="thumb/large/100/302/581/products/0nv3.jpg?v=1606304823547"
                                             alt="Vũ Th&#7883; B&#7897;"/>
                                    </a>

                                </div>
                                <div class="product-meta">
                                    <h3><a href="tran-thi-minh" title="Vũ Th&#7883; B&#7897;">Vũ Th&#7883; B&#7897;</a>
                                    </h3>
                                    <div class="content_price">

                                        <strong>Liên hệ</strong>

                                    </div>
                                    <form action="cart/add" method="post" enctype="multipart/form-data"
                                          class="hidden-md variants form-nut-grid form-ajaxtocart"
                                          data-id="product-actions-11732690">

                                        <a class="button ajax_addtocart" href="tran-thi-minh" title="Chi tiết">Chi
                                            tiết</a>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-6">

                            <div class="evo-product-block-item">
                                <div class="image">
                                    <a class="primary_img" href="chi-nguyen-thi-hang-1"
                                       title="Nguy&#7877;n Th&#7883; Hà">
                                        <img class="img-responsive center-block lazy"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="thumb/large/100/302/581/products/0nv4.jpg?v=1606304820357"
                                             alt="Nguy&#7877;n Th&#7883; Hà"/>
                                    </a>

                                </div>
                                <div class="product-meta">
                                    <h3><a href="chi-nguyen-thi-hang-1" title="Nguy&#7877;n Th&#7883; Hà">Nguy&#7877;n
                                            Th&#7883;
                                            Hà</a></h3>
                                    <div class="content_price">

                                        <strong>Liên hệ</strong>

                                    </div>
                                    <form action="cart/add" method="post" enctype="multipart/form-data"
                                          class="hidden-md variants form-nut-grid form-ajaxtocart"
                                          data-id="product-actions-11477743">

                                        <a class="button ajax_addtocart" href="chi-nguyen-thi-hang-1" title="Chi tiết">Chi
                                            tiết</a>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-6">

                            <div class="evo-product-block-item">
                                <div class="image">
                                    <a class="primary_img" href="chi-nguyen-thi-hang" title="Hoàng Th&#7883; Hóa">
                                        <img class="img-responsive center-block lazy"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="thumb/large/100/302/581/products/0nv7.jpg?v=1606304847823"
                                             alt="Hoàng Th&#7883; Hóa"/>
                                    </a>

                                </div>
                                <div class="product-meta">
                                    <h3><a href="chi-nguyen-thi-hang" title="Hoàng Th&#7883; Hóa">Hoàng Th&#7883;
                                            Hóa</a>
                                    </h3>
                                    <div class="content_price">

                                        <strong>Liên hệ</strong>

                                    </div>
                                    <form action="cart/add" method="post" enctype="multipart/form-data"
                                          class="hidden-md variants form-nut-grid form-ajaxtocart"
                                          data-id="product-actions-11334068">

                                        <a class="button ajax_addtocart" href="chi-nguyen-thi-hang" title="Chi tiết">Chi
                                            tiết</a>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-6">

                            <div class="evo-product-block-item">
                                <div class="image">
                                    <a class="primary_img" href="chi-phung-thi-huyen" title="Đinh Th&#7883; Dinh">
                                        <img class="img-responsive center-block lazy"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="thumb/large/100/302/581/products/0nv8.jpg?v=1606304875400"
                                             alt="Đinh Th&#7883; Dinh"/>
                                    </a>

                                </div>
                                <div class="product-meta">
                                    <h3><a href="chi-phung-thi-huyen" title="Đinh Th&#7883; Dinh">Đinh Th&#7883;
                                            Dinh</a>
                                    </h3>
                                    <div class="content_price">

                                        <strong>Liên hệ</strong>

                                    </div>
                                    <form action="cart/add" method="post" enctype="multipart/form-data"
                                          class="hidden-md variants form-nut-grid form-ajaxtocart"
                                          data-id="product-actions-11334066">

                                        <a class="button ajax_addtocart" href="chi-phung-thi-huyen" title="Chi tiết">Chi
                                            tiết</a>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-6">

                            <div class="evo-product-block-item">
                                <div class="image">
                                    <a class="primary_img" href="tran-duc-thuan"
                                       title="Tr&#7847;n Đ&#7913;c Thu&#7853;n">
                                        <img class="img-responsive center-block lazy"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="thumb/large/100/302/581/products/0nv9.jpg?v=1606304886777"
                                             alt="Tr&#7847;n Đ&#7913;c Thu&#7853;n"/>
                                    </a>

                                </div>
                                <div class="product-meta">
                                    <h3><a href="tran-duc-thuan" title="Tr&#7847;n Đ&#7913;c Thu&#7853;n">Tr&#7847;n Đ&#7913;c
                                            Thu&#7853;n</a></h3>
                                    <div class="content_price">

                                        <strong>Liên hệ</strong>

                                    </div>
                                    <form action="cart/add" method="post" enctype="multipart/form-data"
                                          class="hidden-md variants form-nut-grid form-ajaxtocart"
                                          data-id="product-actions-11334065">

                                        <a class="button ajax_addtocart" href="tran-duc-thuan" title="Chi tiết">Chi
                                            tiết</a>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-6">

                            <div class="evo-product-block-item">
                                <div class="image">
                                    <a class="primary_img" href="thiet-ke-do-hoa-adobe-photoshop"
                                       title="Tôn Th&#7883; Thanh Hà">
                                        <img class="img-responsive center-block lazy"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="thumb/large/100/302/581/products/0nv10.jpg?v=1606304894623"
                                             alt="Tôn Th&#7883; Thanh Hà"/>
                                    </a>

                                </div>
                                <div class="product-meta">
                                    <h3><a href="thiet-ke-do-hoa-adobe-photoshop" title="Tôn Th&#7883; Thanh Hà">Tôn Th&#7883;
                                            Thanh Hà</a></h3>
                                    <div class="content_price">

                                        <strong>Liên hệ</strong>

                                    </div>
                                    <form action="cart/add" method="post" enctype="multipart/form-data"
                                          class="hidden-md variants form-nut-grid form-ajaxtocart"
                                          data-id="product-actions-10191184">

                                        <a class="button ajax_addtocart" href="thiet-ke-do-hoa-adobe-photoshop"
                                           title="Chi tiết">Chi tiết</a>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-6">

                            <div class="evo-product-block-item">
                                <div class="image">
                                    <a class="primary_img" href="le-thi-lan-anh" title="Lê Th&#7883; Lan Anh">
                                        <img class="img-responsive center-block lazy"
                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
                                             data-src="thumb/large/100/302/581/products/0nv4-1f06db1e-228a-4917-8411-84646d1db904.jpg?v=1606450400160"
                                             alt="Lê Th&#7883; Lan Anh"/>
                                    </a>

                                </div>
                                <div class="product-meta">
                                    <h3><a href="le-thi-lan-anh" title="Lê Th&#7883; Lan Anh">Lê Th&#7883; Lan Anh</a>
                                    </h3>
                                    <div class="content_price">

                                        <strong>Liên hệ</strong>

                                    </div>
                                    <form action="cart/add" method="post" enctype="multipart/form-data"
                                          class="hidden-md variants form-nut-grid form-ajaxtocart"
                                          data-id="product-actions-19879232">

                                        <a class="button ajax_addtocart" href="le-thi-lan-anh" title="Chi tiết">Chi
                                            tiết</a>

                                    </form>
                                </div>
                            </div>
                        </div>


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


                        <div class="col-lg-4 col-md-4">
                            <div class="evo-item-blogs">
                                <div class="evo-article-image">
                                    <a href="thue-giup-viec-nha-gio-hanh-chinh-o-dau-uy-tin"
                                       title="Thuê giúp vi&#7879;c nhà gi&#7901; hành chính &#7903; đâu uy tín?">

                                        <img src="thumb/large/100/302/581/articles/thue-giup-viec-nha-gio-hanh-chinh-o-dau-uy-tin-2.jpg?v=1668653732177"
                                             alt="Thuê giúp vi&#7879;c nhà gi&#7901; hành chính &#7903; đâu uy tín?"
                                             class="lazy img-responsive mx-auto d-block"/>

                                    </a>
                                </div>
                                <h3 class="line-clamp"><a href="thue-giup-viec-nha-gio-hanh-chinh-o-dau-uy-tin"
                                                          title="Thuê giúp vi&#7879;c nhà gi&#7901; hành chính &#7903; đâu uy tín?">Thuê
                                        giúp vi&#7879;c nhà gi&#7901; hành chính &#7903; đâu uy tín?</a></h3>
                                <p> So với việc phải thuê người giúp việc ăn ở tại nhà thì giúp việc nhà giờ hành chính
                                    sẽ
                                    giúp bạn tiết kiệm c...</p>
                                <a class="readmore" href="thue-giup-viec-nha-gio-hanh-chinh-o-dau-uy-tin"
                                   title="Đọc tiếp">Đọc
                                    tiếp</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="evo-item-blogs">
                                <div class="evo-article-image">
                                    <a href="tai-sao-nen-chon-dich-vu-trong-tre-tai-nha-uy-tin-hong-phuc"
                                       title="T&#7841;i sao nên ch&#7885;n d&#7883;ch v&#7909; trông tr&#7867; t&#7841;i nhà uy tín H&#7891;ng Phúc?">

                                        <img src="thumb/large/100/302/581/articles/trong-tre-tai-nha.jpg?v=1668415436153"
                                             alt="T&#7841;i sao nên ch&#7885;n d&#7883;ch v&#7909; trông tr&#7867; t&#7841;i nhà uy tín H&#7891;ng Phúc?"
                                             class="lazy img-responsive mx-auto d-block"/>

                                    </a>
                                </div>
                                <h3 class="line-clamp"><a
                                            href="tai-sao-nen-chon-dich-vu-trong-tre-tai-nha-uy-tin-hong-phuc"
                                            title="T&#7841;i sao nên ch&#7885;n d&#7883;ch v&#7909; trông tr&#7867; t&#7841;i nhà uy tín H&#7891;ng Phúc?">T&#7841;i
                                        sao nên ch&#7885;n d&#7883;ch v&#7909; trông tr&#7867; t&#7841;i nhà uy tín H&#7891;ng
                                        Phúc?</a></h3>
                                <p> Hồng Phúc là đơn vị chuyên cung cấp dịch vụ giúp việc trông trẻ tại nhà uy tín , có
                                    trách nhiệm cao luôn đặt...</p>
                                <a class="readmore" href="tai-sao-nen-chon-dich-vu-trong-tre-tai-nha-uy-tin-hong-phuc"
                                   title="Đọc tiếp">Đọc tiếp</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="evo-item-blogs">
                                <div class="evo-article-image">
                                    <a href="loi-ich-khi-tim-viec-lam-pho-thong-chuyen-nghiep-tai-hong-phuc"
                                       title="L&#7907;i ích khi tìm vi&#7879;c làm ph&#7893; thông chuyên nghi&#7879;p t&#7841;i H&#7891;ng Phúc">

                                        <img src="thumb/large/100/302/581/articles/viec-lam-pho-thong-luong-cao.jpg?v=1668137698317"
                                             alt="L&#7907;i ích khi tìm vi&#7879;c làm ph&#7893; thông chuyên nghi&#7879;p t&#7841;i H&#7891;ng Phúc"
                                             class="lazy img-responsive mx-auto d-block"/>

                                    </a>
                                </div>
                                <h3 class="line-clamp"><a
                                            href="loi-ich-khi-tim-viec-lam-pho-thong-chuyen-nghiep-tai-hong-phuc"
                                            title="L&#7907;i ích khi tìm vi&#7879;c làm ph&#7893; thông chuyên nghi&#7879;p t&#7841;i H&#7891;ng Phúc">L&#7907;i
                                        ích khi tìm vi&#7879;c làm ph&#7893; thông chuyên nghi&#7879;p t&#7841;i H&#7891;ng
                                        Phúc</a></h3>
                                <p> Hiện nay, nhu cầu tuyển dụng của các doanh nghiệp, đơn vị đang rất lớn. Vậy nên nhu
                                    cầu
                                    của người lao động về ...</p>
                                <a class="readmore"
                                   href="loi-ich-khi-tim-viec-lam-pho-thong-chuyen-nghiep-tai-hong-phuc"
                                   title="Đọc tiếp">Đọc tiếp</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>


    </div>


@endsection



