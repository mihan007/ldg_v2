@extends('layouts.app')
@section('content')
    <main class="profile-wrapper">
        <h1 class="sr-only">Профиль пользователя</h1>
        <div class="row sticky-top bg-white">
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper font-weight-bold border-bottom">
                @include('includes.profile-directories', ['step'=>'profile'])
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-4">
                <h2 class="profile-title">Данные профиля</h2>
                <form class="profile-form" method="post" action="#">
                    <div class="form-group">
                        <label class="" for="profile-users-name">Имя</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" id="profile-users-name" placeholder="Имя" required>
                        </div>
                        <div class="invalid-feedback login-password-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group">
                        <label class="" for="profile-users-surname">Фамилия</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" id="profile-users-surname" placeholder="Фамилия" required>
                        </div>
                        <div class="invalid-feedback login-password-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                <div class="form-group">
                    <label class="" for="profile-email">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input class="form-control" type="email" id="profile-email" placeholder="Email" required>
                    </div>
                    <div class="invalid-feedback login-email-invalid-feedback">Пожалуйста, введите правильный адрес email</div>
                </div>
                </form>
            </div>
        </div>
    </main>
@stop