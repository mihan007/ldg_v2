@extends('layouts.default')
@section('content')
    <main class="container">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                <div class="w-100 mx-auto mb-4">
                    <h1 class="font-weight-bold text-center reset-title">Восстановление пароля</h1>
                </div>
                <div class="alert alert-primary text-center mx-auto col-sm-9 col-lg-6 main-login" role="alert">
                    Вы перешли по неверной ссылке.
                </div>
                <div class="text-center mx-auto mb-3 ">
                    <a class="btn btn-primary text-uppercase main-login"
                       href="{{ route('users.reset-password') }}">Восстановить пароль</a>
                </div>
                <div class="text-center mx-auto">
                    <a class="text-decoration-none text-uppercase btn button-login-return main-login"
                       href="{{ route('users.login') }}">
                        ← На страницу входа
                    </a>
                </div>
            </div>
        </div>
    </main>
@stop



""
