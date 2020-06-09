@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="container-fluid">
        <div class="row sticky-top crm-row">
            <div class="col-md-12 offset-block">
            </div>
            <div class="col-md-12 settings-wrapper directory-buttons">
                <div class="">
                    <a class="directory-button active">CRM</a>
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
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>
                </div>

                <div class="order-buttons">
                    <button type="button" class="btn dashboard-button show-toast">Описание заявки</button>
                    <div class="toast crm-button" id="myToast-button">

                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
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

                    <a class="btn dashboard-button" href="#">CRM клиента <i class="fa fa-external-link"></i></a>
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
                <table class="table crm-table data-grid table-hover table-striped">
                    <thead class="table-bordered">
                        <tr class="table-grey text-center table-head">
                            <th class="company-td text-left border-top-0 company-col">
                                    ID
                            </th>
                            <th scope="col" class="border-top-0 all-orders-col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Дата и время в часовом поясе клиента">
                                    Время
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 cr-col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Название страницы или формы заявки">
                                    Заголовок
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 target-col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="name + comment + advertising_platform + tag">
                                    Информация
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 cpl-col">
                                    Телефон
                            </th>
                            <th scope="col" class="border-top-0 moderation-col">
                                    Статус
                            </th>
                            <th scope="col" class="border-top-0 gain-col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Комментарий клиента">
                                    Комментарий
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 costs-col">
                                    Модерация
                            </th>
                            <th scope="col" class="border-top-0 profit-col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Комментарий модератора">
                                    Комментарий
                                </a>
                            </th>
                            <th class="border-top-0 lidgen-col">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                1
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, удалить
                            </td>
                        </tr>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                111111
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, удалить
                            </td>
                        </tr>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                111111
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, удалить
                            </td>
                        </tr>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                111111
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, удалить
                            </td>
                        </tr>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                111111
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, удалить
                            </td>
                        </tr>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                111111
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, удалить
                            </td>
                        </tr>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                111111
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, удалить
                            </td>
                        </tr>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                11111
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, <i class="fa fa-trash"></i>
                            </td>
                        </tr>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                1111
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, <i class="fa fa-trash" aria-hidden="true"></i>
                            </td>
                        </tr>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                111
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, удалить
                            </td>
                        </tr>
                        <tr class="template">
                            <td scope="row" class="company-col">
                                11
                            </td>
                            <td class="all-orders-col">12.02.2020 13:00:00</td>
                            <td class="cr-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="target-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</td>
                            <td class="cpl-col">87777777777</td>
                            <td class="moderation-col">Не дозвонились</td>
                            <td class="gain-col">Lorem ipsum dolor</td>
                            <td class="costs-col">
                                <span class="moderation-circle circle-green"></span>
                                <span class="moderation-circle circle-yellow"></span>
                                <span class="moderation-circle circle-red"></span>
                            </td>
                            <td class="profit-col">Lorem ipsum dolor</td>
                            <td class="lidgen-col">
                                восстановить, удалить
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
