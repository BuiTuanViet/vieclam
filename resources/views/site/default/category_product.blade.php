@extends('site.layout.site')

@section('title', $category->title)
@section('meta_description',  $category->description )
@section('keywords', '')

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
                        <strong itemprop="name">{{ $category->title }}</strong>
                        <meta itemprop="position" content="2"/>
                    </li>


                </ul>
            </div>
        </section>
        <div class="container padding-top-10">
            <div class="row">
                <aside class="sidebar left-content col-md-12 col-lg-3">
                    <aside class="aside-item collection-category d-none d-sm-none d-md-none d-lg-block">
                        <div class="aside-title">Danh mục</div>
                        <div class="aside-content">
                            <ul class="navbar-pills nav-category">
                                @foreach (\App\Entity\Menu::showWithLocation('menu-chinh') as $menu)
                                    @foreach (\App\Entity\MenuElement::showMenuPageArray($menu->slug) as $id => $menuElement)
                                        @if (!empty($menuElement['children']))
                                            <li class="nav-item active">
                                                <a href="{{ $menuElement['url'] }}" class="nav-link"
                                                   title="{{ $menuElement['title_show'] }}">
                                                    {{ $menuElement['title_show'] }}
                                                </a>
                                                <span class="Collapsible__Plus"></span>
                                                <ul class="dropdown-menu">
                                                    @foreach ($menuElement['children'] as $elementparent)
                                                        <li class="nav-item ">
                                                            <a class="nav-link" href="{{ $elementparent['url'] }}"
                                                               title="{{ $elementparent['title_show'] }}">
                                                                {{ $elementparent['title_show'] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li class="nav-item ">
                                                <a class="nav-link" href="{{ $menuElement['url'] }}"
                                                   title="{{ $menuElement['title_show'] }}">
                                                    {{ $menuElement['title_show'] }}
                                                </a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>

                        </div>
                    </aside>
                    <script src="100/302/581/themes/798703/assets/search_filter.js?1668669091843"
                            type="text/javascript"></script>

                    <div class="aside-filter clearfix">
                        <div class="heading d-sm-block d-lg-none">Lọc sản phẩm
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                 y="0px" viewBox="0 0 490.656 490.656"
                                 style="enable-background:new 0 0 490.656 490.656;" xml:space="preserve" width="25px"
                                 height="25px"><path
                                        d="M487.536,120.445c-4.16-4.16-10.923-4.16-15.083,0L245.339,347.581L18.203,120.467c-4.16-4.16-10.923-4.16-15.083,0    c-4.16,4.16-4.16,10.923,0,15.083l234.667,234.667c2.091,2.069,4.821,3.115,7.552,3.115s5.461-1.045,7.531-3.136l234.667-234.667    C491.696,131.368,491.696,124.605,487.536,120.445z"
                                        data-original="#000000" class="active-path" data-old_color="#000000"
                                        fill="#141414"></svg>
                        </div>
                        <div class="aside-hidden-mobile">
                            <div class="filter-container">
                                <div class="filter-containers d-none">
                                    <div class="filter-container__selected-filter" style="display: none;">
                                        <div class="filter-container__selected-filter-list clearfix">
                                            <ul>
                                            </ul>
                                            <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                               class="filter-container__clear-all" title="Bỏ hết">Bỏ hết</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>


                                <aside class="aside-item filter-vendor">
                                    <div class="aside-title">Thương hiệu <i class="fas fa-minus"></i></div>
                                    <div class="aside-content filter-group">
                                        <ul class="filter-vendor">


                                            <li class="filter-item filter-item--check-box filter-item--green ">
                                                <label data-filter="trung tâm giúp việc hồng phúc"
                                                       for="filter-trung-tam-giup-viec-hong-phuc"
                                                       class="trung-tam-giup-viec-hong-phuc">
                                                    <input type="checkbox" id="filter-trung-tam-giup-viec-hong-phuc"
                                                           onchange="toggleFilter(this)" data-group="Hãng"
                                                           data-field="vendor.filter_key"
                                                           data-text="Trung Tâm giúp việc Hồng Phúc"
                                                           value="(&#34;Trung Tâm giúp việc Hồng Phúc&#34;)"
                                                           data-operator="OR">
                                                    <i class="fa"></i>

                                                    Trung Tâm giúp việc Hồng Phúc

                                                </label>
                                            </li>


                                        </ul>
                                    </div>
                                </aside>


                            </div>
                        </div>
                    </div>

                </aside>
                <section class="main_container collection col-md-12 col-lg-9">
                    <h1 class="col-title d-none">Tất cả sản phẩm</h1>
                    <div class="category-products products category-products-grids clearfix">
                        <section class="products-view products-view-grid row">
                            @foreach($products as $item)
                                <div class="col-6 col-sm-4 col-lg-4">
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
                                            <h3>
                                                <a href="{{ route('product', ['post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                                   title="{{ isset($item['title']) ? $item['title'] : '' }}">
                                                    {{ isset($item['title']) ? $item['title'] : '' }}
                                                </a>
                                            </h3>
                                            <div class="content_price">
                                                <strong>Liên hệ</strong>
                                            </div>
                                            <form action="" method="post" enctype="multipart/form-data"
                                                  class="hidden-md variants form-nut-grid form-ajaxtocart"
                                                  data-id="product-actions-19879232">

                                                <a class="button ajax_addtocart"
                                                   href="{{ route('product', ['post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                                   title="Chi tiết">Chi tiết</a>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="clearfix"></div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="text-xs-right text-center pagging-css">
                                    <nav class="text-center">
                                        <ul class="pagination clearfix">
                                            @if ($products->lastPage() > 1)
                                                <li class="page-item"><a class="page-link" href="{{ $products->url(1) }}">
                                                        <svg viewBox="0 0 100 100" data-radium="true" style="width: 14px;">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g transform="translate(-645.000000, -879.000000)"
                                                                   fill="#000">
                                                                    <path d="M743.998989,926.504303 L697.512507,880.032702 C696.909905,879.430293 695.962958,879 695.016011,879 C694.069064,879 693.122117,879.430293 692.519515,880.032702 L646.033033,926.504303 C644.655656,927.881239 644.655656,930.118761 646.033033,931.495697 C646.721722,932.184165 647.582582,932.528399 648.529529,932.528399 C649.476476,932.528399 650.337337,932.184165 651.026025,931.495697 L691.486482,891.048193 L691.486482,975.471601 C691.486482,977.450947 693.036031,979 695.016011,979 C696.995991,979 698.54554,977.450947 698.54554,975.471601 L698.54554,891.048193 L739.005997,931.495697 C740.383374,932.872633 742.621612,932.872633 743.998989,931.495697 C745.376366,930.118761 745.29028,927.881239 743.998989,926.504303 L743.998989,926.504303 Z"
                                                                          transform="translate(695.000000, 929.000000) rotate(-90.000000) translate(-695.000000, -929.000000) "></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </li>
                                                @for ($i = 1; $i <= $products->lastPage(); $i++)

                                                    <li class="{{ ($products->currentPage() == $i) ? ' active disabled ' : '' }} page-item ">
                                                        <a class="page-link" href="{{ $products->url($i) }}" title="{{ $i }}">
                                                            {{ $i }}
                                                        </a>
                                                    </li>
                                                @endfor
                                                <li class="page-item"><a class="page-link" href="{{ $products->url($products->currentPage()+1) }}">
                                                        <svg viewBox="0 0 100 100" data-radium="true" style="width: 14px;">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                               fill-rule="evenodd">
                                                                <g transform="translate(-463.000000, -879.000000)"
                                                                   fill="#000">
                                                                    <path d="M561.998989,926.504303 L515.512507,880.032702 C514.909905,879.430293 513.962958,879 513.016011,879 C512.069064,879 511.122117,879.430293 510.519515,880.032702 L464.033033,926.504303 C462.655656,927.881239 462.655656,930.118761 464.033033,931.495697 C464.721722,932.184165 465.582582,932.528399 466.529529,932.528399 C467.476476,932.528399 468.337337,932.184165 469.026025,931.495697 L509.486482,891.048193 L509.486482,975.471601 C509.486482,977.450947 511.036031,979 513.016011,979 C514.995991,979 516.54554,977.450947 516.54554,975.471601 L516.54554,891.048193 L557.005997,931.495697 C558.383374,932.872633 560.621612,932.872633 561.998989,931.495697 C563.376366,930.118761 563.29028,927.881239 561.998989,926.504303 L561.998989,926.504303 Z"
                                                                          id="up-arrow-copy-2"
                                                                          transform="translate(513.000000, 929.000000) rotate(-270.000000) translate(-513.000000, -929.000000) "></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </div>
        </div>
    </div>


@endsection

