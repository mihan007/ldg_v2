@extends('layouts.app')
@section('content')
    <main class="page-wrapper show-toast position-relative">
        <h1 class="sr-only">Настройки аккаунтов.Проекты.</h1>
                <div class="row sticky-top bg-white">
                    <div class="col-md-12 offset-block"></div>
                    <div class="col-md-12 settings-wrapper font-weight-bold border-bottom">
{{--                        <h2 class="sr-only">Блок навигации по страницам настроек и управления настройками страницы "Источник--}}
{{--                            заявок"</h2>--}}
                        @include('includes.account-settings-links', ['step'=>'project'])
                        <div>
                            <a class="btn btn-primary" href=".js-invite-modal" role="button"
                               data-toggle="modal">
                                Создать
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 project-search-wrapper">
                        <h2 class="sr-only">Поиск по проектам</h2>
                        @include('includes.search-form')
                    </div>
                    <div class="col-md-12 mx-auto">
{{--                        <h2 class="sr-only">Таблица заявок с параметрами подключения"</h2>--}}
                        <div class="orders-source-table-wrapper mb-5">
                            <table class="table orders-source-table common-table orders-source-grid" data-offset="110">
                                <thead>
                                <tr class="table-grey text-center">
                                    <th class="project-name-col" scope="col">Название проекта</th>
                                    <th class="project-settings-col" scope="col">Базовые настройки</th>
                                    <th class="source-buttons-col accounts-buttons-col rounded-table-right"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="accounts-name-col text-center">Окна</td>
                                    <td class="accounts-email-col text-left">Уведомления менеджера о CPL: 400<br>
                                        Базовая цена заявки: 800<br> Уведомлять клиента если баланс CRM: 1000<br>
                                        Скрывать заявки в CRM: 0<br> Максимальный период модерации: 7<br>
                                        Описание соглашения:<button class="btn project-open-button" aria-label="Показать
                                        скрытую информацию">...</button>
                                    </td>
                                    <td class="source-buttons-col accounts-buttons-col text-center">
                                        <a class="btn source-correct-button source-button function-button"
                                           href=".js-settings-wizard" data-toggle="modal" role="button" aria-label="Редактировать данные">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn function-button" aria-label="Удалить доступ"
                                           href=".js-workspace-reset-modal" role="button" data-toggle="modal">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                @include('includes.workspace-reset-modal', [
                    'messageHeader' => 'Удаление проекта',
                    'messageBody' => 'Вы действительно хотите удалить проект?'
                ])
                @include('includes.invite-modal')
            </main>
@stop
