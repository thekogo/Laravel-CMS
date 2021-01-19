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



    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('stylesheet')
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

</style>
<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    <!--Nav-->
    <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

        <div class="flex flex-wrap items-center justify-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white items-center">
                <a href="#" class="flex items-center justify-center">
                    <span class="text-xl pl-2"><img src="{{ asset('img/logo.png') }}" alt="" class="w-10"></span>
                </a>
            </div>

            <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">

            </div>

            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="#">Active</a>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">link</a>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> <span class="pr-2"><i class="em em-robot_face"></i></span> {{ Auth::user()->username }} <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                            <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible w-44">
                                <a href="{{ route('change_password.index') }}" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline flex gap-4 items-center"><i class="fa fa-user fa-fw items-center"></i>Change Password</a>
                                <a href="{{ route('setting.index') }}" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline flex gap-4"><i class="fa fa-cog fa-fw"></i> Settings</a>
                                <a href="{{ url('logout') }}" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline flex gap-4"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>


    <div class="flex flex-col md:flex-row">

        <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">

            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="{{ url('admin') }}" class="block py-1 md:py-3 pl-1 align-middle  no-underline {{ (request()->is('admin')) ? '' : 'hover:' }}text-white border-b-2 border-gray-800 {{ (request()->is('admin')) ? '' : 'hover:' }}border-orange">
                            <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base hover:text-white {{ (request()->is('admin')) ? 'text-white md:text-white' : 'text-gray-600 md:text-gray-400:' }} block md:inline-block">Home</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{ route('posts.index') }}" class="block py-1 md:py-3 pl-1 align-middle  no-underline {{ (request()->is('admin/posts/*')) ? '' : 'hover:' }}text-white border-b-2 border-gray-800 {{ (request()->is('admin/posts/*')) ? '' : 'hover:' }}border-orange">
                            <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base hover:text-white {{ (request()->is('admin/posts/*')) ? 'text-white md:text-white' : 'text-gray-600 md:text-gray-400:' }} block md:inline-block">Posts</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{ route('tags.index') }}" class="block py-1 md:py-3 pl-1 align-middle  no-underline {{ (request()->is('admin/tags/*')) ? '' : 'hover:' }}text-white border-b-2 border-gray-800 {{ (request()->is('admin/tags/*')) ? '' : 'hover:' }}border-orange">
                            <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs hover:text-white {{ (request()->is('admin/tags/*')) ? 'text-white md:text-white' : 'text-gray-600 md:text-gray-400:' }} md:text-base block md:inline-block">Tags</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="{{ route('galleries.index') }}" class="block py-1 md:py-3 pl-1 align-middle  no-underline {{ (request()->is('admin/galleries/*')) ? '' : 'hover:' }}text-white border-b-2 border-gray-800 {{ (request()->is('admin/galleries/*')) ? '' : 'hover:' }}border-orange">
                            <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-600"></i><span class="pb-1 md:pb-0 text-xs hover:text-white {{ (request()->is('admin/galleries/*')) ? 'text-white md:text-white' : 'text-gray-600 md:text-gray-400:' }} md:text-base block md:inline-block">Galleries</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1 hover:text-white">
                        <a href="{{ route('setting.index') }}" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle no-underline {{ (request()->is('admin/setting/*')) ? '' : 'hover:' }}text-white border-b-2 border-gray-800 {{ (request()->is('admin/setting/*')) ? '' : 'hover:' }}border-orange">
                            <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base hover:text-white {{ (request()->is('admin/setting/*')) ? 'text-white md:text-white' : 'text-gray-600 md:text-gray-400:' }} block md:inline-block">Setting</span>
                        </a>
                    </li>
                </ul>
            </div>


        </div>

        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

            @yield('content')

        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')

    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>
</body>
</html>
