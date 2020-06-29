@extends('layouts.default')
@section('content')
    <main class="container main-login">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                @include('includes.logo-name')
                <div class="alert alert-primary col-sm-12 mx-auto">
                    Новый пароль успешно установлен. Используйте его для входа.
                </div>
                <form class="login-form needs-validation" method="post" action="#" novalidate>
                    @include('includes.login-form')
                    <div class="form-group">
                        <button class="btn btn-primary text-uppercase w-100" type="submit"
                                data-href="{{ route('companies.report') }}">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@stop
