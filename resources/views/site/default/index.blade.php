@extends('site.layout.site')

@section('title', isset($information['meta_title']) ? $information['meta_title'] : '')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')
   <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
      <section id="shopify-section-template--15590144114867__image_banner" class="shopify-section section">
         <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/section-image-banner.css') }}"
               rel="stylesheet" type="text/css" media="all"/>
         <style data-shopify>@media screen and (max-width: 749px) {
               #Banner-template--15590144114867__image_banner::before,
               #Banner-template--15590144114867__image_banner .banner__media::before,
               #Banner-template--15590144114867__image_banner:not(.banner--mobile-bottom) .banner__content::before {
                  padding-bottom: 66.552734375%;
                  content: '';
                  display: block;
               }
            }

            @media screen and (min-width: 750px) {
               #Banner-template--15590144114867__image_banner::before,
               #Banner-template--15590144114867__image_banner .banner__media::before {
                  padding-bottom: 66.552734375%;
                  content: '';
                  display: block;
               }
            }

            #Banner-template--15590144114867__image_banner::after {
               opacity: 0.0;
            }</style>
         <div id="Banner-template--15590144114867__image_banner"
              class="banner banner--adapt banner--content-align-center banner--content-align-mobile-center banner--">
            <div class="banner__media media desktop_media ">
               <img
                       sizes="100vw"
                       src="{{ isset($information['banner-desktop']) ? $information['banner-desktop'] : '' }}"
                       loading="lazy"
                       alt=""
                       width="2048"
                       height="1363.0"
               >
            </div>
            <div class="banner__media media mobile_media">
               <img
                       sizes="100vw"
                       src="{{ isset($information['banner-mobile']) ? $information['banner-mobile'] : '' }}"
                       loading="lazy"
                       alt=""
                       width="2048"
                       height="1363.0"
               >
            </div>
            <div class="banner__content banner__content--bottom-center page-width">
               <div class="banner__box content-container content-container--full-width-mobile"><h2
                          class="banner__heading h1">
                     <span></span>
                  </h2>
                  <div class="banner__text body">
                     <span></span>
                  </div>
                  <div class="banner__buttons">
                     <a href="{{ isset($information['link-button-banner']) ? $information['link-button-banner'] : '' }}"
                        class="button button--secondary">
                        {{ isset($information['button-banner-title']) ? $information['button-banner-title'] : '' }}
                     </a>
                  </div>
               </div>
            </div>
         </div>


      </section>
      <section id="shopify-section-template--15590144114867__featured_collection" class="shopify-section section">
         <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-card.css') }}"
               rel="stylesheet" type="text/css" media="all"/>
         <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-price.css') }}"
               rel="stylesheet" type="text/css" media="all"/>

         <link rel="stylesheet"
               href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-slider.css') }}"
               media="print" onload="this.media='all'">
         <link rel="stylesheet"
               href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/template-collection.css') }}"
               media="print" onload="this.media='all'">

         <noscript>
            <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-slider.css') }}"
                  rel="stylesheet" type="text/css" media="all"/>
         </noscript>
         <noscript>
            <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/template-collection.css') }}"
                  rel="stylesheet" type="text/css" media="all"/>
         </noscript>
         <style data-shopify>.section-template--15590144114867__featured_collection-padding {
               padding-top: 15px;
               padding-bottom: 15px;
            }

            @media screen and (min-width: 750px) {
               .section-template--15590144114867__featured_collection-padding {
                  padding-top: 20px;
                  padding-bottom: 20px;
               }
            }</style>
         <div class="color-background-1 isolate">
            <div class="collection page-width page-width-desktop section-template--15590144114867__featured_collection-padding">

               <div class="title-wrapper-with-link title-wrapper--self-padded-tablet-down title-wrapper--no-top-margin">

                  <h2 class="title">
                     <span class="caption-with-letter-spacing">
                        {{ isset($information['company-name']) ? $information['company-name'] : '' }}
                     </span><br>
                     {{ isset($information['description-product']) ? $information['description-product'] : '' }}
                  </h2>
                  <a href="{{ isset($information['list-link-product']) ? $information['list-link-product'] : '' }}"
                     class="link underlined-link large-up-hide">{{ isset($information['button-product']) ? $information['button-product'] : '' }}</a>
               </div>


               <slider-component class="slider-mobile-gutter">
                  <ul id="Slider-template--15590144114867__featured_collection"
                      class="grid grid--2-col product-grid grid--3-col-tablet grid--one-third-max grid--4-col-desktop grid--quarter-max slider slider--tablet grid--peek"
                      role="list">
                     @foreach(\App\Entity\Product::showProduct('latest-releases', $countPost = 8) as $id => $item)
                     <li id="Slide-template--15590144114867__featured_collection-{{$id}}" class="grid__item slider__slide">
                        <div class="card-wrapper underline-links-hover">
                           <div class="card card--standard card--media card--extend-height">
                              <div class="card__inner ratio">
                                 <div class="card__media">
                                    <a href="{{ route('product', ['post_slug' => $item->slug, 'languageCurrent' => $languageCurrent]) }}">
                                       <div class="media media--transparent media--hover-effect">
                                          <img
                                                  src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                  class="motion-reduce"
                                                  loading="lazy"
                                                  width="4000"
                                                  height="4000"
                                          ><img
                                                  src="{{ \App\Entity\Input::getPostMeta('anh-2', $item->post_id) }}"
                                                  sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                  class="motion-reduce image_2"
                                                  loading="lazy"
                                                  width="1363"
                                                  height="2048"
                                          ></div>
                                    </a>
                                 </div>
                              </div>
                              <div class="card__content">
                                 <div class="card__information">
                                    <h3 class="card__heading h5">
                                       <a href="{{ route('product', ['post_slug' => $item->slug, 'languageCurrent' => $languageCurrent]) }}" class="full-unstyled-link">
                                          {{ isset($item['title']) ? $item['title'] : '' }}
                                       </a>
                                    </h3>
                                    <div class="card-information">
                                       <span class="caption-large light"></span>

                                       <div class="price  price--sold-out ">
                                          <div class="price__container">
                                             <div class="price__regular">
                                                <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                <span class="price-item price-item--regular">
                                                   {{ isset($item['price']) ? number_format($item['price']) : '' }}  {{ isset($information['currency']) ? $information['currency'] : \App\Entity\Input::getPostMeta('currency', $item->post_id) }}

                                                </span>
                                             </div>
                                             <div class="price__sale">
                                                <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                <span>
                                                    <s class="price-item price-item--regular"></s>
                                                </span>
                                                <span class="visually-hidden visually-hidden--inline">Sale price</span>
                                                <span class="price-item price-item--sale price-item--last">£55.00</span>
                                             </div>
                                             <small class="unit-price caption hidden">
                                                <span class="visually-hidden">Unit price</span>
                                                <span class="price-item price-item--last">
                                                    <span></span>
                                                    <span aria-hidden="true">/</span>
                                                        <span class="visually-hidden">&nbsp;per&nbsp;
                                                        </span>
                                                    <span>
                                                    </span>
                                                </span>
                                             </small>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                     @endforeach
                  </ul>
                  <div class="slider-buttons no-js-hidden">
                     <button type="button" class="slider-button slider-button--prev" name="previous"
                             aria-label="Slide left">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"
                             viewBox="0 0 10 6">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                 fill="currentColor">
                        </svg>
                     </button>
                     <div class="slider-counter caption">
                        <span class="slider-counter--current">1</span>
                        <span aria-hidden="true"> / </span>
                        <span class="visually-hidden">of</span>
                        <span class="slider-counter--total">8</span>
                     </div>
                     <button type="button" class="slider-button slider-button--next" name="next"
                             aria-label="Slide right">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"
                             viewBox="0 0 10 6">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                 fill="currentColor">
                        </svg>
                     </button>
                  </div>
               </slider-component>
               <div class="center collection__view-all small-hide medium-hide">
                  <a href="{{ isset($information['link-list-product']) ? $information['link-list-product'] : '' }}"
                     class="button"
                     aria-label="">
                     {{ isset($information['button-product']) ? $information['button-product'] : '' }}
                  </a>
               </div>
            </div>
         </div>

      </section>
      <section id="shopify-section-template--15590144114867__collage" class="shopify-section section">
         <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/collage.css') }}"
               rel="stylesheet"
               type="text/css" media="all"/>
         <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-card.css') }}"
               rel="stylesheet" type="text/css" media="all"/>
         <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-price.css') }}"
               rel="stylesheet" type="text/css" media="all"/>
         <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-modal-video.css') }}"
               rel="stylesheet" type="text/css" media="all"/>
         <style data-shopify>.section-template--15590144114867__collage-padding {
               padding-top: 15px;
               padding-bottom: 15px;
            }

            @media screen and (min-width: 750px) {
               .section-template--15590144114867__collage-padding {
                  padding-top: 20px;
                  padding-bottom: 20px;
               }
            }</style>
         <link rel="stylesheet"
               href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-deferred-media.css') }}"
               media="print" onload="this.media='all'">

         <div class="color-background-1 isolate">
            <div class=" no-heading section-template--15590144114867__collage-padding">
               <h2 class="collage-wrapper-title"></h2>
               <div class="collage collage--mobile">
                  @foreach (\App\Entity\SubPost::showSubPost('shop-isolate', 3) as $item)
                  <div class="collage__item collage__item--image collage__item--left">
                     <div class="collage-card color-">
                        <a href="{{ isset($item['link']) ?$item['link'] : '' }}">
                           <div class="media media--transparent ratio"
                                style="--ratio-percent: 150.25678650036684%">
                              <img
                                      src="{{ isset($item['image']) ?$item['image'] : '' }}"
                                      sizes="(min-width: 1600px) 1005px, (min-width: 750px) 500px, calc(100vw - 30px)"
                                      alt=""
                                      loading="lazy"
                                      width="1363"
                                      height="2048"
                              >
                              <div class="collage_image_heading">
                                 <h4>{{ isset($item['ma-san-pham']) ?$item['ma-san-pham'] : '' }}
                                    <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false"
                                         role="presentation" class="icon icon-arrow"
                                         xmlns="http://www.w3.org/2000/svg">
                                       <path fill-rule="evenodd" clip-rule="evenodd"
                                             d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z"
                                             fill="currentColor">
                                    </svg>
                                 </h4>
                              </div>
                           </div>
                        </a></div>
                  </div>
                 @endforeach
               </div>
            </div>
         </div>

      </section>
      <section id="shopify-section-template--15590144114867__16487235720b67f477" class="shopify-section section">
         <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-card.css') }}"
               rel="stylesheet" type="text/css" media="all"/>
         <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-price.css') }}"
               rel="stylesheet" type="text/css" media="all"/>

         <link rel="stylesheet"
               href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-slider.css') }}"
               media="print" onload="this.media='all'">
         <link rel="stylesheet"
               href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/template-collection.css') }}"
               media="print" onload="this.media='all'">

         <noscript>
            <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/component-slider.css') }}"
                  rel="stylesheet" type="text/css" media="all"/>
         </noscript>
         <noscript>
            <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/template-collection.css') }}"
                  rel="stylesheet" type="text/css" media="all"/>
         </noscript>
         <style data-shopify>.section-template--15590144114867__16487235720b67f477-padding {
               padding-top: 15px;
               padding-bottom: 15px;
            }

            @media screen and (min-width: 750px) {
               .section-template--15590144114867__16487235720b67f477-padding {
                  padding-top: 20px;
                  padding-bottom: 20px;
               }
            }</style>
         <div class="color-background-1 isolate">
            <div class="collection page-width page-width-desktop section-template--15590144114867__16487235720b67f477-padding">

               <div class="title-wrapper-with-link title-wrapper--self-padded-tablet-down title-wrapper--no-top-margin">

                  <h2 class="title">
                     <span class="caption-with-letter-spacing">
                        {{ isset($information['company-name']) ? $information['company-name'] : '' }}
                     </span><br>
                     {{ isset($information['description-product-2']) ? $information['description-product-2'] : '' }}
                  </h2>
                  <a href="{{ isset($information['link-list-product-2']) ? $information['link-list-product-2'] : '' }}"
                     class="link underlined-link large-up-hide">{{ isset($information['button-product-2']) ? $information['button-product-2'] : '' }}</a>
               </div>

               <slider-component class="slider-mobile-gutter">
                  <ul id="Slider-template--15590144114867__16487235720b67f477"
                      class="grid grid--2-col product-grid grid--3-col-tablet grid--one-third-max grid--4-col-desktop grid--quarter-max slider slider--tablet grid--peek"
                      role="list">
                     @foreach(\App\Entity\Product::showProduct('headwear', $countPost = 8) as $id => $item)
                        <li id="Slide-template--15590144114867__featured_collection-{{$id}}" class="grid__item slider__slide">
                           <div class="card-wrapper underline-links-hover">
                              <div class="card card--standard card--media card--extend-height">
                                 <div class="card__inner ratio">
                                    <div class="card__media">
                                       <a href="{{ route('product', ['post_slug' => $item->slug, 'languageCurrent' => $languageCurrent]) }}">
                                          <div class="media media--transparent media--hover-effect">
                                             <img
                                                     src="{{ isset($item['image']) ? $item['image'] : '' }}"
                                                     sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                     alt="YYY TEE BLACK BLUE"
                                                     class="motion-reduce"
                                                     loading="lazy"
                                                     width="4000"
                                                     height="4000"
                                             ><img
                                                     src="{{ \App\Entity\Input::getPostMeta('anh-2', $item->post_id) }}"
                                                     sizes="(min-width: 1600px) 367px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                                     alt="YYY TEE BLACK BLUE"
                                                     class="motion-reduce image_2"
                                                     loading="lazy"
                                                     width="1363"
                                                     height="2048"
                                             ></div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="card__content">
                                    <div class="card__information">
                                       <h3 class="card__heading h5">
                                          <a href="{{ route('product', ['post_slug' => $item->slug, 'languageCurrent' => $languageCurrent]) }}" class="full-unstyled-link">
                                             {{ isset($item['title']) ? $item['title'] : '' }}
                                          </a>
                                       </h3>
                                       <div class="card-information">
                                          <span class="caption-large light"></span>

                                          <div class="price  price--sold-out ">
                                             <div class="price__container">
                                                <div class="price__regular">
                                                   <span class="visually-hidden visually-hidden--inline">Regular price</span>
                                                   <span class="price-item price-item--regular">
                                                   {{ isset($item['price']) ? number_format($item['price']) : '' }}  {{ isset($information['currency']) ? $information['currency'] : \App\Entity\Input::getPostMeta('currency', $item->post_id) }}

                                                </span>
                                                </div>
{{--                                                <div class="price__sale">--}}
{{--                                                   <span class="visually-hidden visually-hidden--inline">Regular price</span>--}}
{{--                                                   <span>--}}
{{--                                                    <s class="price-item price-item--regular"></s>--}}
{{--                                                </span>--}}
{{--                                                   <span class="visually-hidden visually-hidden--inline">Sale price</span>--}}
{{--                                                   <span class="price-item price-item--sale price-item--last">£55.00</span>--}}
{{--                                                </div>--}}
{{--                                                <small class="unit-price caption hidden">--}}
{{--                                                   <span class="visually-hidden">Unit price</span>--}}
{{--                                                   <span class="price-item price-item--last">--}}
{{--                                                    <span></span>--}}
{{--                                                    <span aria-hidden="true">/</span>--}}
{{--                                                        <span class="visually-hidden">&nbsp;per&nbsp;--}}
{{--                                                        </span>--}}
{{--                                                    <span>--}}
{{--                                                    </span>--}}
{{--                                                </span>--}}
{{--                                                </small>--}}
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     @endforeach

                  </ul>
                  <div class="slider-buttons no-js-hidden">
                     <button type="button" class="slider-button slider-button--prev" name="previous"
                             aria-label="Slide left">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"
                             viewBox="0 0 10 6">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                 fill="currentColor">
                        </svg>
                     </button>
                     <div class="slider-counter caption">
                        <span class="slider-counter--current">1</span>
                        <span aria-hidden="true"> / </span>
                        <span class="visually-hidden">of</span>
                        <span class="slider-counter--total">8</span>
                     </div>
                     <button type="button" class="slider-button slider-button--next" name="next"
                             aria-label="Slide right">
                        <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret"
                             viewBox="0 0 10 6">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                                 fill="currentColor">
                        </svg>
                     </button>
                  </div>
               </slider-component>
               <div class="center collection__view-all small-hide medium-hide">
                  <a href="{{ isset($information['link-list-product-2']) ? $information['link-list-product-2'] : '' }}" class="button"
                     aria-label="">
                     {{ isset($information['button-product-2']) ? $information['button-product-2'] : '' }}
                  </a>
               </div>
            </div>
         </div>

      </section>
      <div id="shopify-section-template--15590144114867__16485544534400b567" class="shopify-section">
         <link rel="stylesheet" href="{{ asset('site/instafeed-4.7.0.css') }}"></link>
         <style>#insta-feed {
               width: 100%;
            }

            #insta-feed h2 {
               font-size: 10px;
               font-family: Helvetica;
            }

            @font-face {
               font-family: Helvetica;
               font-weight: 400;
               font-style: normal;
               src: url("site/helvetica/helvetica_n4.fe093fe9ca22a15354813c912484945a36b79146.woff2") format("woff2"),
               url("site/helvetica/helvetica_n4.8bddb85c18a0094c427a9bf65dee963ad88de4e8.woff") format("woff");
            }
         </style>
         <div id="insta-feed">
            @foreach(\App\Entity\SubPost::showSubPost('insta-feed', $countPost = 8) as $id => $item)
            <a href="#{{$id}}-insta-feed">
               <div class="instafeed-container" style="width:24.0%;padding-top:25.000000%;">
                  <img
                          class="js-lazy-image js-lazy-image--handled" style="width:99%;height:99%;"
                          src="{{ isset($item['image']) ? $item['image'] : '' }}"
                          alt="{{ isset($item['description']) ? $item['description'] : '' }}">
                  <div style="width:99%;height:99%;" class="instafeed-overlay "></div>
               </div>
            </a>
            <div class="instafeed-lightbox" id="{{$id}}-insta-feed">
               <div class="lightbox-instagram" role="dialog" aria-labelledby="1-insta-feed" aria-modal="true">
                  <div class="instafeed-post-image">\
                     <a href="#_" tabindex="-1">
                        <img class="js-lazy-image"
                             src="{{ isset($item['image']) ? $item['image'] : '' }}"
                             data-src="{{ isset($item['image']) ? $item['image'] : '' }}"
                             alt="we created something that can’t be replaced 🧢"></a>
                  </div>
                  <div class="description">
                     <div class="instafeed-header">
                        <div class="close-button"><a
                                   style="height:25px;width:25px;display:block!important;position:relative;"
                                   aria-label="close button" href="#_" id="close-button-url"></a></div>
                        <object>
                           <a href="{{ isset($item['description']) ? $item['description'] : '' }}" target="_blank" rel="noopener"
                                   tabindex="-1"><img src="//instafeed.nfcube.com/assets/img/instagram-logo.png"
                                                      data-feed-id="insta-feed"
                                                      class="profile-picture js-lazy-image" data-src="false"
                                                      alt="instagram profile picture"></a></object>
                        <object class="name-section"><a class="fullname"
                                                        href="{{ isset($item['description']) ? $item['description'] : '' }}" target="_blank"
                                                        rel="noopener">
                              <div class="fullname instafeed-text" data-feed-id="insta-feed">{{ isset($item['title']) ? $item['title'] : '' }}</div>
                              <div class="username">@ {{ isset($item['title']) ? $item['title'] : '' }}</div>
                           </a></object>
                     </div>
                     <hr>
                     <div class="box-content">
                        <div class="sub-header">
                           <div class="post-engagement"></div>
                           <div class="arrows">
                              <object><a href="#{{ $id == 0 ? 8 : $id - 1  }}-insta-feed"><img
                                            src="//instafeed.nfcube.com/assets/img/pixel.gif"
                                            alt="previous image"></a></object>
                              <object><a href="#{{ $id == 8 ? 0 : $id + 1  }}-insta-feed"><img
                                            src="//instafeed.nfcube.com/assets/img/pixel.gif" alt="next image"></a>
                              </object>
                           </div>
                        </div>
                              <div class="instafeed-caption"> {!!isset($item['content']) ? $item['content'] : '' !!}</div>
                        <div class="post-date">
                           {{ date('d') }} On {{ date('M') }} •
                           <object>
                              <a href="{{ isset($item['description']) ? $item['description'] : '' }}" target="_blank"
                                      rel="noopener" class="follow">View on Instagram</a></object>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach


         </div>
      </div>
   </main>
@endsection



