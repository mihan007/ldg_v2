@extends('layouts.default')
@section('content')
    <main class="container main-login">
        <div class="row h-100">
            <div class="col-sm-12 my-auto mx-auto">
                <div class="col-auto mx-auto text-center">
                    <picture>
                        <source media="(min-width: 768px)" srcset="/img/logo-desktop.gif">
                        <img class="logo-image" src="/img/logo.png" width="150" height="114" alt="Логотип проекта Лидогенератор">
                    </picture>
                </div>
                <div class="w-100 mx-auto mb-4">
                    <h1 class="text-uppercase font-weight-bold text-center title-login">Лидогенератор</h1>
                </div>
                <h2 class="text-center mb-4 new-password-text">Регистрация</h2>
                <form class="needs-validation" method="post" action="/" novalidate>
                    <div class="form-group">
                        <label for="subscription-email">Почта:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input class="form-control" type="email" id="subscription-email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subscription-password">Придумайте пароль:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input class="form-control" type="password" id="subscription-password" placeholder="Пароль"
                                   required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subscription-password-repeat">Повторите пароль:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input class="form-control" type="password" id="subscription-password-repeat" placeholder="Пароль"
                                   required>
                            <div class="invalid-feedback">Введенные значения не совпадают. Попробуйте еще раз.</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="subscription-login-text">Уже есть аккаунт?</p>
                        <a class="subscription-login-link" href="{{ route('work.orders') }}">Войти</a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary text-uppercase w-100" type="submit"
                                data-href="{{ route('companies.dashboard') }}">Зарегистрироваться</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@stop
