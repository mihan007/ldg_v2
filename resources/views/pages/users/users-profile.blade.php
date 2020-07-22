@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <h1 class="sr-only">Данные пользователя</h1>
        <div class="row sticky-top bg-white">
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper font-weight-bold">
                <h2 class="sr-only">Профиль пользователя</h2>
                @include('includes.profile-directories', ['step'=>'profile'])
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h2 class="sr-only">Имя и электронная почта пользователя</h2>
                <form class="profile-form" method="post" action="#">
                    <div class="form-group">
                        <label class="sr-only" for="profile-users-name">Имя</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" id="profile-users-name" placeholder="Имя Фамилия" required>
                            <div class="invalid-feedback login-password-invalid-feedback">Сообщение об ошибке</div>
                        </div>
                    </div>
                <div class="form-group">
                    <label class="sr-only" for="profile-email">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input class="form-control" type="email" id="profile-email" placeholder="Email" required>
                        <div class="invalid-feedback login-email-invalid-feedback">Пожалуйста, введите правильный адрес email</div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="sr-only" for="input-email">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input class="form-control" type="email" id="input-email" placeholder="Email" required>
                        <div class="invalid-feedback login-email-invalid-feedback">Пожалуйста, введите правильный адрес email</div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="input-password">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <input class="form-control" type="password" id="input-password" placeholder="Пароль" required>
                        <div class="invalid-feedback login-password-invalid-feedback">Пожалуйста, введите верный пароль</div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </main>
@stop
