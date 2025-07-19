<!Doctype html>
<html lang="{{ app()->getLocale() }}-{{ strtoupper(app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <meta name="format-detection" content="telephone=no">
    <title>@yield('title') | {{ $setting->name[app()->getLocale() . '_name'] }}</title>
    <meta name="robots" content="max-image-preview:large" />
    <link rel="dns-prefetch" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="shortlink" href="{{ url()->current() }}" />
    <meta name="generator" content="Globalmart Group" />
    <meta name="author" content="Globalmart Group" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @include('frontend.layouts.headerscripts', ['setting' => $setting])
    @stack('css')
</head>

<body
    @if ($setting->domain == env('APP_DOMAIN')) class="@yield('bodyclass','')"
    @elseif($setting->domain == 'chinamotorsaz.com') id="body" class="@yield('bodyclass','page-template-default page page-id-656 wp-embed-responsive theme-renax woocommerce-no-js version-light renax-v-1.1.1 rn-empty-preloader-ac-color rn-empty-progress-bar-color rn-empty-social-border-color rn-empty-menu-active-color rn-empty-footer-li-color rn-empty-footer-a-color elementor-default elementor-kit-7 elementor-page elementor-page-656')"
    @elseif($setting->domain == 'paradiseevents.az')
        class="paradise_body" @endif>

    @include('frontend.layouts.header', ['setting' => $setting])
    @yield('content')

    @include('frontend.layouts.footer', ['setting' => $setting])
    @include('frontend.layouts.footerscripts', ['setting' => $setting])

    @stack('js')
</body>

</html>
