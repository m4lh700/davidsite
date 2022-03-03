<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $page->description }}">
        <meta name="robots" content="index, follow">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="{{ $page->title }}" />
        <meta property="og:description" content="{{ $page->description }}" />
        <meta property="og:image" content="https://david-homepage.vercel.app/_next/image?url=%2Fassets%2Fsvg%2Fdavid.svg&w=128&q=75" />
        <meta property="og:url" content="{{ $page->baseUrl }}" />
        <meta property="og:site_name" content="{{ $page->title }}" />

        <title>{{ $page->title }}</title>
        <link rel="canonical" href="{{ $page->baseUrl }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        <div id="preloader" class="preloader w-screen h-screen bg-theme-black fixed z-50 p-12 pt-24 md:p-80 mx-auto my-auto animate__animated">
          <div id="percCounter" class="text-xl md:text-5xl text-white font-bold text-center uppercase leading-relaxed m-4 animate__animated animate__fadeIn">0%</div>
          <div id="preprogressbar" class="w-full bg-gray-200 rounded-full dark:bg-gray-700 animate__animated animate__fadeIn">
            <div id="bar" class="bg-red-500 text-xs font-medium text-white text-center p-2 leading-none rounded-full" style="width: 0%"> 0%</div>
          </div>
        </div>
        @include('header', ['maintitle' => $page->maintitle, 'subtitle' => $page->subtitle, 'intro' => $page->intro])
        @yield('body')
        @include('_layouts.footer')
    </body>
</html>
