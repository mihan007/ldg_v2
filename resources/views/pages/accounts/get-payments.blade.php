@extends('layouts.app')
@section('content')
    <main class="page-wrapper show-toast position-relative">
        <h1 class="sr-only">Настройки аккаунтов.Пользователи.</h1>
        <div class="row sticky-top bg-white">
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper font-weight-bold border-bottom">
                <h2 class="sr-only">Блок навигации по страницам настроек аккаунтов и управления настройками</h2>
                @include('includes.account-settings-links', ['step'=>'payments'])
                <div>
                    <a class="btn btn-primary wizard-button" href=".js-payment-wizard" role="button"
                       data-toggle="modal">
                        Добавить настройки
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
{{--                    <div class="col-md-12 subcategory-settings-wrapper">--}}
{{--                        <h2 class="sr-only">Способы платежей</h2>--}}
{{--                        <div>--}}
{{--                            <a class="directory-button active" href="{{ route('accounts.get-payments') }}">--}}
{{--                               Онлайн-платеж</a>--}}
{{--                            <a class="directory-button active"--}}
{{--                               href="{{ route('accounts.project') }}">Расчетный счет</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
            <div class="col-md-12 mx-auto">
                <h2 class="sr-only">Таблица способов платежей"</h2>
                <div class="payment-table-wrapper mb-5 mt-3">
                    <table class="table payment-table common-table">
                        <thead>
                        <tr class="table-grey text-center">
                            <th class="rounded-table-left activity-col payments-activity-col"
                                data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Включает / выключает способ
                                платежа">Активность</th>
                            <th class="payment-col rounded-table-right" scope="col">
                                Способ платежа</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="activity-col accounts-activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="active-switch"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="active-switch"
                                           aria-label="Доступ пользователя к рабочей области или аккаунту
                                           включен/выключен"></label>
                                </div>
                            </td>
                            <td class="accounts-name-col text-center">Онлайн-платеж</td>
                        </tr>
                        <tr>
                            <td class="activity-col accounts-activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="active-switch"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="active-switch"
                                           aria-label="Доступ пользователя к рабочей области или аккаунту
                                           включен/выключен"></label>
                                </div>
                            </td>
                            <td class="accounts-name-col text-center">Расчетный счет</td>
                        </tr>
                        <tr>
                            <td class="activity-col accounts-activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="active-switch"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="active-switch"
                                           aria-label="Доступ пользователя к рабочей области или аккаунту
                                           включен/выключен"></label>
                                </div>
                            </td>
                            <td class="accounts-name-col text-center">Тинькофф Банк</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('includes.payment-wizard')
    </main>
@stop
