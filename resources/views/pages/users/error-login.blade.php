@extends('layouts.default')
@section('content')
    <main class="container">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                <div class="w-100 mx-auto mb-4">
                    <h1 class="sr-only">Восстановление пароля</h1>
                </div>
                <div class="alert alert-primary text-center mx-auto col-sm-9 col-lg-6" role="alert">
                    Вы перешли по неверной ссылке.
                </div>
                <div class="mb-3 text-center mx-auto">
                    <a class="text-decoration-none text-uppercase btn button-login-return main-login"
                       href="{{ route('users.login') }}">
                        ← На страницу входа
                    </a>
                </div>
                <div class="text-center mx-auto">
                    <button type="submit" class="btn btn-primary text-uppercase main-login"
                            data-href="{{ route('users.reset-password') }}">Восстановить пароль</button>
                </div>
            </div>
        </div>
    </main>
@stop



""
