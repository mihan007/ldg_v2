@extends('layouts.default')
@section('content')
    <main class="container w-30">
        <div class="row align-items-center justify-content-center align-content-center h-100">
            <div class="col-sm-12 my-auto">
                <div class="col-auto mx-auto text-center">
                    <picture>
                        <source media="(min-width: 768px)" srcset="/img/logo-desktop.gif">
                        <img class="logo-image" src="/img/logo.png" width="150" height="114" alt="Логотип проекта Лидогенератор">
                    </picture>
                </div>
                <div class="w-100 mx-auto mb-4">
                    <h1 class="text-uppercase font-weight-bold text-center title">Лидогенератор</h1>
                </div>
                <form>
                    <div class="form-group">
                        <label class="sr-only" for="inputEmail">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input class="form-control" type="email" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="inputPassword">Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input class="form-control" type="password" id="inputPassword" placeholder="Пароль">
                        </div>
                    </div>
                    <div class="form-group form-items d-flex justify-content-between">
                        <label class="form-check-label">
                            <input class="mr-2" type="checkbox" checked>Запомнить меня
                        </label>
                        <a class="text-decoration-none" href="#">
                            <ins>Восстановить пароль</ins>
                        </a>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary text-uppercase w-100" type="submit">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@stop
