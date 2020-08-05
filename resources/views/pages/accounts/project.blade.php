@extends('layouts.app')
@section('content')
    <main class="page-wrapper position-relative">
        <h1 class="sr-only">Настройки аккаунтов.Ниши.</h1>
                <div class="row sticky-top bg-white">
                    <div class="col-md-12 offset-block"></div>
                    <div class="col-md-12 settings-wrapper font-weight-bold border-bottom">
                        <h2 class="sr-only">Блок навигации по страницам настроек аккаунтов и управления настройками</h2>
                        @include('includes.account-settings-links', ['step'=>'project'])
                        <div>
                            <a class="btn btn-primary modal-button" href=".js-project-modal" role="button"
                               data-toggle="modal">Создать
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-12 project-search-wrapper">
                        <h2 class="sr-only">Поиск по проектам</h2>
                        @include('includes.search-form')
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mx-auto">
                        <h2 class="sr-only">Таблица данных ниш"</h2>
                        <div class="project-table-wrapper mb-5">
                            <table class="table project-table common-table project-grid" data-offset="163">
                                <thead>
                                <tr class="table-grey text-center">
                                    <th class="project-name-col rounded-table-left" scope="col">Название ниши</th>
                                    <th class="project-settings-col" scope="col">Базовые настройки</th>
                                    <th class="accounts-buttons-col rounded-table-right"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="project-name-col text-center">Окна</td>
                                    <td class="project-email-col text-left">Уведомления менеджера о CPL: 400<br>
                                        Базовая цена заявки: 800<br> Уведомлять клиента если баланс CRM: 1000<br>
                                        Скрывать заявки в CRM: 0<br> Максимальный период модерации: 7<br>
                                        Описание соглашения:<button class="btn project-open-button" aria-label="Показать
                                        скрытую информацию">...</button>
                                    </td>
                                    <td class="accounts-buttons-col text-center">
                                        <a class="btn project-correct-button function-button"
                                           href=".js-project-settings-modal" data-toggle="modal" role="button" aria-label="Редактировать данные">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn project-reset-button function-button" aria-label="Удалить доступ"
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
        <div class="toast saved-toast js-saved-toast">
            <div class="toast-body">
                <div>Данные сохранены</div>
            </div>
        </div>
                @include('includes.modal.reset-modal', [
                    'messageHeader' => 'Удаление ниши',
                    'messageBody' => 'Вы действительно хотите удалить нишу?'
                ])
                @include('includes.modal.project-modal')
                @include('includes.modal.project-settings-modal')
            </main>
@stop
