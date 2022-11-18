@extends('site.layout.site')

@section('title', $category->title)
@section('meta_description',  $category->description )
@section('keywords', '')

@section('content')



<div id="main">
   

    <h1 class="title_main">{{ $category->title }}</h1> 
    
    <div class="content_main" style="text-align:center" >
        @foreach ($posts as $post)
        <div class="box_news">
            <a  href="{{ route('post', ['cate_slug' => $category->slug, 'post_slug' => $post->slug, 'languageCurrent' => $languageCurrent]) }}"><img src="{{ asset($post->image) }}"  class="img" /></a>
            
            <h2 class="news_title"> <a href="{{ route('post', ['cate_slug' => $category->slug, 'post_slug' => $post->slug, 'languageCurrent' => $languageCurrent]) }}">{{ $post->title }}</a></h2>

            <div class="news_mota">{{ isset($post['description']) ? \App\Ultility\Ultility::textLimit($post['description'], 20) : '' }}   </div>
        </div>
        @endforeach
        
        
        <div style="clear:both"></div>
        <div class="phantrang wow fadeInUp" data-wow-delay="1s" > {{ $posts->links()}}</div>

    </div>
    

    <div class="clear"></div>
</div><!--MAIN-->

@endsection

