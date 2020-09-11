@extends('layouts.app')
@section('content')
    <main class="page-wrapper position-relative">
        <h1 class="sr-only">Настройки аккаунтов.Пользователи.</h1>
        <div class="row sticky-top bg-white">
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper font-weight-bold border-bottom">
                <h2 class="sr-only">Блок навигации по страницам настроек аккаунтов и управления настройками</h2>
                @include('includes.account-settings-links', ['step'=>'payments'])
                <div>
                    <a class="btn btn-primary wizard-button" href=".js-payment-wizard" role="button"
                       data-toggle="modal">Подключить платежи
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
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
                            <th class="payment-type-col" scope="col">Способ платежа</th>
                            <th class="accounts-buttons-col rounded-table-right"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="activity-col payments-activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="payment-active-switch1"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="payment-active-switch1"
                                           aria-label="Доступ пользователя к рабочей области или аккаунту
                                           включен/выключен"></label>
                                </div>
                            </td>
                            <td class="payment-type-col text-center">Яндекс Деньги</td>
                            <td class="accounts-buttons-col text-center">
                                <a class="btn payment-correct-button function-button"
                                   href=".js-payment-wizard" data-toggle="modal" role="button" aria-label="Редактировать данные">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a class="btn payment-reset-button function-button" aria-label="Удалить доступ"
                                   href=".js-payment-reset-modal" role="button" data-toggle="modal">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="activity-col payments-activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="payment-active-switch2"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="payment-active-switch2"
                                           aria-label="Доступ пользователя к рабочей области или аккаунту
                                           включен/выключен"></label>
                                </div>
                            </td>
                            <td class="payment-type-col text-center">Расчетный счет</td>
                            <td class="accounts-buttons-col text-center">
                                <a class="btn payment-correct-button function-button"
                                   href=".js-payment-wizard" data-toggle="modal" role="button" aria-label="Редактировать данные">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a class="btn payment-reset-button function-button" aria-label="Удалить доступ"
                                   href=".js-payment-reset-modal" role="button" data-toggle="modal">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @include('includes.no-data')
        </div>
        @include('includes.payment-wizard')
        @include('includes.modal.payment-reset-modal')
    </main>
@stop
