@extends('layouts.app')
@section('content')
    <main class="page-wrapper show-toast position-relative">
        <div class="row">
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper font-weight-bold">
                @include('includes.settings-links', ['step'=>'orders-source'])
                <div>
                    <select class="select custom-select orders-source-select bg-primary text-white js-open-modal"
                            data-style="btn-primary">
                        <option value="" selected>Добавить подключение</option>
                        <optgroup label="Получение заявок">
                            <option class="" data-modal="js-roistat-phone-modal" role="button">
                                    Roistat телефония
                            </option>
                            <option>Zadarma телефония</option>
                            <option>Marquiz</option>
                            <option>Webhooks от других сервисов</option>
                            <option>GET запрос с сайта</option>
                        </optgroup>
                        <optgroup label="Реклама и расходы">
                            <option>Яндекс.Директ</option>
                            <option>Google Ads</option>
                            <option>Roistat</option>
                        </optgroup>
                        <optgroup label="Отправка заявок в CRM">
                            <option>Битрикс 24</option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="table-wrapper mb-5">
                    <table class="table orders-source-table common-table">
                        <thead>
                        <tr class="table-grey text-center">
                            <th class="rounded-table-left activity-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Включает / выключает прием вебхука">
                                Активность</th>
                            <th class="source-id-col" scope="col">ID</th>
                            <th class="name-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Название для удобства" scope="col">
                                Имя</th>
                            <th class="source-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Название подключения" scope="col">
                                Источник</th>
                            <th class="order-cost-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Цена целевой заявки поступившая с
                                подключения" scope="col">Стоимость заявки</th>
                            <th class="data-connect-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Эти данные нужно указать в настройках
                                подключаемого сервиса" scope="col">Данные для подключения</th>
                            <th class="request-col" scope="col">Последний запрос</th>
                            <th class="source-buttons-col rounded-table-right"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="active-switch"
                                           type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="active-switch"
                                           aria-label="Активность включена/выключена"></label>
                                </div>
                            </td>
                            <td class="source-id-col text-center">01</td>
                            <td class="name-col text-center">Балконы</td>
                            <td class="source-col text-center">Марквиз</td>
                            <td class="order-cost-col text-center">Базовая</td>
                            <td class="data-connect-col text-center">
                                <form class="order-source-copy-form" method="post" action="/">
                                    <div class="input-group">
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="request-col text-center">22.04.2020 22:40</td>
                            <td class="source-buttons-col text-center">
                                <a class="btn source-correct-button source-button function-button" href="#" role="button"
                                   aria-label="Редактировать
                                данные">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a class="btn function-button" aria-label="Удалить доступ"
                                   href=".js-workspace-reset-modal" role="button" data-toggle="modal">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="active-switch2"
                                           type="checkbox">
                                    <label class="custom-control-label font-italic" for="active-switch2"
                                           aria-label="Активность включена/выключена"></label>
                                </div>
                            </td>
                            <td class="email-col text-center">02</td>
                            <td class="name-col text-center">Балконы</td>
                            <td class="source-col text-center">Roistat телефония</td>
                            <td class="order-cost-col text-center">Базовая</td>
                            <td class="text-center">
                                <form class="order-source-copy-form" method="get" action="/">
                                    <div class="input-group">
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center">22.04.2020 22:40</td>
                            <td class="text-center">
                                <a class="btn source-correct-button source-button function-button" data-toggle="modal"
                                   href=".js-roistat-phone-modal" role="button" aria-label="Редактировать данные">
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
        <div class="toast saved-toast js-saved-toast">
            <div class="toast-body">
                <div>Данные сохранены</div>
            </div>
        </div>
        @include('includes.workspace-reset-modal')
        @include('includes.workspace-save-modal')
        @include('includes.roistat-phone-modal')
        @include('includes.roistat-url-modal')
    </main>
@stop
