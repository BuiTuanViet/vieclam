
@extends('site.layout.site')

@section('title', isset($information['meta_title']) ? $information['meta_title'] : '')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')
    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
    <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/customer.css') }}" rel="stylesheet"
          type="text/css" media="all"/>

    <div class="customer login">
        <h1 id="recover" tabindex="-1">
            Reset your password
        </h1>
        <div>
            <p>
                {{ $languageSetup['reset-content'] }}
            </p>
            <form method="post" action="account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type"
                                                                                       value="recover_customer_password"/><input
                        type="hidden" name="utf8" value="✓"/>
                <div class="field">
                    <input type="email"
                           value=""
                           name="email"
                           id="RecoverEmail"
                           autocorrect="off"
                           autocapitalize="off"
                           autocomplete="email"

                           placeholder="Email"
                    >
                    <label for="RecoverEmail">
                        Email
                    </label>
                </div>
                <button>
                    {{ $languageSetup['submit'] }}
                </button>

                <a href="#login">
                    {{ $languageSetup['cancel'] }}
                </a></form>
        </div>

        <h1 id="login" tabindex="-1">
            {{ $languageSetup['login'] }}
        </h1>
        <div>
            @if(Session::get('login_false'))
            <p>{{ $languageSetup['notice-login-content'] }}
            </p>
            @endif
            <form method="post" action="/{{ $languageCurrent }}/dang-nhap" id="customer_login" accept-charset="UTF-8"
                  novalidate="novalidate">
                {!! csrf_field() !!}

                <div class="field">
                    <input type="email"
                            name="email"
                            id="CustomerEmail"
                            autocomplete="email"
                            autocorrect="off"
                            autocapitalize="off"
                            placeholder="Email">
                    <label for="CustomerEmail">
                        Email
                    </label>
                </div>
                <div class="field">
                    <input
                            type="password"
                            value=""
                            name="password"
                            id="CustomerPassword"
                            autocomplete="current-password"
                            placeholder="Password"
                    >
                    <label for="CustomerPassword">
                        {{ $languageSetup['password'] }}
                    </label>
                </div>
                <button>
                    {{ $languageSetup['sign-in'] }}
                </button>
                <a href="#recover">
                    {{ $languageSetup['forgot-your-password'] }}
                </a>

                <a href="{{ route('register', [ 'languageCurrent' => $languageCurrent] ) }}">
                    {{ $languageSetup['create-account'] }}
                </a>
            </form>
        </div>
    </div>

</main>
@endsection