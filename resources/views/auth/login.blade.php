@extends('layouts.app')

@section('content')
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1920x400.jpg" style="background-image: url(&quot;assets/images/breadcrumb/bg/1-1-1920x400.jpg&quot;);">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item text-night-rider">
                        <h2 class="breadcrumb-heading">Login &amp; Register Page</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home/</a>
                            </li>
                            <li>Login | Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-register-area section-space-y-axis-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="login-form">
                            <h4 class="login-title">Login</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Adres E-mail*</label>
                                    <input type="email" placeholder="Adres E-mail"  name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <label>Hasło</label>
                                    <input type="password" placeholder="Hasło" name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="col-md-8">
                                    <div class="check-box">
                                        <input type="checkbox" id="remember_me" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember_me">Zapamiętaj mnie</label>

                                    </div>
                                </div>
                                <div class="col-md-4 pt-1 mt-md-0">
                                    @if (Route::has('password.request'))
                                        <div class="forgotton-password_info">
                                            <a href="{{ route('password.request') }}"> Zapomniane hasło? </a>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-lg-12 pt-5 d-flex justify-content-between">
                                    <button type="submit" class="btn btn-custom-size lg-size btn-primary">Zaloguj sie</button>
                                    <a href="{{route('register')}}" class="btn btn-custom-size lg-size btn-primary">Zarejestruj się</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
