<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        {{-- css --}}
        <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="overflow-hidden" style="background-image: url('img/guest_login.jpg'); background-size:cover;">
        <div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="login-forms">
                        <div class="login-form px-5">
                            <div class="form-login px-5">
                                <h1 class="text-center">LOGIN</h1>
                                <form method="post" action="{{ route('authenticate') }}">
                                    @csrf
                                    <div class="form-floating mb-3 mt-4 " >
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="floatingInput"   placeholder="Email" name="email"   autocomplete="email" autofocus>
                                        <label class="text-dark" for="floatingInput">{{ __('Email Address') }}</label>
                                        @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>


                                    <div class="form-floating mb-2">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" name="password" placeholder="Password"   autocomplete="current-password">
                                        <label class="text-dark" for="floatingPassword">Password</label>
                                        @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        @if (Route::has('password.request'))
                                        <a class= "text-decoration-none text-white" href="{{route('password.request')}}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
                                    </div>

                                    <div class="row mb-0">
                                        <div class="d-flex flex-column">
                                            <button type="submit" class="btn btn-primary text-white mb-2 shadow">
                                                {{ __('Login') }}
                                            </button>
                                            <p class="text-center">Don't have an account? <a class="text-decoration-none"href="{{ route('register') }}">Sign Up!</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img style="width: 670px; height:700px;" src="{{ asset('./img/spiderman.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </body>
</html>
