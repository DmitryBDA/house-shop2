@extends('layouts.user.main')


@section('custom_css')

@endsection

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area mb-140">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs_content">
                        <h3>Авторизация</h3>
                        <p>pleasure rationally encounter consequences
                            over the way are extremely painful</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--reliant login area start-->
    <div class="reliant_login_area">
        <div class="container">
            <div class="reliant_login_container">
                <div class="row align-items-center no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="reliant_login_form">
                            <div class="reliant_login_title">
                                <h2>Войти в Reliant</h2>
                                <p>Pleasure rationally encounter way to find painful very
                                    easily from wide range of so you can buy</p>
                            </div>
                            <div class="login_form_action">
                                <form method="post" action="{{route('login')}}">
                                    @csrf
                                    <div class="login_form_input top">
                                        <input name="email" placeholder="Введите email" type="text">
                                    </div>
                                    <div class="login_form_input">
                                        <input name="password" placeholder="Введите пароль" type="password">
                                    </div>
                                    <div class="remember_forgotpassword">
                                        <div class="remember_me">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">Запомнить меня</label>
                                            <span class="checkmark"></span>
                                        </div>
                                        <div class="forgot_password">
                                            <a href="#">Забыл пароль</a>
                                        </div>
                                    </div>
                                    <div class="login_resigter">
                                        <button type="submit" class="active link"  value="">Войти</button>
                                        <a class="next" href="{{route('register')}}">Регистрация</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="reliant_login_thumb">
                            <img src="user/assets/img/others/login.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--reliant login area end-->


    <!--brand area start-->
    <div class="brand_area brand_login">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container d-flex justify-content-between flex-wrap">
                        <div class="single_brand">
                            <a class="primary_img" href="#"><img src="user/assets/img/brand/brand1.png" alt=""></a>
                            <a class="secondary_img" href="#"><img src="user/assets/img/brand/brand-hover1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary_img" href="#"><img src="user/assets/img/brand/brand2.png" alt=""></a>
                            <a class="secondary_img" href="#"><img src="user/assets/img/brand/brand-hover2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary_img" href="#"><img src="user/assets/img/brand/brand3.png" alt=""></a>
                            <a class="secondary_img" href="#"><img src="user/assets/img/brand/brand-hover3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary_img" href="#"><img src="user/assets/img/brand/brand4.png" alt=""></a>
                            <a class="secondary_img" href="#"><img src="user/assets/img/brand/brand-hover4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a class="primary_img" href="#"><img src="user/assets/img/brand/brand5.png" alt=""></a>
                            <a class="secondary_img" href="#"><img src="user/assets/img/brand/brand-hover5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->
@endsection
{{--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
