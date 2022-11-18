@extends('site.layout.site')

@section('title', ($languageCurrent =='vn') ? 'Đăng ký' : 'Register')
@section('meta_description', isset($information['meta_description']) ? $information['meta_description'] : '')
@section('keywords', isset($information['meta_keyword']) ? $information['meta_keyword'] : '')

@section('content')
    <main id="MainContent" class="content-for-layout focus-none" role="main" tabindex="-1">
        <link href="{{ asset('site/s/files/1/0080/9035/3717/t/3/assets/customer.css') }}" rel="stylesheet" type="text/css" media="all">

        <div class="customer register">
            <svg style="display: none">
                <symbol id="icon-error" viewBox="0 0 13 13">
                    <circle cx="6.5" cy="6.50049" r="5.5" stroke="white" stroke-width="2"></circle>
                    <circle cx="6.5" cy="6.5" r="5.5" fill="#EB001B" stroke="#EB001B" stroke-width="0.7"></circle>
                    <path d="M5.87413 3.52832L5.97439 7.57216H7.02713L7.12739 3.52832H5.87413ZM6.50076 9.66091C6.88091 9.66091 7.18169 9.37267 7.18169 9.00504C7.18169 8.63742 6.88091 8.34917 6.50076 8.34917C6.12061 8.34917 5.81982 8.63742 5.81982 9.00504C5.81982 9.37267 6.12061 9.66091 6.50076 9.66091Z" fill="white"></path>
                    <path d="M5.87413 3.17832H5.51535L5.52424 3.537L5.6245 7.58083L5.63296 7.92216H5.97439H7.02713H7.36856L7.37702 7.58083L7.47728 3.537L7.48617 3.17832H7.12739H5.87413ZM6.50076 10.0109C7.06121 10.0109 7.5317 9.57872 7.5317 9.00504C7.5317 8.43137 7.06121 7.99918 6.50076 7.99918C5.94031 7.99918 5.46982 8.43137 5.46982 9.00504C5.46982 9.57872 5.94031 10.0109 6.50076 10.0109Z" fill="white" stroke="#EB001B" stroke-width="0.7">
                    </path></symbol>
            </svg>
            <h1>
                {{ $languageSetup['create-account'] }}
            </h1>
            <form method="post" action="/{{ $languageCurrent }}/dang-ky" id="create_customer" accept-charset="UTF-8" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="field">
                    <input type="text" name="name" id="RegisterForm-LastName" autocomplete="name" placeholder="Name">
                    <label for="RegisterForm-LastName">
                        {{ $languageSetup['name'] }}
                    </label>
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
                <div class="field">
                    <input type="email" name="email" id="RegisterForm-email" spellcheck="false" autocapitalize="off" autocomplete="email" aria-required="true" placeholder="Email">
                    <label for="RegisterForm-email">
                        Email
                    </label>

                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                @endif
                <div class="field">
                    <input type="tel" pattern="[0-9]*" name="phone" id="RegisterForm-Phone" autocomplete="family-name" placeholder="Contact number">
                    <label for="RegisterForm-pPhone">
                        {{ $languageSetup['phone'] }}
                    </label>
                </div>
                @if ($errors->has('phone'))
                    <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                 </span>
                @endif
                <div class="field">
                    <input type="password" name="password" id="RegisterForm-password" aria-required="true" placeholder="Password">
                    <label for="RegisterForm-password">
                        {{ $languageSetup['password'] }}
                    </label>
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                     </span>
                @endif

                <button>
                    {{ $languageSetup['create'] }}
                </button></form></div>


        <script>
            $('#gender').on('change', function() {
                $("#customer_tags").val(this.value);
            });

            $("#Number-Register").change(function() {
                if($(this).val() !== "" && !$.isNumeric($(this).val())) {
                    $(this).val('0');
                    return false;
                }
            });

            $(".numberBox").change(function() {
                var max = parseInt($(this).attr('max'));
                var min = parseInt($(this).attr('min'));
                if ($(this).val() > max)
                {
                    $(this).val(max);
                }
                else if ($(this).val() < min)
                {
                    $(this).val(min);
                }

                var day   = $("#day").val();
                var month = $("#month").val();
                var year  = $("#year").val();

                $("#birthday").val(day+'/'+month+'/'+year);
            });
        </script>

    </main>
@endsection
