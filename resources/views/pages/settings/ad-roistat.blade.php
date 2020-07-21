@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <h1 class="sr-only">Страница настроек "Реклама"</h1>
        <div class="row sticky-top bg-white">
            <h2 class="sr-only">Блок навигации по страницам настроек и управления настройками страницы "Реклама"</h2>
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper border-bottom font-weight-bold">
                @include('includes.settings-links', ['step'=>'ad'])
                <div>
                   <a class="btn btn-primary wizard-button" href=".js-settings-wizard" role="button"
                      data-toggle="modal">
                       Новое подключение
                       <i class="fa fa-plus" aria-hidden="true"></i>
                   </a>
                </div>
            </div>
            @include('includes.ad-settings', ['step'=>'roistat'])
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="sr-only">Таблица общих настроек</h2>
                <div class="table-wrapper">
                    <table class="table ad-common-table common-table ad-common-grid" data-offset="187">
                        <thead>
                        <tr class="table-grey text-center">
                            <th class="rounded-table-left ad-activity-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Включает / выключает работу по API по
                                 этой интеграции">
                                Активность</th>
                            <th class="ad-id-col" scope="col">ID</th>
                            <th class="ad-source-col" scope="col">Название подключения</th>
                            <th class="ad-roistat-name-col" scope="col">Номер компании Roistat</th>
                            <th class="ad-api-key-col" scope="col">API ключ аккаунта</th>
                            <th class="ad-roistat-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="При достижении этого значения система
                                отправит уведомление об окончании баланса Roistat" scope="col">Уведомлять
                                о пополнении, если на балансе Roistat</th>
                            <th class="ad-expence-deduct-col" scope="col">Вычитать расход
                            </th>
                            <th class="ad-timing-col" scope="col">Последняя синхронизация</th>
                            <th class="ad-buttons-col rounded-table-right"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="ad-activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="ad-active-switch"
                                           type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="ad-active-switch"
                                           aria-label="Активность включена/выключена"></label>
                                </div>
                            </td>
                            <td class="ad-id-col text-center">03</td>
                            <td class="ad-source-col text-center">Roistat03</td>
                            <td class="ad-roistat-name-col text-center">9000000</td>
                            <td class="ad-api-key-col text-center">=jddsaasdadsweewda</td>
                            <td class="ad-roistat-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="ad-active-switch1"
                                           type="checkbox">
                                    <label class="custom-control-label" for="ad-active-switch1"
                                           aria-label="Включено/выключено">0 рублей</label>
                                </div>
                            </td>
                            <td class="ad-expence-deduct-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="ad-active-switch3"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="ad-active-switch3"
                                           aria-label="Включено/выключено"></label>
                                </div>
                            </td>
                            <td class="timing-col text-center">22.04.2020 22:40
                                <button type="button" class="btn function-button" aria-label="Обновление данных в таблице">
                                    <i class="fa fa-refresh" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td class="ad-buttons-col text-center">
                                <a class="btn function-button" aria-label="Открыть таблицу детальных настроек"
                                   href="#" role="button" data-toggle="tooltip" data-placement="top"
                                   data-delay='{"show":"1000", "hide":"1000"}' title="Открыть таблицу детальных настроек">
                                    <i class="fa fa-level-down" aria-hidden="true"></i>
                                </a>
                                <a class="btn source-correct-button source-button function-button"
                                   href=".js-settings-wizard" data-toggle="modal" role="button"
                                   aria-label="Редактировать данные">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a class="btn function-button" aria-label="Удалить доступ"
                                   href=".js-workspace-reset-modal" role="button" data-toggle="modal">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                                <a class="btn function-button" aria-label="Скрыть таблицу детальных настроек"
                                   href="#" role="button" data-toggle="tooltip" data-placement="top"
                                   data-delay='{"show":"1000", "hide":"1000"}' title="Скрыть таблицу детальных настроек">
                                    <i class="fa fa-level-up" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12 ad-detailed-table-wrapper">
                <h2 class="sr-only">Таблица детальных настроек</h2>
                <div class="table-wrapper mt-3">
                    <table class="table ad-roistat-detailed-table common-table ad-detailed-grid" data-offset="187">
                        <thead>
                        <tr class="table-grey text-center">
                            <th class="rounded-table-left roistat-detailed-expense-col" data-toggle="tooltip"
                                data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Включает /
                                выключает отслеживание расходов по кампаниям">Учет расхода
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="ad-active-switch8"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="ad-active-switch8"
                                           aria-label="Учет расхода включен/выключен"></label>
                                </div>
                            </th>
                            <th class="roistat-detailed-name-col" scope="col">Название рекламного аккаунта</th>
                            <th class="roistat-detailed-new-col rounded-table-right" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="При появлении новой кампаний система
                                автоматически включит учет расхода">Включать учет расхода новым кампаниям
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="ad-active-switch10"
                                           type="checkbox">
                                    <label class="custom-control-label" for="ad-active-switch10"
                                           aria-label="Учет раходов новым кампаниям включен/выключен"></label>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="ad-detailed-expense-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="ad-active-switch11"
                                           type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="ad-active-switch11"
                                           aria-label="Учет расходов включен/выключен"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-name-col text-center">Оренбург/Окна/Яндекс</td>
                            <td class="ad-detailed-new-col text-center">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('includes.workspace-reset-modal', [
            'messageHeader' => 'Удаление подключения',
            'messageBody' => 'Вы действительно хотите удалить подключение?'
        ])
        @include('includes.settings-wizard')
    </main>
@stop
