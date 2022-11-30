@extends('site.layout.site')

@section('title', !empty($post->meta_title) ? $post->meta_title : $post->title)
@section('meta_description',  !empty($post->meta_description) ? $post->meta_description : $post->description)
@section('keywords', $post->meta_keyword )
@section('meta_image', asset($post->image) )
@section('meta_url', route('post', ['cate_slug' => $category->slug, 'post_slug' => $post->slug, 'languageCurrent' => $languageCurrent]) )

@section('content')
    <div class="evo-themes">
        <section class="bread-crumb margin-bottom-10" style="background-image:url({{ isset($post->image) ? $post->image : '/site/image/image.jpg' }}); background-size: cover;
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
                        <strong itemprop="name">{{ $post->title }}</strong>
                        <meta itemprop="position" content="3">
                    </li>
                </ul>
            </div>
        </section>
        <div class="container article-wraper margin-top-20 margin-bottom-20">
            <div class="row">
                <section class="right-content col-md-12 col-lg-9">
                    <article class="article-main" itemscope itemtype="http://schema.org/Article">
                        <meta itemprop="mainEntityOfPage" content="{{ $post->slug }}">
                        <meta itemprop="description" content="">
                        <meta itemprop="headline" content="{{ $post->title }}">
                        <meta itemprop="image" content="{{ $post->image }}">
                        <meta itemprop="datePublished" content="17-11-2022">
                        <meta itemprop="dateModified" content="17-11-2022">
                        <div class="d-none" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                <img src="{{ $post->image }}"
                                     alt="{{ $post->title }}">
                                <meta itemprop="url" content="{{ url()->full() }}">
                                <meta itemprop="width" content="200">
                                <meta itemprop="height" content="49">
                            </div>
                            <meta itemprop="name" content="{{ $post->title }}">
                        </div>

                        <div class="row">
                            <div class="col-md-12 evo-article margin-bottom-10">
                                <h1 class="title-head">{{ $post->title }}</h1>
                                <div class="article-details evo-toc-content">
                                    {!! $post->content !!}
                                </div>
                            </div>

                            <div class="col-md-12 margin-bottom-10">
                                <div class="tag_article">
                                    <span class="inline">Tags: </span>
                                    <?php
                                    $tags = explode(',', $post->tags);
                                    ?>
                                    @if(count($tags) > 1)
                                    @foreach($tags as $tag)
                                        <a href="#" title="{{ $tag }}">{{ $tag }}</a>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="evo-article-toolbar">
                                    <div class="evo-article-toolbar-left clearfix">
                                        <span class="evo-article-toolbar-head">Bạn đang xem: </span>
                                        <span class="evo-article-toolbar-title"
                                              title="{{ $post->title }}">
                                    {{ $post->title }}
                                </span>
                                    </div>
                                    {{--                                <div class="evo-article-toolbar-right">--}}
                                    {{--                                    <a href="tai-sao-nen-chon-dich-vu-trong-tre-tai-nha-uy-tin-hong-phuc" title="Bài trước">--}}
                                    {{--                                        <svg class="Icon Icon--select-arrow-left" role="presentation" viewBox="0 0 11 18">--}}
                                    {{--                                            <path d="M9.5 1.5L1.5 9l8 7.5" stroke-width="2" stroke="currentColor"--}}
                                    {{--                                                  fill="none" fill-rule="evenodd" stroke-linecap="square"></path>--}}
                                    {{--                                        </svg>Bài trước--}}
                                    {{--                                    </a>--}}

                                    {{--                                </div>--}}
                                </div>
                            </div>
                            <div class="col-md-12 margin-top-10">
                                <?php
                                    $post_id = $post->post_id
                                ?>
                                @include('site.partials.comment')
                            </div>

                        </div>
                    </article>
                </section>
                <aside class="evo-toc-sidebar evo-sidebar sidebar left-content col-md-12 col-lg-3">
                    <aside class="aside-item collection-category">
                        <div class="aside-title">
                            <h3 class="title-head margin-top-0">Danh mục</h3>
                        </div>
                        <div class="aside-content">

                            <ul class="navbar-pills nav-category">

                                @foreach (\App\Entity\Menu::showWithLocation('menu-chinh') as $menu)
                                    @foreach (\App\Entity\MenuElement::showMenuPageArray($menu->slug) as $id => $menuElement)
                                        @if (!empty($menuElement['children']))
                                            <li class="nav-item ">
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

                    <aside class="aside-item top-news margin-top-20">
                        <div class="aside-title">
                            <h3 class="title-head margin-top-0">
                                <a href="/vn/danh-muc/tin-tuc" title="Bài viết nổi bật">
                                    Bài viết nổi bật
                                </a>
                            </h3>
                        </div>
                        @foreach(\App\Entity\Post::newPost('tin-tuc', 4) as $id => $item)
                            <article class="item clearfix">
                                <a href="{{ route('post', ['cate_slug' => 'tin-tuc', 'post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                   title="{{ isset($item['title']) ? $item['title'] : '' }}" class="thumb">
                                    <img src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                         alt="{{ isset($item['title']) ? $item['title'] : '' }}"
                                         class="lazy img-responsive center-block"/>
                                </a>
                                <div class="info">
                                    <div class="time">{{ date('d', strtotime($item['updated_at'])) }},
                                        tháng {{ date('m', strtotime($item['updated_at'])) }},
                                        {{ date('Y', strtotime($item['updated_at'])) }}</div>
                                    <h4 class="title usmall">
                                        <a href="{{ route('post', ['cate_slug' => 'tin-tuc', 'post_slug' => $item['slug'], 'languageCurrent' => $languageCurrent]) }}"
                                           title="{{ isset($item['title']) ? $item['title'] : '' }}">
                                            {{ isset($item['title']) ? $item['title'] : '' }}
                                        </a>
                                    </h4>
                                </div>
                            </article>
                        @endforeach
                    </aside>
                </aside>
            </div>
        </div>
    </div>
@endsection

