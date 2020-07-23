@extends('layouts.app')
@section('content')
    <main class="profile-wrapper">
        <h1 class="sr-only">Пароль</h1>
        <div class="row sticky-top bg-white">
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper font-weight-bold border-bottom">
                @include('includes.profile-directories', ['step'=>'password'])
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-4">
                <h2 class="profile-title">Сменить пароль</h2>
                <div class="alert alert-primary text-center" role="alert">
                    Пароль успешно изменен.
                </div>
                <form class="profile-password-form" method="post" action="#">
                    <div class="form-group">
                        <label class="" for="profile-password">Текущий пароль</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input class="form-control" type="password" id="profile-password" required>
                        </div>
                        <div class="invalid-feedback profile-password-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group">
                        <label class="" for="profile-new-password">Новый пароль</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <input class="form-control" type="password" id="profile-new-password" required>
                        </div>
                        <div class="invalid-feedback profile-new-password-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group">
                        <label class="" for="profile-password-repeat">Повторите пароль</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <input class="form-control" type="password" id="profile-password-repeat" required>
                        </div>
                        <div class="invalid-feedback profile-password-repeat-invalid-feedback">Пароли не совпадают</div>
                    </div>
                    <button class="btn btn-primary mt-1" type="submit">Изменить пароль</button>
                </form>
            </div>
        </div>
    </main>
@stop
