@extends('layouts.default')
@section('content')
<main class="container main-login">
    <div class="row h-100">
        <div class="col-sm-12 my-auto mx-auto">
            <div class="mx-auto mb-4">
                <h1 class="sr-only">Установка нового пароля</h1>
            </div>
            <h2 class="text-left mb-4 new-password-text">Введите новый пароль</h2>
            <form class="needs-validation" method="post" action="#" novalidate>
                <div class="form-group">
                    <label for="input-newpassword">Новый пароль:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input class="form-control" type="password" id="input-newpassword" placeholder="Пароль" autofocus
                               required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="input-newpassword-repeat">Повторите пароль:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input class="form-control" type="password" id="input-newpassword-repeat" placeholder="Пароль" required>
                        <div class="invalid-feedback">Введенные значения не совпадают. Попробуйте еще раз.</div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary text-uppercase w-100" type="submit"
                            data-href="{{ route('users.new-password-login') }}">Установить новый пароль</button>
                </div>
            </form>
        </div>
    </div>
</main>
@stop
