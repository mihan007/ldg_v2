@extends('layouts.app')
@section('content')
    <main class="page-wrapper crm-main">
        <div class="row sticky-top bg-white">
            <h1 class="sr-only">Страница заявок</h1>
            <h2 class="sr-only">Фильтр данных для таблицы заявок</h2>
            @include('includes.orders-directory-links', ['step'=>'crm'])
            <div class="col-md-12 filter-wrapper">
                <div class="order-filter">
                    <select class="custom-select select-item">
                        <option selected>Все заявки</option>
                        <option value="1">Целевые заявки</option>
                        <option value="2">Нецелевые заявки</option>
                        <option value="3">На модерации</option>
                    </select>
                    @include('includes.date-range')
                </div>
                <div class="orders-count-wrapper text-center">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item bg-success text-white rounded targeted-orders-count"
                            data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                            title="Целевые заявки">
                            <p class="font-weight-bold mb-0 d-block">241</p>
                        </li>
                        <li class="list-inline-item bg-danger text-white rounded inappropriate-orders-count"
                            data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                            title="Нецелевые заявки">
                            <p class="font-weight-bold mb-0 d-block">84</p>
                        </li>
                    </ul>
                </div>
                <div class="order-buttons">
                    <button type="button" class="btn page-button show-toast">Описание заявки</button>
                    <div class="toast crm-button js-order-description-toast">
                        <button type="button" class="close ml-2 mb-1 mr-1" data-dismiss="toast">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="toast-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Semper viverra nam libero justo laoreet sit
                                amet. Id aliquet lectus proin nibh nisl condimentum. Aliquam sem fringilla ut morbi
                                tincidunt augue interdum. Integer vitae justo eget magna fermentum iaculis eu.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Semper viverra nam libero justo laoreet sit
                                amet. Id aliquet lectus proin nibh nisl condimentum. Aliquam sem fringilla ut morbi
                                tincidunt augue interdum. Integer vitae justo eget magna fermentum iaculis eu.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Semper viverra nam libero justo laoreet sit
                                amet. Id aliquet lectus proin nibh nisl condimentum. Aliquam sem fringilla ut morbi
                                tincidunt augue interdum. Integer vitae justo eget magna fermentum iaculis eu.</p>
                            <p>Максимальный срок согласования заявки 7 дней</p>
                        </div>
                    </div>
                    <a class="btn page-button" href="#">CRM клиента
                        <i class="fa fa-external-link" aria-hidden="true"></i>
                    </a>
                </div>
                @include('includes.search-form')
            </div>
        </div>
        <div class="row">
            <h2 class="sr-only">Таблица данных по заявкам</h2>
            <div class="col-md-12 mx-auto">
                <div class="table-wrapper mb-5">
                    <table class="table crm-table common-table order-grid table-striped" data-offset="140">
                        <thead>
                            <tr class="table-grey text-center ">
                                <th class="rounded-table-left id-col">ID</th>
                                <th class="time-col" scope="col">
                                    <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Дата и время в часовом поясе клиента">Время</a>
                                </th>
                                <th class="title-col" scope="col">
                                    <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Название страницы или формы заявки">Заголовок</a>
                                </th>
                                <th class="info-col" scope="col">Информация
                                </th>
                                <th class="phone-col" scope="col">Телефон</th>
                                <th class="status-col" scope="col">Статус</th>
                                <th class="client-col" scope="col">
                                    <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Комментарий клиента">
                                        Комментарий</a>
                                </th>
                                <th class="moderation-col" scope="col">Модерация</th>
                                <th class="comment-col" scope="col">
                                    <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Комментарий модератора">Комментарий</a>
                                </th>
                                <th class="buttons-col rounded-table-right"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="order-line">
                                <td class="id-col" scope="row">1</td>
                                <td class="time-col text-left">11.01.2018 13:00:00</td>
                                <td class="title-col">1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="info-col">1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="phone-col text-center">85557777777</td>
                                <td class="status-col target-status">Целевой</td>
                                <td class="client-col">3Lorem ipsum dolor</td>
                                <td class="moderation-col text-center">
                                    <button class="btn moderation-circle circle-green" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Согласны"></button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="На модерации" aria-label="На модерации"></button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Не согласны"></button>
                                </td>
                                <td class="comment-col">4Lorem ipsum dolor
                                    <button class="btn correct-button function-button" type="button"
                                            href=".js-manager-comment-modal" data-toggle="modal"
                                            aria-label="Редактировать комментарий">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="text-center buttons-col">
                                    <button class="btn restore-button restore-button-hide function-button" type="button" value="Восстановление" aria-label="Восстановить данные">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                    <button  class="btn reset-button reset-button-show function-button" type="reset" value="Удаление" aria-label="Удалить заявку">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="reset-order">
                                <td class="id-col" scope="row">11</td>
                                <td class="text-left time-col">12.02.2020 13:00:00</td>
                                <td  class="title-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="phone-col text-center">87777777777</td>
                                <td class="status-col non-target-status">Не дозвонились</td>
                                <td class="client-col">Lorem ipsum dolor</td>
                                <td class="moderation-col text-center">
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Согласны" aria-label="Согласны"></button>
                                    <button class="btn moderation-circle circle-yellow" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="На модерации" aria-label="На модерации"></button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Не согласны"></button>
                                </td>
                                <td class="comment-col">Lorem ipsum dolor
                                    <button class="btn correct-button function-button" type="button"
                                            href=".js-manager-comment-modal" data-toggle="modal" aria-label="Редактировать комментарий">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="buttons-col text-center">
                                    <button class="btn restore-button restore-button-show function-button" type="button" value="Восстановление" aria-label="Восстановить данные">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                    <button  class="btn reset-button reset-button-hide function-button" type="reset" value="Удаление" aria-label="Удалить заявку">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="order-line">
                                <td class="id-col" scope="row">111</td>
                                <td class="text-left time-col">12.02.2020 13:00:00</td>
                                <td class="title-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="phone-col text-center">87777777777</td>
                                <td class="status-col non-target-status"></td>
                                <td class="client-col">Lorem ipsum dolor</td>
                                <td class="moderation-col text-center">
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Согласны" aria-label="Согласны"></button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="На модерации" aria-label="На модерации"></button>
                                    <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                         data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                        <button class="btn moderation-circle circle-red" type="button"
                                                href=".js-manager-comment-modal" data-toggle="modal"
                                                aria-label="Статус: клиент не согласен"></button>
                                    </div>
                                </td>
                                <td class="comment-col">Lorem ipsum dolor
                                    <button class="btn correct-button function-button" type="button" href=".js-manager-comment-modal" data-toggle="modal"  aria-label="Редактировать комментарий">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="buttons-col text-center">
                                    <button class="btn restore-button restore-button-hide function-button" type="button" value="Восстановление" aria-label="Восстановить данные">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                    <button  class="btn reset-button reset-button-show function-button" type="reset" value="Удаление" aria-label="Удалить заявку">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="reset-order">
                                <td class="id-col" scope="row">
                                    1111
                                </td>
                                <td class="text-left time-col">12.02.2020 13:00:00</td>
                                <td class="title-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="phone-col text-center">87777777777</td>
                                <td class="status-col target-status">Целевой</td>
                                <td class="client-col">Lorem ipsum dolor</td>
                                <td class="moderation-col text-center">
                                    <button class="btn moderation-circle circle-green" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Согласны" aria-label="Согласны"></button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="На модерации" aria-label="На модерации"></button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Не согласны"></button>
                                </td>
                                <td class="comment-col">Lorem ipsum dolor
                                    <button class="btn correct-button function-button" type="button" href=".js-manager-comment-modal" data-toggle="modal" aria-label="Редактировать комментарий">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="buttons-col text-center">
                                    <button class="btn restore-button restore-button-show function-button" type="button" value="Восстановление" aria-label="Восстановить данные">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                    <button  class="btn reset-button reset-button-hide function-button" type="reset" value="Удаление" aria-label="Удалить заявку">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="order-line">
                                <td class="id-col" scope="row">
                                    11111
                                </td>
                                <td class="text-left time-col">12.02.2020 13:00:00</td>
                                <td class="title-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="phone-col text-center">87777777777</td>
                                <td class="status-col non-target-status">Не дозвонились</td>
                                <td class="client-col">Lorem ipsum dolor</td>
                                <td class="moderation-col text-center">
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                            data-delay='{"show":"1000", "hide":"1000"}' title="Согласны"
                                            aria-label="Согласны">
                                    </button>
                                    <button class="btn moderation-circle circle-yellow" data-toggle="tooltip" data-placement="top"
                                            data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                            aria-label="На модерации">
                                    </button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                            data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                    </button>
                                </td>
                                <td class="comment-col">Lorem ipsum dolor
                                    <button class="btn correct-button function-button" type="button" href=".js-manager-comment-modal" data-toggle="modal" aria-label="Редактировать комментарий">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="buttons-col text-center">
                                    <button class="btn restore-button restore-button-hide function-button" type="button" value="Восстановление" aria-label="Восстановить данные">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                    <button  class="btn reset-button reset-button-show function-button" type="reset" value="Удаление" aria-label="Удалить заявку">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="reset-order">
                                <td class="id-col" scope="row">
                                    111111
                                </td>
                                <td class="text-left time-col">12.02.2020 13:00:00</td>
                                <td class="title-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="phone-col text-center">87777777777</td>
                                <td class="status-col non-target-status">Не дозвонились</td>
                                <td class="client-col">Lorem ipsum dolor</td>
                                <td class="moderation-col text-center">
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Согласны" aria-label="Согласны"></button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="На модерации" aria-label="На модерации"></button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Не согласны"></button>
                                </td>
                                <td class="comment-col">Lorem ipsum dolor
                                    <button class="btn correct-button function-button" type="button" href=".js-manager-comment-modal" data-toggle="modal"  aria-label="Редактировать комментарий">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="buttons-col text-center">
                                    <button class="btn restore-button restore-button-show function-button" type="button" value="Восстановление" aria-label="Восстановить данные">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                    <button  class="btn reset-button reset-button-hide function-button" type="reset" value="Удаление" aria-label="Удалить заявку">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="order-line">
                                <td class="id-col" scope="row">
                                    1111111
                                </td>
                                <td class="text-left time-col">12.02.2020 13:00:00</td>
                                <td class="title-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="phone-col text-center">87777777777</td>
                                <td class="status-col non-target-status">Не дозвонились</td>
                                <td class="client-col">Lorem ipsum dolor</td>
                                <td class="moderation-col text-center">
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Согласны" aria-label="Согласны">
                                    </button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="На модерации" aria-label="На модерации">
                                    </button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Не согласны">
                                    </button>
                                </td>
                                <td class="comment-col">Lorem ipsum dolor
                                    <button class="btn correct-button function-button" type="button" href=".js-manager-comment-modal" data-toggle="modal" aria-label="Редактировать комментарий">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="buttons-col text-center">
                                    <button class="btn restore-button restore-button-hide function-button" type="button" value="Восстановление" aria-label="Восстановить данные">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                    <button  class="btn reset-button reset-button-show function-button" type="reset" value="Удаление" aria-label="Удалить заявку">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="reset-order">
                                <td class="id-col" scope="row">
                                    11111111
                                </td>
                                <td class="text-left time-col">12.02.2020 13:00:00</td>
                                <td class="title-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="phone-col text-center">87777777777</td>
                                <td class="status-col non-target-status"></td>
                                <td class="client-col">Lorem ipsum dolor</td>
                                <td class="moderation-col text-center">
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Согласны" aria-label="Согласны">
                                    </button>
                                    <button class="btn moderation-circle circle-yellow" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="На модерации" aria-label="На модерации">
                                    </button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Не согласны">
                                    </button>
                                </td>
                                <td class="comment-col">Lorem ipsum dolor
                                    <button class="btn correct-button function-button" type="button" href=".js-manager-comment-modal" data-toggle="modal" aria-label="Редактировать комментарий">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="buttons-col text-center">
                                    <button class="btn restore-button restore-button-show function-button" type="button" value="Восстановление" aria-label="Восстановить данные">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                    <button  class="btn reset-button reset-button-hide function-button" type="reset" value="Удаление" aria-label="Удалить заявку">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="order-line">
                                <td class="id-col" scope="row">
                                    1111112
                                </td>
                                <td class="text-left time-col">12.02.2020 13:00:00</td>
                                <td class="title-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="phone-col text-center">87777777777</td>
                                <td class="status-col non-target-status">Не дозвонились</td>
                                <td class="client-col">Lorem ipsum dolor</td>
                                <td class="moderation-col text-center">
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Согласны" aria-label="Согласны"></button>
                                    <button class="btn moderation-circle circle-yellow" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="На модерации" aria-label="На модерации"></button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Не согласны"></button>
                                </td>
                                <td class="comment-col">Lorem ipsum dolor
                                    <button class="btn correct-button function-button" type="button" href=".js-manager-comment-modal" data-toggle="modal" aria-label="Редактировать комментарий">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="buttons-col text-center">
                                    <button class="btn restore-button restore-button-hide function-button" type="button" value="Восстановление" aria-label="Восстановить данные">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                    <button  class="btn reset-button reset-button-show function-button" type="reset" value="Удаление" aria-label="Удалить заявку">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="reset-order">
                                <td class="id-col" scope="row">
                                    1111113
                                </td>
                                <td class="text-left time-col">12.02.2020 13:00:00</td>
                                <td class="title-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore</td>
                                <td class="phone-col text-center">87777777777</td>
                                <td class="status-col non-target-status">Не дозвонились</td>
                                <td class="client-col">Lorem ipsum dolor</td>
                                <td class="moderation-col text-center">
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Согласны" aria-label="Согласны"></button>
                                    <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="На модерации" aria-label="На модерации"></button>
                                    <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                         data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                        <button class="btn moderation-circle circle-red" type="button"
                                            href=".js-manager-comment-modal" data-toggle="modal"
                                            aria-label="Статус: клиент не согласен"></button>
                                    </div>
                                </td>
                                <td class="comment-col">Lorem ipsum dolor
                                    <button class="btn correct-button function-button" type="button" href=".js-manager-comment-modal" data-toggle="modal" aria-label="Редактировать комментарий">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </td>
                                <td class="buttons-col text-center">
                                    <button class="btn restore-button restore-button-show function-button" type="button" value="Восстановление" aria-label="Восстановить данные">
                                        <i class="fa fa-undo" aria-hidden="true"></i>
                                    </button>
                                    <button  class="btn reset-button reset-button-hide function-button" type="reset" value="Удаление" aria-label="Удалить заявку">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('includes.modal.balance-modal')
        @include('includes.modal.manager-comment-modal')
    </main>
@stop
