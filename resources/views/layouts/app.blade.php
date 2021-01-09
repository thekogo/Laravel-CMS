<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    @font-face {
        font-family: Anakotmai;
        src: url("{{ asset('fonts/anakotmai-medium.woff') }}");
        font-weight: 500;
    }

    @font-face {
        font-family: Anakotmai;
        src: url("{{ asset('fonts/anakotmai-bold.woff') }}");
        font-weight: bold;
    }

    @font-face {
        font-family: Anakotmai;
        src: url("{{ asset('fonts/anakotmai-light.woff') }}");
        font-weight: lighter;
    }

    body {
        font-family: Anakotmai;
    }
</style>
<body>
<body>
  <div class="container mx-auto h-full">
    <div class="w-32 mx-auto pt-10">
      <img src="{{ asset('img/logo.png') }}" alt="logo">
    </div>
    <hr class="mt-10"/>
    <nav class="flex justify-center gap-2 my-1 font-medium">
      <a href="#" class="px-3 py-4 border-b-4 border-white  hover:border-orange">
        หน้าแรก
      </a>
      <a href="#" class="px-3 py-4 border-b-4 border-white hover:border-orange">
        ณัฐชา
      </a>
      <a href="#" class="px-3 py-4 border-b-4 border-white hover:border-orange">
        ทีมงาน
      </a>
      <a href="#" class="px-3 py-4 border-b-4 border-white hover:border-orange">
        แกลลอรี่
      </a>
    </nav>
    @yield('content')
  </div>
  <footer class="bg-navy h-52">
    <div class="container mx-auto grid grid-cols-12 h-full">
      <div class="col-start-2 col-span-3 flex items-center">
        <img src="{{ asset('img/logo.png') }}" alt="" class="w-5/12 my-auto mx-auto">
      </div>
    </div>
  </footer>
</body>
</html>
