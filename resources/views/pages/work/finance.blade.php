@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="row sticky-top bg-white">
            <div class="col-md-12 offset-block">
            </div>
            <div class="col-md-12 settings-wrapper directory-buttons">
                <div>
                    <a class="directory-button" href="{{ route('work.orders') }}">CRM</a>
                    <a class="directory-button active" href="{{ route('work.finance') }}">Финансы</a>
                </div>
                <div>
                    <a href=".js-balance-modal" role="button" class="balance-info" data-toggle="modal">
                        <i class="fa fa-plus-square" aria-hidden="true"></i>
                        Баланс 2000
                        <i class="fa fa-rub" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-12 filter-wrapper">
                <div class="finance-filter">
                    <div class="filter-select-wrapper">
                        <select class="custom-select select-item">
                            <option selected>Операции</option>
                            <option value="1">Пополнения</option>
                            <option value="2">Списания</option>
                            <option value="3">Возврат</option>
                            <option value="4">Не оплачено</option>
                        </select>
                        <select class="custom-select select-item">
                            <option selected>Источник</option>
                            <option value="1">Банковская карта</option>
                            <option value="2">Яндекс.Деньги</option>
                            <option value="3">Расчетный счет</option>
                            <option value="4">Пополнение вручную</option>
                        </select>
                    </div>
                    <div class="date-range js-date-range text-center">
                        <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;
                        <span class="js-date-range-span"></span>
                        <i class="fa fa-caret-down"></i>
                    </div>
                </div>
                <div class="finance-buttons">
                    <div class="income-expense-wrapper">
                        <span class="income-finance-info">-2000</span>
                        <span>/</span>
                        <span class="expense-finance-info">+2000</span>
                    </div>
                    <a href=".js-bill-modal" role="button" class="btn page-button bill-button" data-toggle="modal">
                        Выставить счет
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
            <!-- Алерт об ошибке финансовой системы -->
            <div class="col-md-6 text-center mx-auto balance-alert-wrapper">
                <div class="alert alert-primary finance-balance-alert w-auto" role="alert">
                    Тут будет уведомление об ошибке работы финансовой подсистемы
                    <button type="button" class="close balance-alert-close" data-dismiss="alert">&times;</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="table-wrapper mb-5">
                    <table class="table finance-table common-table finance-grid table-striped" data-offset="144">
                        <thead>
                            <tr class="table-grey text-center ">
                                <th class="rounded-table-left finance-time-col" scope="col">Время</th>
                                <th class="finance-operation-col" scope="col">Операция</th>
                                <th class="finance-info-co" scope="col">Информация</th>
                                <th class="finance-sum-col" scope="col">Сумма</th>
                                <th class="finance-history-col rounded-table-right" scope="col">История счета</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="finance-time-col text-left" scope="row">11.02.2018 13:00:00</td>
                                <td class="finance-operation-col">Пополнение</td>
                                <td class="finance-info-col">Емельянов Виктор</td>
                                <td class="finance-sum-col">+-2.00</td>
                                <td class="finance-history-col">85557</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.03.2018 13:00:00</td>
                                <td>Списание</td>
                                <td>Целевая заявка №26061</td>
                                <td>-100.00</td>
                                <td>7777</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.04.2018 13:00:00</td>
                                <td>Списание</td>
                                <td>Возврат средств за дубль заявки №24697</td>
                                <td>+100.00</td>
                                <td>55</td>
                            </tr>
                            <tr>
                                <td class="finance-time-col text-left" scope="row">11.05.2018 13:00:00</td>
                                <td class="finance-operation-col">Пополнение</td>
                                <td class="finance-info-col">Емельянов Виктор</td>
                                <td class="finance-sum-col">+-2.00</td>
                                <td class="finance-history-col">85557</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.06.2018 13:00:00</td>
                                <td>Списание</td>
                                <td>Целевая заявка №26061</td>
                                <td>-100.00</td>
                                <td>7777</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.07.2018 13:00:00</td>
                                <td>Списание</td>
                                <td>Возврат средств за дубль заявки №24697</td>
                                <td>+100.00</td>
                                <td>55</td>
                            </tr>
                            <tr>
                                <td class="finance-time-col text-left" scope="row">11.08.2018 13:00:00</td>
                                <td class="finance-operation-col">Пополнение</td>
                                <td class="finance-info-col">Емельянов Виктор</td>
                                <td class="finance-sum-col">+-2.00</td>
                                <td class="finance-history-col">85557</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.09.2018 13:00:00</td>
                                <td>Списание</td>
                                <td>Целевая заявка №26061</td>
                                <td>-100.00</td>
                                <td>7777</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.10.2018 13:00:00</td>
                                <td>Списание</td>
                                <td>Возврат средств за дубль заявки №24697</td>
                                <td>+100.00</td>
                                <td>55</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.11.2018 13:00:00</td>
                                <td>Списание</td>
                                <td>Возврат средств за дубль заявки №24697</td>
                                <td>+100.00</td>
                                <td>55</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.12.2018 13:00:00</td>
                                <td>Списание</td>
                                <td>Целевая заявка №26061</td>
                                <td>-100.00</td>
                                <td>7777</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.01.2019 13:00:00</td>
                                <td>Списание</td>
                                <td>Возврат средств за дубль заявки №24697</td>
                                <td>+100.00</td>
                                <td>55</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.01.2020 13:00:00</td>
                                <td>Списание</td>
                                <td>Целевая заявка №26061</td>
                                <td>-100.00</td>
                                <td>7777</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.02.2020 13:00:00</td>
                                <td>Списание</td>
                                <td>Возврат средств за дубль заявки №24697</td>
                                <td>+100.00</td>
                                <td>55</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.03.2020 13:00:00</td>
                                <td>Списание</td>
                                <td>Целевая заявка №26061</td>
                                <td>-100.00</td>
                                <td>7777</td>
                            </tr>
                            <tr>
                                <td class="text-left" scope="row">11.04.2020 13:00:00</td>
                                <td>Списание</td>
                                <td>Возврат средств за дубль заявки №24697</td>
                                <td>+100.00</td>
                                <td>55</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="js-balance-modal modal fade" tabindex="-1">
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
    </div>
    <div class="js-bill-modal modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Создание счета</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form class="bill-actions" method="post" action="/" novalidate>
                        <div class="form-group">
                            <label class="sr-only" for="inputEmail">Сумма</label>
                            <div class="input-group">
                                <input class="form-control" type="number" min="0" id="inputSumBill" placeholder="Сумма" required>
                                <div class="invalid-feedback">Сообщение об ошибке
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inputEmail">Наименование организации</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="inputCompanyBill" placeholder="Наименование организации" required>
                                <div class="invalid-feedback">Сообщение об ошибке
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inputEmail">Инн</label>
                            <div class="input-group">
                                <input class="form-control" type="text" id="inputTaxesNumber" placeholder="ИНН" required>
                                <div class="invalid-feedback">Сообщение об ошибке
                                </div>
                            </div>
                        </div>
                        <div class="form-group bill-action-buttons">
                            <button class="btn btn-primary bill-action-button" type="submit">Создать</button>
                            <button class="btn cancel-button bill-action-button" data-dismiss="modal"
                                    type="button">Отменить
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@stop
