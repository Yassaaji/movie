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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"rel="stylesheet">

    {{-- css --}}
    <link rel="stylesheet" href="{{ URL::asset('css/register.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="overflow-hidden" style="background-image: url('img/guest_login.jpg'); background-size:cover;">
    <div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="register-forms">
                    <div class="register-form px-5">
                        <div class="form-register px-5">
                            <h1 class="text-center text-white mb-4">Register</h1>
                            <form method="POST" action="{{ route('insertRegister') }}">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="name"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}"  autocomplete="name" autofocus
                                        id="floatingInput" placeholder="name">
                                    <label for="floatingInput">name</label>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}"  autocomplete="email"
                                            autofocus id="floatingInput" placeholder="email">
                                        <label for="floatingInput">Email</label>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        value="{{ old('password') }}"  autocomplete="password" autofocus
                                        id="floatingPassword" placeholder="password">
                                    <label for="floatingPassword">Password</label>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control " id="password-confirm"
                                        placeholder="confirm password" name="password_confirmation"
                                        autocomplete="new-password">
                                    <label for="password-confirm">Confirm Password</label>

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-0 ">
                                    <div class="d-flex flex-column">
                                        <button type="submit" class="btn btn-primary text-white mb-2 shadow">{{ __('Register') }}</button>
                                        <h6 class="text-center text-white mt-2"> Already Have Account? <a class="text-decoration-none" href="{{ url('login') }}">Sign In</a></h6>
                                        {{-- <h6 class="text-center text-white mt-2"> Already Have Account? <a class="text-decoration-none" href="{{route('login')}}">Sign In</a></h6> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img style="width: 700px; height:auto" src="{{ asset('./img/spiderman.jpg') }}" alt="">
            </div>
        </div>
    </div>
</body>

</html>
