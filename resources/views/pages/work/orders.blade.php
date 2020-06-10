@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="container-fluid">
        <div class="row sticky-top crm-row">
            <div class="col-md-12 offset-block">
            </div>
            <div class="col-md-12 settings-wrapper directory-buttons">
                <div class="">
                    <a class="directory-button active" href="{{ route('work.orders') }}">CRM</a>
                    <a class="directory-button" href="#">Финансы</a>
                </div>
                <div class="">
                    <p class="balance-info">Баланс 2000 p</p>
                </div>
            </div>
            <div class="col-md-12 filter-wrapper">
                <div class="order-filter">
                    <select class="custom-select index-select ">
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
                                <button type="button" class="btn btn-secondary button-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>

            </div>
        </div>
            <div class="row">
                <div class="col-md-12 mx-auto rounded">
            <div class="table-wrapper mb-5">
                <table class="table crm-table order-grid table-hover table-striped" data-offset="140">
                    <thead>
                        <tr class="table-grey text-center id-col">
                            <th>ID
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
                            <th class="buttons-col">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="id-col" scope="row">
                                1
                            </td>
                            <td class="time-col text-left">11.01.2018 13:00:00</td>
                            <td class="title-col">1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="info-col">1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="phone-col text-center">85557777777</td>
                            <td class="status-col">Целевой</td>
                            <td class="client-col">3Lorem ipsum dolor</td>
                            <td class="moderation-col text-center">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
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
                            <td scope="row">
                                111111
                            </td>
                            <td class="text-left">12.02.2020 13:00:00</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="text-center">87777777777</td>
                            <td>Не дозвонились</td>
                            <td>Lorem ipsum dolor</td>
                            <td class="text-center">
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle"></span>
                            </td>
                            <td>Lorem ipsum dolor
                                <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn restore-button restore-button-show" type="button" value="Восстановление" aria-label="Восстановить данные">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                                <button  class="btn reset-button reset-button-hide" type="reset" value="Удаление" aria-label="Удалить заявку">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                111111
                            </td>
                            <td class="text-left">12.02.2020 13:00:00</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="text-center">87777777777</td>
                            <td>Не дозвонились</td>
                            <td>Lorem ipsum dolor</td>
                            <td class="text-center">
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td>Lorem ipsum dolor
                                <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn restore-button restore-button-hide" type="button" value="Восстановление" aria-label="Восстановить данные">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                                <button  class="btn reset-button reset-button-show" type="reset" value="Удаление" aria-label="Удалить заявку">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="reset-order">
                            <td scope="row">
                                111111
                            </td>
                            <td class="text-left">12.02.2020 13:00:00</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="text-center">87777777777</td>
                            <td>Не дозвонились</td>
                            <td>Lorem ipsum dolor</td>
                            <td class="text-center">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle"></span>
                            </td>
                            <td>Lorem ipsum dolor
                                <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn restore-button restore-button-show" type="button" value="Восстановление" aria-label="Восстановить данные">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                                <button  class="btn reset-button reset-button-hide" type="reset" value="Удаление" aria-label="Удалить заявку">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                111111
                            </td>
                            <td class="text-left">12.02.2020 13:00:00</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="text-center">87777777777</td>
                            <td>Не дозвонились</td>
                            <td>Lorem ipsum dolor</td>
                            <td class="text-center">
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td>Lorem ipsum dolor
                                <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn restore-button restore-button-hide" type="button" value="Восстановление" aria-label="Восстановить данные">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                                <button  class="btn reset-button reset-button-show" type="reset" value="Удаление" aria-label="Удалить заявку">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="reset-order">
                            <td scope="row">
                                111111
                            </td>
                            <td class="text-left">12.02.2020 13:00:00</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="text-center">87777777777</td>
                            <td>Не дозвонились</td>
                            <td>Lorem ipsum dolor</td>
                            <td class="text-center">
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                            </td>
                            <td>Lorem ipsum dolor
                                <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn restore-button restore-button-show" type="button" value="Восстановление" aria-label="Восстановить данные">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                                <button  class="btn reset-button reset-button-hide" type="reset" value="Удаление" aria-label="Удалить заявку">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                111111
                            </td>
                            <td class="text-left">12.02.2020 13:00:00</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="text-center">87777777777</td>
                            <td>Не дозвонились</td>
                            <td>Lorem ipsum dolor</td>
                            <td class="text-center">
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                            </td>
                            <td>Lorem ipsum dolor
                                <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn restore-button restore-button-hide" type="button" value="Восстановление" aria-label="Восстановить данные">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                                <button  class="btn reset-button reset-button-show" type="reset" value="Удаление" aria-label="Удалить заявку">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="reset-order">
                            <td scope="row">
                                111111
                            </td>
                            <td class="text-left">12.02.2020 13:00:00</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="text-center">87777777777</td>
                            <td></td>
                            <td>Lorem ipsum dolor</td>
                            <td class="text-center">
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                            </td>
                            <td>Lorem ipsum dolor
                                <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn restore-button restore-button-show" type="button" value="Восстановление" aria-label="Восстановить данные">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                                <button  class="btn reset-button reset-button-hide" type="reset" value="Удаление" aria-label="Удалить заявку">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row">
                                111111
                            </td>
                            <td class="text-left">12.02.2020 13:00:00</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="text-center">87777777777</td>
                            <td>Не дозвонились</td>
                            <td>Lorem ipsum dolor</td>
                            <td class="text-center">
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                            </td>
                            <td>Lorem ipsum dolor
                                <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn restore-button restore-button-hide" type="button" value="Восстановление" aria-label="Восстановить данные">
                                    <i class="fa fa-undo" aria-hidden="true"></i>
                                </button>
                                <button  class="btn reset-button reset-button-show" type="reset" value="Удаление" aria-label="Удалить заявку">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="reset-order">
                            <td scope="row">
                                111111
                            </td>
                            <td class="text-left">12.02.2020 13:00:00</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="text-center">87777777777</td>
                            <td>Не дозвонились</td>
                            <td>Lorem ipsum dolor</td>
                            <td class="text-center">
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                                <span class="moderation-circle"></span>
                            </td>
                            <td>Lorem ipsum dolor
                                <button class="btn correct-button" type="button" aria-label="Редактировать комментарий">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </button>
                            </td>
                            <td class="text-center">
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
    </main>
@stop
