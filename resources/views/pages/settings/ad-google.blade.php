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
            @include('includes.ad-settings', ['step'=>'google'])
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
                            <th class="ad-email-col" scope="col">Почта</th>
                            <th class="ad-source-col" scope="col">Название подключения</th>
                            <th class="ad-crm-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Если баланс Лидогенератора достигнет
                                этого значения, система автоматически остановит все включенные кампании и запомнит их.
                                Когда баланс станет выше значения, система запустит ранее выключенные кампании"
                                scope="col">Останавливать, если на балансе CRM</th>
                            <th class="ad-google-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="При достижении этого значения система
                                отправит уведомление об окончании баланса Google Ads" scope="col">Уведомлять
                                об окончании баланса при</th>
                            <th class="ad-value-added-col" scope="col">НДС</th>
                            <th class="ad-client-payment-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Включите, если рекламный бюджет
                                оплачивает клиент. Тогда при подсчете вашей Прибыли система не вычтет рекламный Расход из
                                Выручки" scope="col">Бюджет оплачивает клиент</th>
                            <th class="ad-timing-col" scope="col">Последняя синхронизация</th>
                            <th class="ad-buttons-col rounded-table-right"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="ad-activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch"
                                           type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="google-active-switch"
                                           aria-label="Активность включена/выключена"></label>
                                </div>
                            </td>
                            <td class="ad-id-col text-center">03</td>
                            <td class="ad-email-col text-center">dir@yandex.ru</td>
                            <td class="ad-name-col text-center">Окна Саратов</td>
                            <td class="ad-crm-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch1"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch1"
                                           aria-label="Включено/выключено">0 рублей</label>
                                </div>
                            </td>
                            <td class="ad-google-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch2"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch2"
                                           aria-label="Включено/выключено">1000 рублей</label>
                                </div>
                            </td>
                            <td class="value-added-col text-center">20%</td>
                            <td class="client-payment-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch3"
                                           type="checkbox">
                                    <label class="custom-control-label" for="google-active-switch3"
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
                            </td>
                        </tr>
                        <tr>
                            <td class="ad-activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch4"
                                           type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="google-active-switch4"
                                           aria-label="Активность включена/выключена"></label>
                                </div>
                            </td>
                            <td class="ad-id-col text-center">02</td>
                            <td class=" ad-email-col text-center">dir@yandex.ru</td>
                            <td class="ad-name-col text-center">Балконы Саратов</td>
                            <td class="ad-crm-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch5"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch5"
                                           aria-label="Включено/выключено">0 рублей</label>
                                </div>
                            </td>
                            <td class="ad-google-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch6"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch6"
                                           aria-label="Включено/выключено">1000 рублей</label>
                                </div>
                            </td>
                            <td class="value-added-col text-center">20%</td>
                            <td class="client-payment-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch7"
                                           type="checkbox">
                                    <label class="custom-control-label" for="google-active-switch7"
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
                                   data-delay='{"show":"1000", "hide":"1000"}' title="Скрыть таблицу детальных настроек">
                                    <i class="fa fa-level-up" aria-hidden="true"></i>
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
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12 ad-detailed-table-wrapper">
                <h2 class="sr-only">Таблицы детальных настроек</h2>
                <div class="table-wrapper mt-3">
                    <table class="table ad-detailed-table common-table ad-detailed-grid" data-offset="187">
                        <thead>
                        <tr class="table-grey text-center">
                            <th class="rounded-table-left ad-detailed-expense-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Включает / выключает отслеживание
                                расходов по кампаниям">Учет расхода
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch8"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch8"
                                           aria-label="Учет расхода включен/выключен"></label>
                                </div>
                            </th>
                            <th class="ad-detailed-name-col" scope="col">Название</th>
                            <th class="ad-detailed-campaign-col" scope="col">№ Кампании</th>
                            <th class="ad-detailed-adding-col" scope="col">Дата добавления</th>
                            <th class="ad-detailed-status-col" scope="col">Статус Кампании</th>
                            <th class="ad-detailed-start-col" scope="col">Запустить / Остановить кампанию
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="google-active-switch9" type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch9"
                                           aria-label="Кампания запущена / остановлена"></label>
                                </div>
                            </th>
                            <th class="ad-detailed-new-col rounded-table-right" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="При появлении новой кампаний система
                                автоматически включит учет расхода">Включать учет расхода новым кампаниям
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="google-active-switch10" type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch10"
                                           aria-label="Учет раходов новым кампаниям включен/выключен"></label>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="ad-detailed-expense-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="google-active-switch11" type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="google-active-switch11"
                                           aria-label="Учет расходов включен/выключен"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-name-col text-center">Поиск/Окна/Оренбург</td>
                            <td class="ad-detailed-campaign-col text-center">111111112</td>
                            <td class="ad-detailed-adding-col text-center">22.04.2020</td>
                            <td class="ad-detailed-status-col text-center">Идут показы</td>
                            <td class="ad-detailed-start-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="google-active-switch12" type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch12"
                                           aria-label="Кампания запущена/остановлена"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-new-col text-center">
                            </td>
                        </tr>
                        <tr>
                            <td class="ad-detailed-expense-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch13"
                                           type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="google-active-switch13"
                                           aria-label="Учет расходов включен/выключен"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-name-col text-center">Поиск/Окна/Оренбург</td>
                            <td class="ad-detailed-campaign-col text-center">111111112</td>
                            <td class="ad-detailed-adding-col text-center">22.04.2020</td>
                            <td class="ad-detailed-status-col text-center">Идут показы</td>
                            <td class="ad-detailed-start-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch14"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch14"
                                           aria-label="Кампания запущена/остановлена"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-new-col text-center"></td>
                        </tr>
                        <tr>
                            <td class="ad-detailed-expense-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch15"
                                           type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="google-active-switch15"
                                           aria-label="Учет расходов включен/выключен"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-name-col text-center">Поиск/Окна/Оренбург</td>
                            <td class="ad-detailed-campaign-col text-center">111111112</td>
                            <td class="ad-detailed-adding-col text-center">22.04.2020</td>
                            <td class="ad-detailed-status-col text-center">Идут показы</td>
                            <td class="ad-detailed-start-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="google-active-switch16"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch16"
                                           aria-label="Кампания запущена/остановлена"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-new-col text-center"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-12 ad-detailed-table-wrapper">
                <h2 class="sr-only">Таблица детальных настроек</h2>
                <div class="table-wrapper mt-3">
                    <table class="table ad-detailed-table common-table ad-detailed-grid">
                        <thead>
                        <tr class="table-grey text-center">
                            <th class="rounded-table-left ad-detailed-expense-col" data-toggle="tooltip"
                                data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Включает /
                                выключает отслеживание расходов по кампаниям">Учет расхода
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="google-active-switch-17" type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch-17"
                                           aria-label="Учет расхода включен/выключен"></label>
                                </div>
                            </th>
                            <th class="ad-detailed-name-col" scope="col">Название</th>
                            <th class="ad-detailed-campaign-col" scope="col">№ Кампании</th>
                            <th class="ad-detailed-adding-col" scope="col">Дата добавления</th>
                            <th class="ad-detailed-status-col" scope="col">Статус Кампании</th>
                            <th class="ad-detailed-start-col" scope="col">Запустить / Остановить кампанию
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="google-active-switch18" type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch18"
                                           aria-label="Кампания запущена / остановлена"></label>
                                </div>
                            </th>
                            <th class="ad-detailed-new-col rounded-table-right" data-toggle="tooltip"
                                data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                title="При появлении новой кампаний система автоматически включит учет расхода">
                                Включать учет расхода новым кампаниям
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="google-active-switch19" type="checkbox" checked>
                                    <label class="custom-control-label" for="google-active-switch19"
                                           aria-label="Учет раходов новым кампаниям включен/выключен"></label>
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="ad-detailed-expense-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="google-active-switch20" type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="google-active-switch20"
                                           aria-label="Учет расходов включен/выключен"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-name-col text-center">Поиск/Окна/Оренбург</td>
                            <td class="ad-detailed-campaign-col text-center">22221</td>
                            <td class="ad-detailed-adding-col text-center">22.04.2020</td>
                            <td class="ad-detailed-status-col text-center">Идут показы</td>
                            <td class="ad-detailed-start-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="ad-active-switch21" type="checkbox" checked>
                                    <label class="custom-control-label" for="ad-active-switch21"
                                           aria-label="Кампания запущена/остановлена"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-new-col text-center"></td>
                        </tr>
                        <tr>
                            <td class="ad-detailed-expense-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="google-active-switch22" type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="google-active-switch22"
                                           aria-label="Учет расходов включен/выключен"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-name-col text-center">Поиск/Окна/Оренбург</td>
                            <td class="ad-detailed-campaign-col text-center">22223</td>
                            <td class="ad-detailed-adding-col text-center">22.04.2020</td>
                            <td class="ad-detailed-status-col text-center">Идут показы</td>
                            <td class="ad-detailed-start-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="ad-active-switch23" type="checkbox" checked>
                                    <label class="custom-control-label" for="ad-active-switch23"
                                           aria-label="Кампания запущена/остановлена"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-new-col text-center"></td>
                        </tr>
                        <tr>
                            <td class="ad-detailed-expense-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="google-active-switch24" type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="google-active-switch24"
                                           aria-label="Учет расходов включен/выключен"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-name-col text-center">Поиск/Окна/Оренбург</td>
                            <td class="ad-detailed-campaign-col text-center">22224</td>
                            <td class="ad-detailed-adding-col text-center">22.04.2020</td>
                            <td class="ad-detailed-status-col text-center">Идут показы</td>
                            <td class="ad-detailed-start-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success"
                                           id="ad-active-switch25" type="checkbox" checked>
                                    <label class="custom-control-label" for="ad-active-switch25"
                                           aria-label="Кампания запущена/остановлена"></label>
                                </div>
                            </td>
                            <td class="ad-detailed-new-col text-center"></td>
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
