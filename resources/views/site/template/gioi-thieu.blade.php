@extends('site.layout.site')

@section('title', !empty($post->meta_title) ? $post->meta_title : $post->title)
@section('meta_description',  !empty($post->meta_description) ? $post->meta_description : $post->description)
@section('keywords', $post->meta_keyword )
@section('meta_image', asset($post->image) )
@section('meta_url', route('post', ['cate_slug' => $category->slug, 'post_slug' => $post->slug, 'languageCurrent' => $languageCurrent]) )

@section('content')
    <div class="evo-themes">
        <section class="bread-crumb margin-bottom-10"style="background-image:url({{ isset($post->image) ? $post->image : '/site/image/image.jpg' }}); background-size: cover;
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
                        <meta itemprop="position" content="2">
                    </li>

                </ul>
            </div>
        </section>
        <section class="page">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="page-title category-title">
                            <h1 class="title-head"><a href="#" title="{{ $post->title }}">{{ $post->title }}</a></h1>
                        </div>
                        <div class="content-page rte">
                          {!! $post->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

