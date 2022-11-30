@extends('site.layout.site')

@section('title', isset($information['meta_title']) ? $information['meta_title'] : '')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')

    <div class="evo-themes">
        <section class="bread-crumb margin-bottom-10"
                 style="background-image:url({{ isset($category->image) ? $category->image : '/site/image/image.jpg' }}); background-size: cover;
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
                        <strong itemprop="name">Đăng nhập tài khoản</strong>
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
                            <div class="text-center margin-bottom-30">
                                <h1 class="title-head">Đăng nhập tài khoản</h1>
                            </div>
                            <div class="social-login text-center margin-bottom-10">
{{--                                <script>function loginFacebook() {--}}
{{--                                        var a = {--}}
{{--                                                client_id: "947410958642584",--}}
{{--                                                redirect_uri: "https://store.mysapo.net/account/facebook_account_callback",--}}
{{--                                                state: JSON.stringify({redirect_url: window.location.href}),--}}
{{--                                                scope: "email", response_type: "code"--}}
{{--                                            },--}}
{{--                                            b = "https://www.facebook.com/v3.2/dialog/oauth" + encodeURIParams(a, !0);--}}
{{--                                        window.location.href = b--}}
{{--                                    }--}}

{{--                                    function loginGoogle() {--}}
{{--                                        var a = {--}}
{{--                                            client_id: "997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",--}}
{{--                                            redirect_uri: "https://store.mysapo.net/account/google_account_callback",--}}
{{--                                            scope: "email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",--}}
{{--                                            access_type: "online",--}}
{{--                                            state: JSON.stringify({redirect_url: window.location.href}),--}}
{{--                                            response_type: "code"--}}
{{--                                        }, b = "https://accounts.google.com/o/oauth2/v2/auth" + encodeURIParams(a, !0);--}}
{{--                                        window.location.href = b--}}
{{--                                    }--}}

{{--                                    function encodeURIParams(a, b) {--}}
{{--                                        var c = [];--}}
{{--                                        for (var d in a) if (a.hasOwnProperty(d)) {--}}
{{--                                            var e = a[d];--}}
{{--                                            null != e && c.push(encodeURIComponent(d) + "=" + encodeURIComponent(e))--}}
{{--                                        }--}}
{{--                                        return 0 == c.length ? "" : (b ? "?" : "") + c.join("&")--}}
{{--                                    }</script>--}}

{{--                                <a href="javascript:void(0)" class="social-login--facebook"--}}
{{--                                   onclick="loginFacebook()">--}}
{{--                                    <img width="129px" height="37px"--}}
{{--                                          alt="facebook-login-button"--}}
{{--                                          src="{{ asset('upload/fb-btn.svg') }}">--}}
{{--                                    </a>--}}
{{--                                <a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img--}}
{{--                                            width="129px" height="37px" alt="google-login-button"--}}
{{--                                            src="{{ asset('upload/gp-btn.svg') }}">--}}
{{--                                </a>--}}
                            </div>
                            <div class="line-break">
                                <span>hoặc</span>
                            </div>
                            <form accept-charset="utf-8" action="/{{ $languageCurrent }}/dang-nhap" id="customer_login" method="post">
                                <input name="FormType" type="hidden" value="customer_login"/>
                                <input name="utf8" type="hidden" value="true"/>
                                {{ csrf_field() }}
                                <div class="form-signup">

                                </div>
                                <div class="form-signup clearfix">
                                    <fieldset class="form-group margin-bottom-10">
                                        <label>Email<span class="required">*</span></label>
                                        <input autocomplete="off" placeholder="Nhập Địa chỉ Email" type="email"
                                               class="form-control form-control-lg" value="" name="email"
                                               id="customer_email" required data-validation="email"
                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                               data-validation-error-msg="Email sai định dạng"/>
                                    </fieldset>
                                    <fieldset class="form-group margin-bottom-0">
                                        <label>Mật khẩu<span class="required">*</span></label>
                                        <input autocomplete="off" placeholder="Nhập Mật khẩu" type="password"
                                               class="form-control form-control-lg" value="" name="password"
                                               id="customer_password" data-validation-error-msg="Không được để trống"
                                               data-validation="required"/>
                                    </fieldset>
                                    <div class="clearfix"></div>

{{--                                    <p class="text-left recover">--}}
{{--                                        <a href="#recover" class="btn-link-style" onclick="showRecoverPasswordForm();"--}}
{{--                                           title="Quên mật khẩu?">Quên mật khẩu?</a>--}}
{{--                                    </p>--}}
                                    <div class="pull-xs-left text-center" style="margin-top: 15px;">
                                        <button class="btn btn-style btn-blues" type="submit" value="Đăng nhập">Đăng
                                            nhập
                                        </button>
                                    </div>
                                    <p class="login--notes">Công ty giúp việc gia đình, giúp việc trông trẻ, vệ sinh
                                        công nghiệp cam kết bảo mật và sẽ không bao giờ đăng <br>hay chia sẻ thông tin
                                        mà chưa có được sự đồng ý của bạn.</p>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                            <div class="text-login text-center">
                                <p>
                                    Bạn chưa có tài khoản. Đăng ký <a href="{{ route('register', ['language' => $languageCurrent]) }}" title="Đăng ký">tại
                                        đây.</a>
                                </p>
                            </div>
                        </div>
                        <div id="recover-password" class="form-signup" style="display:none;">
                            <div class="text-center">
                                <h2 class="title-head"><span>Đặt lại mật khẩu</span></h2>
                            </div>
                            <div class="fix-sblock text-center">
                                Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.
                            </div>
                            <form accept-charset="utf-8" action="account/recover" id="recover_customer_password"
                                  method="post">
                                <input name="FormType" type="hidden" value="recover_customer_password"/>
                                <input name="utf8" type="hidden" value="true"/>
                                <div class="form-signup aaaaaaaa">

                                </div>

                                <div class="form-signup clearfix">
                                    <fieldset class="form-group">
                                        <label>Email<span class="required">*</span></label>
                                        <input type="email" class="form-control form-control-lg" value="" name="Email"
                                               id="recover-email" placeholder="Nhập địa chỉ Email"
                                               data-validation="email"
                                               pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
                                               data-validation-error-msg="Email sai định dạng" required/>
                                    </fieldset>
                                </div>
                                <div class="action_bottom text-center">
                                    <button class="btn btn-style btn-blues" style="margin-top: 15px;" type="submit"
                                            value="Lấy lại mật khẩu">Lấy lại mật khẩu
                                    </button>
                                </div>
                                <div class="text-login text-center">
                                    <p>Quay lại <a href="javascript:;" class="btn-link-style btn-register"
                                                   onclick="hideRecoverPasswordForm();" title="Quay lại">tại đây.</a>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function showRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'block';
                document.getElementById('login').style.display = 'none';
            }

            function hideRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'none';
                document.getElementById('login').style.display = 'block';
            }


        </script>
    </div>

@endsection