@extends('site.layout.site')

@section('title', $category->title)
@section('meta_description',  $category->description )
@section('keywords', '')

@section('content')
    <div class="evo-themes">
        <section class="bread-crumb margin-bottom-10" style="background-image:url({{ isset($category->image) ? $category->image : '/site/image/image.jpg' }}); background-size: cover;
                background-repeat: no-repeat;
                background-position: center;">
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
        </section>
        <div class="container margin-top-10" itemscope itemtype="http://schema.org/Blog">
            <meta itemprop="name" content="{{ $category->title }}">
            <meta itemprop="description" content="{{ $category->description }}">
            <div class="row">
                <div class="col-md-12">
                    <div class="evo-list-blog-page margin-top-30">
                        <h1 class="title-head d-none">{{ $category->title }}</h1>
                        <section class="list-blogs blog-main">
                            <div class="row">
                                @foreach($posts as $item)
                                <div class="col-md-4 col-sm-6 col-xs-12 clearfix">
                                    <article class="blog-item">
                                        <div class="blog-item-thumbnail">
                                            <a href="{{ route('post', ['cate_slug' => 'tin-tuc', $category->slug => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                               title="{{ isset($item['title']) ? $item['title'] : '' }}">

                                                <img src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                                     alt="{{ isset($item['title']) ? $item['title'] : '' }}"
                                                     class="lazy img-responsive center-block loaded"/>

                                            </a>
                                        </div>
                                        <div class="blog-item-mains">
                                            <div class="post-time">
                                                <img src="{{ asset('/site/100/302/581/themes/798703/assets/calendar.png') }}"
                                                        alt="{{ isset($item['title']) ? $item['title'] : '' }}"/>
                                                {{ date('d', strtotime($item['updated_at'])) }},
                                                tháng {{ date('m', strtotime($item['updated_at'])) }},
                                                {{ date('Y', strtotime($item['updated_at'])) }}
                                            </div>
                                            <h3 class="blog-item-name"><a
                                                        href="{{ route('post', ['cate_slug' => 'tin-tuc', 'post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                                        title="{{ isset($item['title']) ? $item['title'] : '' }}">
                                                    {{ isset($item['title']) ? $item['title'] : '' }}
                                                </a>
                                            </h3>
                                            <p class="blog-item-summary margin-bottom-5">
                                                {{ \App\Ultility\Ultility::textLimit($item['title'], 30) }}
                                            </p>
                                            <a class="readmore" href="{{ route('post', ['cate_slug' => 'tin-tuc', 'post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                               title="Đọc tiếp">Đọc tiếp</a>
                                        </div>
                                    </article>
                                </div>
                                @endforeach


                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="text-xs-right text-center pagging-css">
                                        <nav class="text-center">
                                            <ul class="pagination clearfix">
                                                @if ($posts->lastPage() > 1)
                                                    <li class="page-item"><a class="page-link" href="{{ $posts->url(1) }}">
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
                                                    @for ($i = 1; $i <= $posts->lastPage(); $i++)

                                                        <li class="{{ ($posts->currentPage() == $i) ? ' active disabled ' : '' }} page-item ">
                                                            <a class="page-link" href="{{ $posts->url($i) }}" title="{{ $i }}">
                                                                {{ $i }}
                                                            </a>
                                                        </li>
                                                    @endfor
                                                    <li class="page-item"><a class="page-link" href="{{ $posts->url($posts->currentPage()+1) }}">
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
                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

