@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="row">
            <div class="col-md-12 offset-block">
            </div>
            <div class="col-md-12 settings-wrapper border-bottom font-weight-bold">
                <div>
                    <a class="directory-button active" href="{{ route('settings.workspace') }}">1. Рабочая область</a>
                    <a class="directory-button" href="#">2. Источник заявок</a>
                    <a class="directory-button" href="#">3. Реклама</a>
                    <a class="directory-button" href="#">4. Интеграция CRM</a>
                </div>
                <div>
                    <select class="custom-select settings-select-item">
                        <option selected>Менеджер</option>
                        <option value="1">Имя 1</option>
                        <option value="2">Имя 2</option>
                        <option value="3">Имя 3</option>
                        <option value="4">Имя 4</option>
                        <option value="5">Имя 5</option>
                        <option value="6">Имя 6</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12 border-bottom">
                <form class="d-flex">
                    <div class="d-flex flex-column workspace-form-column">
                        <div class="form-group company-name-group">
                            <label class="workspace-form-label" for="company-name">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Эта информация будет видна клиенту">
                                    1. Название компании
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                </a>
                            </label>
                            <input class="form-control company-name-input" type="text" id="company-name" required>
                        </div>
                        <div class="d-flex align-items-end">
                            <div class="form-group max-cpl-group">
                                <label class="workspace-form-label" for="max-cpl">
                                    <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Отправим оповещение о превышении CPL за прошлые сутки ответственному менеджеру.
                                       Оставьте 0 рублей, чтобы не получать уведомления">
                                        5. Максимально допустимый CPL
                                        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                    </a>
                                </label>
                                <div class="input-group">
                                    <input class="form-control max-cpl-input" type="number" id="max-cpl" min="0" placeholder="0">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group balance-limit-group">
                                <label class="workspace-form-label" for="balance-limit">
                                    <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Отправим оповещение компании о необходимости пополнить баланс">
                                        6. Уведомлять об окончании баланса Лидогенератора при
                                        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                    </a>
                                </label>
                                <div class="input-group">
                                    <input class="form-control balance-limit-input" type="number" id="balance-limit" min="0" placeholder="0">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column workspace-form-column justify-content-between">
                        <div class="form-group project-group">
                            <label class="workspace-form-label" for="project">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Разделяйте лидогенерацию по нишам. Пример: окна, юристы, строительство">
                                    2. Проект
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                </a>
                            </label>
                            <input class="form-control project-input" type="text" id="project" required>
                        </div>
                        <div class="form-group data-hide-group">
                            <label class="workspace-form-label" for="data-hide">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Система скроет данные заявки при балансе ниже этого значения">
                                    7. Скрывать данные заявок при балансе Лидогенератора менее
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                </a>
                            </label>
                            <div class="input-group">
                                <input class="form-control data-hide-input" type="number" id="data-hide" min="0" placeholder="0">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column workspace-form-column justify-content-between">
                        <div class="form-group base-cost-group">
                            <label class="workspace-form-label" for="base-cost">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Ваше вознаграждение за целевую заявку">
                                    3. Базовая цена заявки для клиента
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                </a>
                            </label>
                            <div class="input-group">
                                <input class="form-control base-cost-input" type="number" id="base-cost" min="0"
                                       max="100000" placeholder="0">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group moderation-period-group">
                            <label class="workspace-form-label" for="moderation-period">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Количество дней в течение которых клиент может изменить статус заявки.
                                   Максимальный период 45 дней">
                                    8. Максимальный период модерации заявок клиентом
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                </a>
                            </label>
                            <input class="form-control moderation-period-input" type="number" id="moderation-period" placeholder="7"
                                   min="1" max="45">
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between">
                        <div class="form-group orders-agreement-group">
                            <label class="workspace-form-label" for="orders-agreement">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Соглашение о том, какие заявки считаются нецелевыми или целевыми">
                                    4. Описание соглашения по заявкам
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                </a>
                            </label>
                            <textarea class="form-control orders-agreement-input" rows="4" type="text" id="orders-agreement"
                                  placeholder="Пример: Не оплачивается и считается некачественной заявка, если: 1. Клиент
                                  не интересуется услугой. 2. Не смогли дозвониться с 4-х попыток
                                  3. Клиент не в вашем ГЕО работы
                                  4. Дубль заявки от клиента в нашей CRM"
                                      required></textarea>
                        </div>
                        <button class="btn description-example-button w-75 mx-auto">Вставить стандартное описание</button>
                    </div>
                </form>
            </div>
            <div class="col-md-12 mb-1 mt-1 settings-wrapper">
                <div>
                    <span>9. Доступ клиента к заявкам и уведомления</span>
                    <button class="btn client-acсess-button">
                        <i class="fa fa-external-link" aria-hidden="true"></i>
                    </button>
                </div>
                <form class="form-inline workspace-email-form">
                    <div class="form-group workspace-email-group">
                        <label class="sr-only" for="workspace-email">Почта</label>
                        <input class="form-control workspace-email-input" type="email" id="workspace-email" placeholder="Почта">
                    </div>
                    <button type="submit" class="btn btn-primary email-add-button">Добавить
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="table-wrapper mb-5">
                    <table class="table workspace-table common-table workspace-grid" data-offset="140">
                        <thead>
                        <tr class="table-grey text-center">
                            <th class="rounded-table-left i-col">Активность
                            </th>
                            <th class="email-col" scope="col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Дата и время в часовом поясе клиента">Почта
                                </a>
                            </th>
                            <th class="titl-col" scope="col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Название страницы или формы заявки">Доступ в CRM
                                </a>
                            </th>
                            <th class="inf-col" scope="col">Оповещение о заявках
                            </th>
                            <th class="phon-col" scope="col">Лидогенератор баланс
                            </th>
                            <th class="stats-col" scope="col">
                                Яндекс баланс
                            </th>
                            <th class="clien-col" scope="col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Комментарий клиента">
                                    Google баланс
                                </a>
                            </th>
                            <th class="moderatio-col" scope="col">
                                Roistat баланс
                            </th>
                            <th class="commen-col" scope="col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Комментарий модератора">
                                   Администратор
                                </a>
                            </th>
                            <th class="buttos-col rounded-table-right">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="order-line">
                            <td class="i-col text-center" scope="row">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="active-switch"
                                           type="checkbox" checked>
                                    <label class="custom-control-label font-italic" for="active-switch"
                                           aria-label="Активность включена/выключена"></label>
                                </div>
                            </td>
                            <td class="email-col text-center">1@troiza.net</td>
                            <td class="tite-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customCheck" id="crm-access"
                                           checked>
                                    <label class="custom-control-label" for="crm-access" aria-label="Доступ в CRM клиента">
                                    </label>
                                </div>
                            </td>
                            <td class="ino-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-warning"
                                           id="orders-message" name="example1" checked>
                                    <label class="custom-control-label" for="orders-message" aria-label="Оповещение о
                                    заявках"></label>
                                </div>
                            </td>
                            <td class="phne-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-danger"
                                           id="ldg-balance" name="example1" checked>
                                    <label class="custom-control-label custom-control-label-cross" for="ldg-balance"
                                           aria-label="Лидогенератор баланс"></label>
                                </div>
                            </td>
                            <td class="staus-col target-status text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-success"
                                           id="yandex-balance" name="example1" checked>
                                    <label class="custom-control-label" for="yandex-balance" aria-label="Яндекс баланс">
                                    </label>
                                </div>
                            </td>
                            <td class="clint-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-warning"
                                           name="example1" id="google-balance" checked>
                                    <label class="custom-control-label" for="google-balance" aria-label="Google баланс">
                                    </label>
                                </div>
                            </td>
                            <td class="modration-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-danger"
                                           name="customCheck" id="roistat-balance" checked>
                                    <label class="custom-control-label custom-control-label-cross" for="roistat-balance"
                                           aria-label="Roistat баланс"></label>
                                </div>
                            </td>
                            <td class="coment-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customCheck"
                                           id="administrator" checked>
                                    <label class="custom-control-label" for="administrator" aria-label="Администратор">
                                    </label>
                                </div>
                            </td>
                            <td class="workspace-buttons-col text-center">
                                <button  class="btn reset-button reset-button-show workspace-reset-button" type="reset"
                                         value="Удаление" aria-label="Удалить заявку">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="order-line">
                            <td class="i-col text-center" scope="row">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="active-switch2"
                                           type="checkbox">
                                    <label class="custom-control-label font-italic" for="active-switch2"
                                           aria-label="Активность включена/выключена"></label>
                                </div>
                            </td>
                            <td class="email-col text-center">1@troiza.net</td>
                            <td class="tite-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customCheck" id="crm-access2">
                                    <label class="custom-control-label" for="crm-access2" aria-label="Доступ в CRM клиента"></label>
                                </div>
                            </td>
                            <td class="ino-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-warning" id="orders-message2" name="example1">
                                    <label class="custom-control-label" for="orders-message2" aria-label="Оповещение о заявках"></label>
                                </div>
                            </td>
                            <td class="phne-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-danger" id="ldg-balance2" name="example1">
                                    <label class="custom-control-label custom-control-label-cross" for="ldg-balance2" aria-label="Лидогенератор баланс"></label>
                                </div>
                            </td>
                            <td class="staus-col target-status text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-success" id="yandex-balance2" name="example1">
                                    <label class="custom-control-label" for="yandex-balance2" aria-label="Яндекс баланс"></label>
                                </div>
                            </td>
                            <td class="clint-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-warning" name="example1" id="google-balance2">
                                    <label class="custom-control-label" for="google-balance2" aria-label="Google баланс"></label>
                                </div>
                            </td>
                            <td class="modration-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input custom-control-input-danger" name="customCheck" id="roistat-balance2">
                                    <label class="custom-control-label custom-control-label-cross" for="roistat-balance2" aria-label="Roistat баланс"></label>
                                </div>
                            </td>
                            <td class="coment-col text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customCheck" id="administrator2">
                                    <label class="custom-control-label" for="administrator2" aria-label="Администратор"></label>
                                </div>
                            </td>
                            <td class="workspace-buttons-col text-center">
                                <button  class="btn reset-button reset-button-show workspace-reset-button" type="reset"
                                         value="Удаление" aria-label="Удалить заявку">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade js-balance-modal" tabindex="-1">
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
                                    <div class="invalid-feedback">Сообщение об ошибке
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



            <div class="form-group">
                <label class="form-check-label"><input type="checkbox"> Remember me</label>
            </div>


            <div class="order-filter">
                <select class="custom-select select-item">
                    <option selected>Все заявки</option>
                    <option value="1">Целевые заявки</option>
                    <option value="2">Нецелевые заявки</option>
                    <option value="3">На модерации</option>
                </select>
                <div class="date-range js-date-range text-center">
                    <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;
                    <span class="js-date-range-span"></span>
                    <i class="fa fa-caret-down"></i>
                </div>
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

    </main>
@stop
