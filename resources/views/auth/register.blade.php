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
                        <h3>Регистраця</h3>
                        <p>pleasure rationally encounter consequences
                            over the way are extremely painful</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--reliant login area start-->
    <div class="reliant_login_area reliant_register">
        <div class="container">
            <div class="reliant_login_container register_page_inner">
                <div class="row align-items-center no-gutters">
                    <div class="col-lg-7">
                        <div class="reliant_login_form">
                            <div class="reliant_login_title">
                                <h2>Создать аккаунт</h2>
                                <p>Pleasure rationally encounter way to find painful very
                                    easily from wide range of so you can buy</p>
                            </div>
                            <div class="login_form_action">
                                <form method="post" action="{{route('register')}}">
                                    @csrf
                                    <div class="login_form_input mb-45">
                                        <input name="name" placeholder="Введите имя" type="text" required>
                                    </div>
                                    <div class="login_form_input mb-45">
                                        <input name="email" placeholder="Введите email" type="text" required>
                                    </div>
                                    <div class="login_form_input mb-45">
                                        <input name="password" placeholder="Введите пароль" type="password" required>
                                    </div>
                                    <div class="login_form_input">
                                        <input name="password_confirmation" placeholder="Подтверждение пароля" type="password" required>
                                    </div>
                                    <div class="remember_forgotpassword">
                                        <div class="remember_me">
                                            <input id="remember" type="checkbox" required>
                                            <label for="remember">Я согласен с  <a href="#">Условиями соглашения</a></label>
                                            <span class="checkmark"></span>
                                        </div>
                                    </div>
                                    <div class="login_resigter resigter_active">
                                        <button type="submit" class="active link" href="{{route('register')}}">Регистрация</button>
                                        <p><span>Уже есть аккаунт?</span> <a href="{{route('login')}}">Войти</a> </p>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="reliant_login_thumb">
                            <img src="user/assets/img/others/register.png" alt="">
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
