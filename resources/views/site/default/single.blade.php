@extends('site.layout.site')

@section('title', !empty($post->meta_title) ? $post->meta_title : $post->title)
@section('meta_description',  !empty($post->meta_description) ? $post->meta_description : $post->description)
@section('keywords', $post->meta_keyword )
@section('meta_image', asset($post->image) )
@section('meta_url', route('post', ['cate_slug' => $category->slug, 'post_slug' => $post->slug, 'languageCurrent' => $languageCurrent]) )

@section('content')
    <style>
        .shopify-policy__container {
            max-width: 560px;
            max-width: 65ch;
            margin: 0 auto;
            padding-left: 20px;
            padding-right: 20px
        }

        .shopify-policy__title {
            text-align: center
        }

    </style>
    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
        <div class="shopify-policy__container">
            <div class="shopify-policy__title">
                <h1>{{ $post->title }}</h1>
            </div>

            <div class="shopify-policy__body">
                <div class="rte">
                    {!! $post->content !!}
                </div>
            </div>
        </div>

    </main>

@endsection

