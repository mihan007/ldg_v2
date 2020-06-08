@extends('layouts.default')
@section('content')
    <main class="container">
        <div class="row h-100">
            <div class="col-sm-12 my-auto">
                <div class="w-100 mx-auto mb-4">
                    <h1 class="font-weight-bold text-center reset-title">Восстановление пароля</h1>
                </div>
                <div class="alert alert-primary text-center mx-auto col-lg-8" role="alert">
                    Вы перешли по устаревшей ссылке. Выслать инструкцию по сбросу пароля повторно?
                </div>
                <div class="text-center mx-auto">
                    <a class="btn btn-primary text-uppercase col-sm-6 col-lg-4"
                            href="{{ route('users.new-info-alert') }}">Выслать</a>
                </div>
            </div>
        </div>
    </main>
@stop
