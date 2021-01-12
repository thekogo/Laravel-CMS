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

</style>
<body class="flex flex-col justify-between h-screen bg-gray-50">
  <div class="md:container mx-auto h-full flex flex-col justify-center">

    <div class="container mx-auto flex flex-col justify-center">
        <div class="flex justify-center">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="grid grid-cols-12 items-center py-2">
                    <label for="username" class="text-xl col-span-4">Username : </label>
                    <input type="text" id="username" name="username"
                        class="col-span-8 w-64 py-2 px-4 rounded-md @error('username')
                            {{ "border border-red-500" }}
                        @enderror"
                    >
                    @error('username')
                        <strong class="col-span-12 text-red-600">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="grid grid-cols-12 items-center">
                    <label for="password" class="text-xl col-span-4">Password : </label>
                    <input type="password" id="password" name="password"
                        class="col-span-8 w-64 py-2 px-4 rounded-md @error('username')
                            {{ "border border-red-500" }}
                        @enderror"
                    >
                    @error('password')
                        <strong class="col-span-12 text-red-600">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <button type="submit" class="border border-yellow-400 px-4 py-2 mt-2 bg-yellow-300">
                    {{ __('Login') }}
                </button>

                {{-- <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div> --}}
            </form>
        </div>
    </div>
  </div>
</body>
</html>
