<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

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

    .pagination {
      list-style-type: none;
      margin: auto;
      display: flex;
      justify-content: center;
    }

    .page-item {
      display: inline-block;
      padding: 10px 20px;
      border: 1px solid whitesmoke;
      font-weight: 500;
      border-radius: 4px
    }

    .page-item:hover {
      background-color: rgb(253, 196, 91);
    }

    .disabled {
      background-color: whitesmoke;
    }

    .active {
      background-color: rgb(253, 196, 91);
    }

    ol li {
        list-style-type: decimal;
    }

</style>
<body class="flex flex-col justify-between h-screen">
  <div class="md:container mx-auto">
    <div class="w-32 mx-auto pt-10">
      <img src="{{ asset('img/logo.png') }}" alt="logo">
    </div>
    <hr class="mt-10"/>
    <nav class="flex justify-center gap-2 my-1 font-medium">
      <a href="{{ route('index') }}" class="px-3 py-4 border-b-4 border-white  hover:border-orange">
        หน้าแรก
      </a>
      <a href="{{ route('about') }}" class="px-3 py-4 border-b-4 border-white hover:border-orange">
        ณัฐชา
      </a>
      <a href="{{ route('team') }}" class="px-3 py-4 border-b-4 border-white hover:border-orange">
        ทีมงาน
      </a>
      <a href="{{ route('galleries') }}" class="px-3 py-4 border-b-4 border-white hover:border-orange">
        แกลลอรี่
      </a>
    </nav>
    @yield('content')
  </div>
  <footer class="bg-navy text-white lg:py-5">
    <div class="md:container mx-auto lg:grid lg:grid-cols-12 lg:gap-4 h-full">
      <div class="col-start-2 col-span-2 flex items-center m-10 lg:m-0">
        <img src="{{ asset('img/logo.png') }}" alt="" class="lg:w-5/12 w-3/12 my-auto mx-auto">
      </div>
      <div class="col-span-5 flex items-center">
        <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta adipisci quo assumenda? Doloremque animi ducimus repudiandae, sapiente, laboriosam illo asperiores molestiae a quam, nulla deleniti repellendus at minus cumque quasi?</p>
      </div>
      <div class="col-span-3 flex flex-col justify-between py-5">
        <div class="flex gap-4">
          <img src="{{ asset('img/facebook.png') }}" alt="Facebook Logo" class="w-10">
          <img src="{{ asset('img/youtube.png') }}" alt="Facebook Logo" class="w-10">

        </div>
        <div>
        <a href="#">หน้าแรก</a> |
        <a href="#">ณัฐชา</a> |
        <a href="#">ทีมงาน</a> |
        <a href="#">แกลลอรี่</a>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
