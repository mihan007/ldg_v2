@extends('layouts.default')
@section('content')
    <main class="container main-login">
        <h3 class="sr-only">Вход в рабочую область после принятия приглашения в рабочую область</h3>
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                @include('includes.logo-name')
                <div class="alert alert-primary col-sm-12 mx-auto">
                    Приглашение в рабочую область {название компании} принято. Почта {почта} уже зарегистрирована в
                    системе. Войдите, используя логин и пароль.
                </div>
                <form class="login-form needs-validation" method="post" action="#" novalidate>
                    @include('includes.login-form')
                    <div class="form-group">
                        <button class="btn btn-primary text-uppercase w-100" type="submit"
                                data-href="{{ route('settings.workspace') }}">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@stop
