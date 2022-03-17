<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $page->description }}">
        <!--<meta name="robots" content="index, follow">-->
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ $page->title }}" />
        <meta property="og:description" content="{{ $page->description }}" />
        <meta property="og:image" content="https://david-homepage.vercel.app/_next/image?url=%2Fassets%2Fsvg%2Fdavid.svg&w=128&q=75" />
        <meta property="og:url" content="{{ $page->baseUrl }}" />
        <meta property="og:site_name" content="{{ $page->title }}" />
        <title>{{ $page->title }}</title>
        <link rel="canonical" href="{{ $page->baseUrl }}">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 antialiased font-poppins">
        <!-- PreLoader-->
        <div id="preloader" class="preloader w-screen h-screen bg-theme-black fixed z-50 p-12 pt-24 md:p-80 mx-auto my-auto animate__animated">
          <div id="percCounter" class="text-xl md:text-5xl text-white font-bold text-center uppercase leading-relaxed m-4 animate__animated animate__fadeIn">0%
          </div>
          <div id="preprogressbar" class="w-full bg-gray-200 rounded-full dark:bg-gray-700 animate__animated animate__fadeIn">
            <div id="bar" class="bg-red-500 text-xs font-medium text-white text-center p-2 leading-none rounded-full" style="width: 0%"> 0%
            </div>
          </div>
        </div>
        <!-- End Preloader -->
        <!-- Header -->
        @include('_layouts.header')
        <!-- End Header -->

        <!-- Body -->
        @yield('body')
        <!-- End Body -->

        <!-- Footer -->
        @include('_layouts.footer')
        <!-- End Footer -->
    </body>
</html>
