@extends('site.layout.site')

@section('title', isset($information['meta_title']) ? $information['meta_title'] : '')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')
    <div class="evo-themes">
        <section class="bread-crumb margin-bottom-10"style="background-image:url('/site/image/image.jpg'); background-size: cover;
                background-repeat: no-repeat;
                background-position: center;">
            <div class="container">
                <ul class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
                    <li class="home" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="" title="Trang chủ">
                            <span itemprop="name">Trang chủ</span>
                            <meta itemprop="position" content="1" />
                        </a>
                    </li>

                    <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                        <strong itemprop="name">Liên hệ</strong>
                        <meta itemprop="position" content="2" />
                    </li>

                </ul>
            </div>
        </section>
        <div class="contact margin-bottom-20 page-contacts">
            <h1 class="title-head text-center d-none">Liên hệ</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="contact-box">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="-61 0 443 443.288" width="20px"><path d="m96.144531 136v88h32v-56c0-4.417969 3.582031-8 8-8h48c4.417969 0 8 3.582031 8 8v56h32v-88c0-4.417969 3.582031-8 8-8h8.480469l-80.480469-61.902344-80.480469 61.902344h8.480469c4.417969 0 8 3.582031 8 8zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"><path d="m144.144531 176h32v48h-32zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"><path d="m160.144531 443.289062c30.101563-37.585937 160-204.328124 160-283.289062 0-88.367188-71.636719-160-160-160-88.367187 0-160 71.632812-160 160 0 78.976562 129.894531 245.710938 160 283.289062zm-108.878906-313.601562 104-80c2.875-2.214844 6.882813-2.214844 9.757813 0l104 80c2.691406 2.097656 3.757812 5.667969 2.65625 8.894531-1.097657 3.226563-4.125 5.402344-7.535157 5.417969h-24v88c0 4.417969-3.582031 8-8 8h-144c-4.417969 0-8-3.582031-8-8v-88h-24c-3.421875 0-6.464843-2.179688-7.570312-5.421875-1.101563-3.242187-.019531-6.824219 2.691406-8.914063zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></svg>
                            </div>
                            <div class="content">
                                <h4>Địa chỉ</h4>

                                <p>{{ isset($information['dia-chi']) ?  $information['dia-chi'] : '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="contact-box">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480.56 480.56" style="enable-background:new 0 0 480.56 480.56;" xml:space="preserve" width="20px" height="20px"><path d="M365.354,317.9c-15.7-15.5-35.3-15.5-50.9,0c-11.9,11.8-23.8,23.6-35.5,35.6c-3.2,3.3-5.9,4-9.8,1.8    c-7.7-4.2-15.9-7.6-23.3-12.2c-34.5-21.7-63.4-49.6-89-81c-12.7-15.6-24-32.3-31.9-51.1c-1.6-3.8-1.3-6.3,1.8-9.4    c11.9-11.5,23.5-23.3,35.2-35.1c16.3-16.4,16.3-35.6-0.1-52.1c-9.3-9.4-18.6-18.6-27.9-28c-9.6-9.6-19.1-19.3-28.8-28.8    c-15.7-15.3-35.3-15.3-50.9,0.1c-12,11.8-23.5,23.9-35.7,35.5c-11.3,10.7-17,23.8-18.2,39.1c-1.9,24.9,4.2,48.4,12.8,71.3    c17.6,47.4,44.4,89.5,76.9,128.1c43.9,52.2,96.3,93.5,157.6,123.3c27.6,13.4,56.2,23.7,87.3,25.4c21.4,1.2,40-4.2,54.9-20.9    c10.2-11.4,21.7-21.8,32.5-32.7c16-16.2,16.1-35.8,0.2-51.8C403.554,355.9,384.454,336.9,365.354,317.9z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074">
                                        <path d="M346.254,238.2l36.9-6.3c-5.8-33.9-21.8-64.6-46.1-89c-25.7-25.7-58.2-41.9-94-46.9l-5.2,37.1    c27.7,3.9,52.9,16.4,72.8,36.3C329.454,188.2,341.754,212,346.254,238.2z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074">
                                            <path d="M403.954,77.8c-42.6-42.6-96.5-69.5-156-77.8l-5.2,37.1c51.4,7.2,98,30.5,134.8,67.2c34.9,34.9,57.8,79,66.1,127.5    l36.9-6.3C470.854,169.3,444.354,118.3,403.954,77.8z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#22B074"></svg>
                            </div>
                            <div class="content">
                                <h4>Điện thoại</h4>

                                <a href="tel:{{ isset($information['hotline']) ?  $information['hotline'] : '' }}"
                                   title="{{ isset($information['hotline']) ?  $information['hotline'] : '' }}">
                                    {{ isset($information['hotline']) ?  $information['hotline'] : '' }}
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="contact-box">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 437.676 437.676" style="enable-background:new 0 0 437.676 437.676;" xml:space="preserve" width="20px" height="20px" class="">
							<polygon points="218.841,256.659 19.744,81.824 417.931,81.824  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074">
                                <polygon points="139.529,218.781 0,341.311 0,96.252  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074">
                                    <polygon points="157.615,234.665 218.841,288.427 280.055,234.665 418.057,355.852 19.619,355.852  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074">
                                        <polygon points="298.141,218.787 437.676,96.252 437.676,341.311  " data-original="#010002" class="active-path" data-old_color="#010002" fill="#22B074">
						</svg>
                            </div>
                            <div class="content">
                                <h4>Email</h4>

                                <a href="mailto:{{ isset($information['email']) ?  $information['email'] : '' }}"
                                   title="{{ isset($information['email']) ?  $information['email'] : '' }}">
                                    {{ isset($information['email']) ?  $information['email'] : '' }}
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row contact-padding">
                    <div class="col-lg-4 col-md-12">
                        <div class="leave-your-message">
                            {!!  isset($information['noi-dung-trang-lien-he']) ?  $information['noi-dung-trang-lien-he'] : ''  !!}
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12" id="lazy-container">
                        <div data-app='bizweb_form' data-form-id='5476'>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12 form-content">

                                        <link href="/Content/styles/css/pages/p-frontend.css" rel="stylesheet">
                                        <link href="/assets/custom.5476.css" rel="stylesheet" type="text/css">
                                        <style>
                                            .form-content {
                                                color: #000000;
                                                border-color: #dedede;
                                                background-color: #ffffff;
                                            }
                                            #btnSubmit{
                                                color: #ffffff;
                                                background-color: #4765ff;
                                                border-color: #4765ff;
                                            }
                                        </style>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group text-center">
                                                    <h3>Liên hệ với chúng tôi </h3>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <form action="{{ route('sub_contact', ['languageCurrent' => $languageCurrent]) }}"
                                                      class="form-horizontal" enctype="multipart/form-data"
                                                      method="post" >
                                                    {!! csrf_field() !!}
                                                    <div class="col-sm-12" id="form-data-23733">
                                                        <div class="form-group">
                                                            <label>Họ và Tên</label>
                                                            <input type="text" class="form-control" name="name" style="width: 100%" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" id="form-data-23736">
                                                        <div class="form-group">
                                                            <label>Số điện thoại</label>
                                                            <input type="number" class="form-control" name="phone" style="width: 100%" required />
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" id="form-data-23734">
                                                        <div class="form-group">
                                                            <label>Dịch vụ</label>
                                                            <select class="form-control" id="Data_2__Result" name="service" style="width: 100%">
                                                                <option value="Tuyển lao động">Tuyển lao động</option>
                                                                <option value="Tìm việc làm">Tìm việc làm</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" id="form-data-23735">
                                                        <div class="form-group">
                                                            <label>Nội dung</label>
                                                            <textarea type="text"  class="form-control" name="message" rows="5" style="height: 100px;width: 100%"></textarea>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12" id="form-btn">
                                                        <div class="form-group text-center">
                                                            <input id="btnReset" type="reset" value="Nhập lại" class="btn btn-default">
                                                            <button id="btnSubmit" type="submit" class="btn btn-primary">Gửi</button>
                                                        </div>
                                                    </div>
                                                </form>    </div>
                                        </div>
                                        <script>
                                            $(function () {
                                                $('#btnReset').click(function () {
                                                    resetValidate();
                                                });

                                            });
                                            function resetValidate() {
                                                var $validator = $("form").validate();
                                                $validator.resetForm();
                                            }
                                        </script>


                                        <div class="resize-sensor" style="position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 100000px; height: 100000px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 evo-maps">
                        {!!  isset($information['nhung-map']) ?  $information['nhung-map'] : ''  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
