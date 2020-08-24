@extends('layouts.default')
@section('content')
    <main class="container main-login">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                @include('includes.logo-name')
                <form class="registration-form needs-validation" method="post" action="#" novalidate>
                    <div class="form-group">
                        <label class="sr-only" for="register-input-email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                            <input class="form-control" type="email" id="register-input-email" placeholder="Email"
                                   required autofocus>
                        </div>
                        <div class="invalid-feedback register-email-invalid-feedback">Пожалуйста, введите правильный адрес
                            email</div>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label class="" for="profile-email">Email</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="input-group-prepend">--}}
{{--                                <span class="input-group-text">--}}
{{--                                    <i class="fa fa-envelope"></i>--}}
{{--                                </span>--}}
{{--                            </div>--}}
{{--                            <input class="form-control profile-input" type="email" id="profile-email" placeholder="Email" required>--}}
{{--                        </div>--}}
{{--                        <div class="invalid-feedback login-email-invalid-feedback">Пожалуйста, введите правильный адрес email</div>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label class="sr-only" for="register-input-password">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input class="form-control" type="password" id="register-input-password" placeholder="Пароль"
                                   required>
                        </div>
                        <div class="invalid-feedback register-password-invalid-feedback">Пожалуйста, введите верный пароль</div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="register-password-repeat">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input class="form-control" type="password" id="register-password-repeat" placeholder="Повтор пароля" required>
                        </div>
                        <div class="invalid-feedback register-password-repeat-invalid-feedback">Введенные пароли не совпадают</div>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="input-newpassword-repeat">Повторите пароль:</label>--}}
{{--                        <div class="input-group">--}}
{{--                            <div class="input-group-prepend">--}}
{{--                                <span class="input-group-text"><i class="fa fa-lock"></i></span>--}}
{{--                            </div>--}}
{{--                            <input class="form-control" type="password" id="input-newpassword-repeat" placeholder="Пароль" required>--}}
{{--                            <div class="invalid-feedback">Введенные значения не совпадают. Попробуйте еще раз.</div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="form-group form-items d-flex justify-content-between">
                        <a class="text-decoration-none mr-3" href="{{ route('users.login') }}">
                            <ins>Перейти на страницу входа</ins>
                        </a>
                        <a class="text-decoration-none" href="{{ route('users.reset-password') }}">
                            <ins>Восстановить пароль</ins>
                        </a>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary text-uppercase w-100" type="submit"
                                data-href="{{ route('users.login') }}">Зарегистрироваться</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@stop
