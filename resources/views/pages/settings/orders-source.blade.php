@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <h1 class="sr-only">Страница настроек "Источник заявок"</h1>
        <div class="row sticky-top bg-white">
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper font-weight-bold">
                <h2 class="sr-only">Блок навигации по страницам настроек и управления настройками страницы "Источник
                    заявок"</h2>
                @include('includes.settings-links', ['step'=>'orders-source'])
                <div>
                   <a class="btn btn-primary wizard-button" href=".js-orders-source-wizard" role="button"
                      data-toggle="modal">
                       Новое подключение
                       <i class="fa fa-plus" aria-hidden="true"></i>
                   </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <h2 class="sr-only">Таблица заявок с параметрами подключения"</h2>
                <div class="orders-source-table-wrapper mb-5">
                    <table class="table orders-source-table common-table orders-source-grid" data-offset="110">
                        <thead>
                        <tr class="table-grey text-center">
                            <th class="rounded-table-left activity-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Включает / выключает прием заявок">
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
                                    <label class="custom-control-label" for="active-switch"
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
                                                    data-clipboard-target="#copy-form-input" data-trigger="manual"
                                                    data-toggle="click-leave-tooltip" data-placement="top"
                                                    title="Скопировано" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="request-col text-center">22.04.2020 22:40</td>
                            <td class="source-buttons-col text-center">
                                <a class="btn source-correct-button source-button function-button"
                                   href=".js-orders-source-wizard" data-toggle="modal" role="button" aria-label="Редактировать данные">
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
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input2"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input2" data-trigger="manual"
                                                    data-toggle="click-leave-tooltip" data-placement="top"
                                                    title="Скопировано" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center">22.04.2020 22:40</td>
                            <td class="text-center">
                                <a class="btn source-correct-button source-button function-button" data-toggle="modal"
                                   href=".js-orders-source-wizard" role="button" aria-label="Редактировать данные">
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
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input2"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input2" data-trigger="manual"
                                                    data-toggle="click-leave-tooltip" data-placement="top"
                                                    title="Скопировано" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center">22.04.2020 22:40</td>
                            <td class="text-center">
                                <a class="btn source-correct-button source-button function-button" data-toggle="modal"
                                   href=".js-orders-source-wizard" role="button" aria-label="Редактировать данные">
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
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input2"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input2" data-trigger="manual"
                                                    data-toggle="click-leave-tooltip" data-placement="top"
                                                    title="Скопировано" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center">22.04.2020 22:40</td>
                            <td class="text-center">
                                <a class="btn source-correct-button source-button function-button" data-toggle="modal"
                                   href=".js-orders-source-wizard" role="button" aria-label="Редактировать данные">
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
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input2"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input2" data-trigger="manual"
                                                    data-toggle="click-leave-tooltip" data-placement="top"
                                                    title="Скопировано" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center">22.04.2020 22:40</td>
                            <td class="text-center">
                                <a class="btn source-correct-button source-button function-button" data-toggle="modal"
                                   href=".js-orders-source-wizard" role="button" aria-label="Редактировать данные">
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
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input2"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input2" data-trigger="manual"
                                                    data-toggle="click-leave-tooltip" data-placement="top"
                                                    title="Скопировано" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center">22.04.2020 22:40</td>
                            <td class="text-center">
                                <a class="btn source-correct-button source-button function-button" data-toggle="modal"
                                   href=".js-orders-source-wizard" role="button" aria-label="Редактировать данные">
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
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input2"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input2" data-trigger="manual"
                                                    data-toggle="click-leave-tooltip" data-placement="top"
                                                    title="Скопировано" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center">22.04.2020 22:40</td>
                            <td class="text-center">
                                <a class="btn source-correct-button source-button function-button" data-toggle="modal"
                                   href=".js-orders-source-wizard" role="button" aria-label="Редактировать данные">
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
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input2"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input2" data-trigger="manual"
                                                    data-toggle="click-leave-tooltip" data-placement="top"
                                                    title="Скопировано" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center">22.04.2020 22:40</td>
                            <td class="text-center">
                                <a class="btn source-correct-button source-button function-button" data-toggle="modal"
                                   href=".js-orders-source-wizard" role="button" aria-label="Редактировать данные">
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
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input2"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input2" data-trigger="manual"
                                                    data-toggle="click-leave-tooltip" data-placement="top"
                                                    title="Скопировано" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center">22.04.2020 22:40</td>
                            <td class="text-center">
                                <a class="btn source-correct-button source-button function-button" data-toggle="modal"
                                   href=".js-orders-source-wizard" role="button" aria-label="Редактировать данные">
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
                                        <input class="form-control copy-form-input" type="text" id="copy-form-input2"
                                               value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button"
                                                    data-clipboard-target="#copy-form-input2" data-trigger="manual"
                                                    data-toggle="click-leave-tooltip" data-placement="top"
                                                    title="Скопировано" aria-label="Копировать">
                                                <i class="fa fa-files-o" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td class="text-center">22.04.2020 22:40</td>
                            <td class="text-center">
                                <a class="btn source-correct-button source-button function-button" data-toggle="modal"
                                   href=".js-orders-source-wizard" role="button" aria-label="Редактировать данные">
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
            'messageHeader' => 'Удаление подключения',
            'messageBody' => 'Вы действительно хотите удалить подключение?'
        ])
        @include('includes.orders-source-wizard')
    </main>
@stop
