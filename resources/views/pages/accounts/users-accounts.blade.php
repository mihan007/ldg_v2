@extends('layouts.app')
@section('content')
    <main class="page-wrapper position-relative">
        <h1 class="sr-only">Настройки аккаунтов.Пользователи.</h1>
                <div class="row sticky-top bg-white">
                    <div class="col-md-12 offset-block"></div>
                    <div class="col-md-12 settings-wrapper font-weight-bold border-bottom">
                        <h2 class="sr-only">Блок навигации по страницам настроек аккаунтов и управления настройками</h2>
                        @include('includes.account-settings-links', ['step'=>'users'])
                        <div>
                            <a class="btn btn-primary modal-button" href=".js-invite-modal" role="button"
                               data-toggle="modal">
                                Пригласить
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 settings-wrapper justify-content-between">
                        <div class="company-title-wrapper">
                            <p class="company-title font-weight-bold">Информада</p>
                            <button class="btn company-title-correct-button function-button" aria-label="Редактировать данные">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </div>
                        @include('includes.search-form')
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="sr-only">Таблица данных пользователей компании"</h2>
                        <div class="users-table-wrapper mb-5">
                            <table class="table users-table common-table users-grid" data-offset="173">
                                <thead>
                                <tr class="table-grey text-center">
                                    <th class="rounded-table-left activity-col accounts-activity-col" data-toggle="tooltip"
                                        data-placement="top"
                                        data-delay='{"show":"1000", "hide":"1000"}' title="Включает / выключает доступ
                                        пользователя к рабочей области или аккаунту">
                                        Активность</th>
                                    <th class="accounts-name-col" scope="col">
                                        Имя</th>
                                    <th class="accounts-email-col" scope="col">
                                        Почта</th>
                                    <th class="accounts-role-col" scope="col">Роль</th>
                                    <th class="accounts-date-col" scope="col">Дата</th>
                                    <th class="accounts-buttons-col rounded-table-right"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="activity-col accounts-activity-col text-center">
                                        <div class="custom-control custom-switch">
                                            <input class="custom-control-input custom-control-input-success"
                                                   id="users-active-switch1" type="checkbox" checked>
                                            <label class="custom-control-label" for="users-active-switch1"
                                                   aria-label="Доступ пользователя к рабочей области или аккаунту
                                                   включен/выключен"></label>
                                        </div>
                                    </td>
                                    <td class="accounts-name-col text-center">Виктор Емельянов</td>
                                    <td class="accounts-email-col text-center">1@troiza.net </td>
                                    <td class="accounts-role-col text-center">Администратор</td>
                                    <td class="accounts-date-col text-center">Приглашение отправлено. 22.04.2019 13.00
                                    </td>
                                    <td class="accounts-buttons-col text-center">
                                        <a class="btn users-correct-button function-button"
                                           href=".js-settings-wizard" data-toggle="modal" role="button" aria-label="Редактировать данные">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn users-reset-button function-button" aria-label="Удалить доступ"
                                           href=".js-reset-modal" role="button" data-toggle="modal">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @include('includes.modal.reset-modal', [
                    'messageHeader' => 'Удаление пользователя',
                    'messageBody' => 'Вы действительно хотите удалить пользователя?'
                ])
                @include('includes.modal.invite-modal')
            </main>
@stop
