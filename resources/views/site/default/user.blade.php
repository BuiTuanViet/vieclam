@extends('site.layout.site')

@section('title','Thông tin tài khoản')

@section('content')
    <div class="evo-themes">
        <section class="bread-crumb margin-bottom-10" style="background-image:url({{ isset($category->image) ? $category->image : '/site/image/image.jpg' }}); background-size: cover;
                background-repeat: no-repeat;
                background-position: center;">
            <div class="container">
                <ul class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <li class="home" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <a itemprop="item" href="/" title="Trang chủ">
                            <span itemprop="name">Trang chủ</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </li>

                    <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                        <strong itemprop="name">Trang khách hàng</strong>
                        <meta itemprop="position" content="2">
                    </li>

                </ul>
            </div>
        </section>
        <section class="signup account-page margin-bottom-20 margin-top-30">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-lg-12">
                        <div class="page-title">
                            <h1 class="title-head widget-title">Thông tin tài khoản</h1>
                        </div>
                        <div class="form-signup">
                            <p><i>Xin chào, {{ \Illuminate\Support\Facades\Auth::user()->name }}</i></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-3 order-lg-last order-md-first">
                        <div class="block block-account margin-bottom-20">
                            <div class="block-title"><h2 class="widget-title">Thông tin khách hàng</h2></div>
                            <div class="divider-full-1"></div>
                            <div class="block-content form-signup block-edit-padding">
                                <p><strong>Tài khoản:</strong> {{ \Illuminate\Support\Facades\Auth::user()->name }}</p>
                                <div class="margin-top-20">
                                <a href="{{ route('dang-xuat', ['language' => $languageCurrent]) }}"
                                       class="btn btn-blues btn-full"
                                       title="Sổ địa chỉ">Đăng xuất</a>
                                </div>
{{--                                <p><strong>Địa chỉ:</strong>--}}
{{--                                </p>--}}
{{--                                <div class="margin-top-20">--}}
{{--                                    <a href="/account/addresses" class="btn btn-blues btn-full"--}}
{{--                                       title="Sổ địa chỉ">Sổ địa chỉ (0)</a>--}}
{{--                                </div>--}}
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12 col-lg-9 order-lg-first order-md-last">
                        <div class="form-signup"><h2 class="widget-title">Đơn hàng gần nhất</h2></div>

                        <div class="my-account">
                            <div class="dashboard">
                                <div class="recent-orders collections-container">
                                    <div class="table-order table-responsive">
                                        <table class="table table-cart" id="my-orders-table">
                                            <thead class="thead-default">
                                            <tr>
                                                <th>#</th>
                                                <th>Ngày</th>
                                                <th>Chuyển đến</th>
                                                <th>Địa chỉ</th>
                                                <th>Giá trị</th>
                                                <th>TT Thanh toán</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td colspan="7"><p>Không có đơn hàng nào.</p></td></tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
