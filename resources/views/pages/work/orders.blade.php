@extends('layouts.app')
@section('content')
    <main class="page-wrapper crm-main">
        <div class="container-fluid">
            <div class="row sticky-top directory-row">
                <div class="col-md-12 offset-block">
                </div>
                <div class="col-md-12 settings-wrapper directory-buttons">
                    <div class="">
                        <a class="directory-button active" href="{{ route('work.orders') }}">CRM</a>
                        <a class="directory-button" href="#">Финансы</a>
                    </div>
                    <div class="">
                        <a href="#myModal" role="button" class="balance-info" data-toggle="modal">Баланс 2000
                            <i class="fa fa-rub" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-12 filter-wrapper">
                    <div class="order-filter">
                        <select class="custom-select index-select">
                            <option selected>Все заявки</option>
                            <option value="1">Целевые заявки</option>
                            <option value="2">Нецелевые заявки</option>
                            <option value="3">На модерации</option>
                        </select>
                        <div id="reportrange" class=" date-range text-center">
                            <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                        </div>
                    </div>
                    <div class="order-buttons">
                        <button type="button" class="btn dashboard-button show-toast">Описание заявки</button>
                        <div class="toast crm-button" id="myToast-button">
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
                        <a class="btn dashboard-button" href="#">CRM клиента
                            <i class="fa fa-external-link" aria-hidden="true"></i>
                        </a>
                    </div>
                    <form class="search-form">
                        <div class="input-group">
                            <input type="text" class="form-control search-form-input" placeholder="Поиск">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-secondary button-search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="table-wrapper mb-5">
                        <table class="table crm-table order-grid table-striped" data-offset="140">
                            <thead>
                                <tr class="table-grey text-center ">
                                    <th class="rounded-table-left id-col">ID
                                    </th>
                                    <th class="time-col" scope="col">
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Дата и время в часовом поясе клиента">Время
                                        </a>
                                    </th>
                                    <th class="title-col" scope="col">
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Название страницы или формы заявки">Заголовок
                                        </a>
                                    </th>
                                    <th class="info-col" scope="col">Информация
                                    </th>
                                    <th class="phone-col" scope="col">
                                            Телефон
                                    </th>
                                    <th class="status-col" scope="col">
                                            Статус
                                    </th>
                                    <th class="client-col" scope="col">
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Комментарий клиента">
                                            Комментарий
                                        </a>
                                    </th>
                                    <th class="moderation-col" scope="col">
                                            Модерация
                                    </th>
                                    <th class="comment-col" scope="col">
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Комментарий модератора">
                                            Комментарий
                                        </a>
                                    </th>
                                    <th class="buttons-col rounded-table-right">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="order-line">
                                    <td class="id-col" scope="row">
                                        1
                                    </td>
                                    <td class="time-col text-left">11.01.2018 13:00:00</td>
                                    <td class="title-col">1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore</td>
                                    <td class="info-col">1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore</td>
                                    <td class="phone-col text-center">85557777777</td>
                                    <td class="status-col target-status">Целевой</td>
                                    <td class="client-col">3Lorem ipsum dolor</td>
                                    <td class="moderation-col text-center">
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Согласны">
                                            <span class="moderation-circle circle-green"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="На модерации" aria-label="На модерации">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Не согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                    </td>
                                    <td class="comment-col">4Lorem ipsum dolor
                                        <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td class="text-center buttons-col">
                                        <button class="btn restore-button restore-button-hide" type="button" value="Восстановление" aria-label="Восстановить данные">
                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <button  class="btn reset-button reset-button-show" type="reset" value="Удаление" aria-label="Удалить заявку">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="reset-order">
                                    <td class="id-col" scope="row">
                                        111111
                                    </td>
                                    <td class="text-left time-col">12.02.2020 13:00:00</td>
                                    <td  class="title-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore</td>
                                    <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore</td>
                                    <td class="phone-col text-center">87777777777</td>
                                    <td class="status-col non-target-status">Не дозвонились</td>
                                    <td class="client-col">Lorem ipsum dolor</td>
                                    <td class="moderation-col text-center">
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Согласны" aria-label="Согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="На модерации" aria-label="На модерации">
                                            <span class="moderation-circle circle-yellow"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Не согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                    </td>
                                    <td class="comment-col">Lorem ipsum dolor
                                        <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td class="buttons-col text-center">
                                        <button class="btn restore-button restore-button-show" type="button" value="Восстановление" aria-label="Восстановить данные">
                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <button  class="btn reset-button reset-button-hide" type="reset" value="Удаление" aria-label="Удалить заявку">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="order-line">
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
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Согласны" aria-label="Согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="На модерации" aria-label="На модерации">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Не согласны">
                                            <span class="moderation-circle circle-red"></span>
                                        </a>
                                    </td>
                                    <td class="comment-col">Lorem ipsum dolor
                                        <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td class="buttons-col text-center">
                                        <button class="btn restore-button restore-button-hide" type="button" value="Восстановление" aria-label="Восстановить данные">
                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <button  class="btn reset-button reset-button-show" type="reset" value="Удаление" aria-label="Удалить заявку">
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
                                    <td class="status-col target-status">Целевой</td>
                                    <td class="client-col">Lorem ipsum dolor</td>
                                    <td class="moderation-col text-center">
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Согласны" aria-label="Согласны">
                                            <span class="moderation-circle circle-green"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="На модерации" aria-label="На модерации">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Не согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                    </td>
                                    <td class="comment-col">Lorem ipsum dolor
                                        <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td class="buttons-col text-center">
                                        <button class="btn restore-button restore-button-show" type="button" value="Восстановление" aria-label="Восстановить данные">
                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <button  class="btn reset-button reset-button-hide" type="reset" value="Удаление" aria-label="Удалить заявку">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="order-line">
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
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Согласны" aria-label="Согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="На модерации" aria-label="На модерации">
                                            <span class="moderation-circle circle-yellow"></span>
                                        </a>
                                        <span class="moderation-circle"></span>
                                    </td>
                                    <td class="comment-col">Lorem ipsum dolor
                                        <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td class="buttons-col text-center">
                                        <button class="btn restore-button restore-button-hide" type="button" value="Восстановление" aria-label="Восстановить данные">
                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <button  class="btn reset-button reset-button-show" type="reset" value="Удаление" aria-label="Удалить заявку">
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
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Согласны" aria-label="Согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="На модерации" aria-label="На модерации">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Не согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                    </td>
                                    <td class="comment-col">Lorem ipsum dolor
                                        <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td class="buttons-col text-center">
                                        <button class="btn restore-button restore-button-show" type="button" value="Восстановление" aria-label="Восстановить данные">
                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <button  class="btn reset-button reset-button-hide" type="reset" value="Удаление" aria-label="Удалить заявку">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="order-line">
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
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Согласны" aria-label="Согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="На модерации" aria-label="На модерации">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Не согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                    </td>
                                    <td class="comment-col">Lorem ipsum dolor
                                        <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td class="buttons-col text-center">
                                        <button class="btn restore-button restore-button-hide" type="button" value="Восстановление" aria-label="Восстановить данные">
                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <button  class="btn reset-button reset-button-show" type="reset" value="Удаление" aria-label="Удалить заявку">
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
                                    <td class="status-col non-target-status"></td>
                                    <td class="client-col">Lorem ipsum dolor</td>
                                    <td class="moderation-col text-center">
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Согласны" aria-label="Согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="На модерации" aria-label="На модерации">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Не согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                    </td>
                                    <td class="comment-col">Lorem ipsum dolor
                                        <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td class="buttons-col text-center">
                                        <button class="btn restore-button restore-button-show" type="button" value="Восстановление" aria-label="Восстановить данные">
                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <button  class="btn reset-button reset-button-hide" type="reset" value="Удаление" aria-label="Удалить заявку">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="order-line">
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
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Согласны" aria-label="Согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="На модерации" aria-label="На модерации">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Не согласны">
                                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                               title="Не согласны">
                                                <span class="moderation-circle"></span>
                                            </a>
                                        </a>
                                    </td>
                                    <td class="comment-col">Lorem ipsum dolor
                                        <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td class="buttons-col text-center">
                                        <button class="btn restore-button restore-button-hide" type="button" value="Восстановление" aria-label="Восстановить данные">
                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <button  class="btn reset-button reset-button-show" type="reset" value="Удаление" aria-label="Удалить заявку">
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
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Согласны" aria-label="Согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="На модерации" aria-label="На модерации">
                                            <span class="moderation-circle"></span>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                           title="Не согласны">
                                            <span class="moderation-circle"></span>
                                        </a>
                                    </td>
                                    <td class="comment-col">Lorem ipsum dolor
                                        <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                    <td class="buttons-col text-center">
                                        <button class="btn restore-button restore-button-show" type="button" value="Восстановление" aria-label="Восстановить данные">
                                            <i class="fa fa-undo" aria-hidden="true"></i>
                                        </button>
                                        <button  class="btn reset-button reset-button-hide" type="reset" value="Удаление" aria-label="Удалить заявку">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Операции с балансом</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="balance-actions" method="post" action="/" novalidate>
                            <div class="form-group">
                                <label class="sr-only" for="inputEmail">Сумма</label>
                                <div class="input-group">
                                    <input class="form-control" type="number" min="0" id="inputSumBalance" placeholder="Сумма" required>
                                    <div class="invalid-feedback">Пожалуйста, введите сумму
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group balance-action-buttons">
                                <button class="btn btn-primary balance-action-button" type="submit">Пополнить</button>
                                <button class="btn btn-primary balance-action-button" type="submit">Списать</button>
                                <button class="btn cancel-button balance-action-button" data-dismiss="modal"
                                        type="button">Отменить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@stop
