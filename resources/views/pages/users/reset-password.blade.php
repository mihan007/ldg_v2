@extends('layouts.default')
@section('content')
    <main class="container">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                <div class="mx-auto mb-4">
                    <h1 class="font-weight-bold text-center reset-title">Восстановление пароля</h1>
                </div>
                <p class="text-center">Введите адрес электронной почты для восстановления пароля</p>
                <form class="mx-auto needs-validation reset-form" method="post" action="#" novalidate>
                    <div class="form-group">
                        <label class="sr-only" for="input-reset-email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input class="form-control" type="email" id="input-reset-email" placeholder="Email" required>
                            <div class="invalid-feedback">Пожалуйста, введите верный адрес электронной почты</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary text-uppercase w-100"
                                data-href="{{ route('users.reset-alert') }}">Сбросить пароль</button>
                    </div>
                    <div class="form-group">
                    <a class="text-decoration-none text-uppercase btn w-100 button-login-return"
                       href="{{ route('users.login') }}">
                        ← На страницу входа
                    </a>
                    </div>
                </form>
            </div>
        </div>
    </main>
@stop
