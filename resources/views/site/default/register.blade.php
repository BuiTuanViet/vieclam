@extends('site.layout.site')

@section('title', ($languageCurrent =='vn') ? 'Đăng ký' : 'Register')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')
    <div class="evo-themes">
        <section class="bread-crumb margin-bottom-10" style="background-image:url({{ isset($category->image) ? $category->image : '/site/image/image.jpg' }}); background-size: cover;
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
                        <strong itemprop="name">Đăng ký tài khoản</strong>
                        <meta itemprop="position" content="2"/>
                    </li>

                </ul>
            </div>
        </section>
        <div class="container margin-bottom-20 margin-top-30">
            <div class="row justify-content-md-center">
                <div class="col-md-7">
                    <div class="page-login account-box-shadow">
                        <div id="login">
                            <h1 class="title-head text-center margin-bottom-30">Đăng ký tài khoản</h1>
                            <div class="social-login text-center margin-bottom-10">
{{--                                <a href="javascript:void(0)" class="social-login--facebook"--}}
{{--                                   onclick="loginFacebook()">--}}
{{--                                    <img width="129px" height="37px"--}}
{{--                                         alt="facebook-login-button"--}}
{{--                                         src="{{ asset('upload/fb-btn.svg') }}">--}}
{{--                                </a>--}}
{{--                                <a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img--}}
{{--                                            width="129px" height="37px" alt="google-login-button"--}}
{{--                                            src="{{ asset('upload/gp-btn.svg') }}">--}}
{{--                                </a>--}}
                            </div>
                            <div class="line-break">
                                <span>hoặc</span>
                            </div>
                            <form accept-charset="utf-8" action="/{{ $languageCurrent }}/dang-ky" id="customer_register"
                                  method="post">
                                <input name="FormType" type="hidden" value="customer_register"/>
                                <input name="utf8" type="hidden" value="true"/>
                                {{ csrf_field() }}
                                <div class="form-signup">
                                </div>
                                <div class="form-signup clearfix">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <label>Họ & Tên<span class="required">*</span></label>
                                                <input placeholder="Nhập Họ & Tên" type="text"
                                                       class="form-control form-control-lg" value="" name="name"
                                                       id="lastName" required
                                                       data-validation-error-msg="Không được để trống"
                                                       data-validation="required">
                                            </fieldset>
                                        </div>

                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <label>Số điện thoại<span class="required">*</span></label>
                                                <input placeholder="Nhập Số điện thoại" type="tel"
                                                       class="number-sidebar form-control form-control-lg" value=""
                                                       name="phone" id="phone" required
                                                       data-validation-error-msg="Không được để trống"
                                                       data-validation="required">
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <label>Email<span class="required">*</span></label>
                                                <input placeholder="Nhập Địa chỉ Email" type="email"
                                                       class="form-control form-control-lg" data-validation="email"
                                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                                       data-validation-error-msg="Email sai định dạng" value=""
                                                       name="email" id="email" required=""/>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-12">
                                            <fieldset class="form-group">
                                                <label>Mật khẩu<span class="required">*</span></label>
                                                <input placeholder="Nhập Mật khẩu" type="password"
                                                       class="form-control form-control-lg" value="" name="password"
                                                       id="password" required
                                                       data-validation-error-msg="Không được để trống"
                                                       data-validation="required">
                                            </fieldset>
                                        </div>

                                        <div class="col-md-12 text-center" style="margin-top:15px;">
                                            <button type="submit" value="Đăng ký" class="btn btn-style btn-blues">Tạo
                                                tài khoản
                                            </button>
                                            <a href="{{ route('login-site', ['language' => $languageCurrent]) }}" title="Đăng nhập"
                                               class="btn btn-register btn-register-login">Đăng nhập</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
