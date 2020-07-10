@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="row sticky-top bg-white">
            <h1 class="sr-only">Страница финансов</h1>
            <h2 class="sr-only">Фильтр данных для таблицы по финансам</h2>
            @include('includes.orders-directory-links', ['step'=>'finance'])
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
                    @include('includes.date-range')
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
                @include('includes.search-form')
            </div>
            <!-- Алерт об ошибке финансовой системы -->
            <div class="col-md-6 text-center mx-auto balance-alert-wrapper">
                <div class="alert alert-primary finance-balance-alert w-auto" role="alert">
                    Тут будет уведомление об ошибке работы финансовой подсистемы
                    <button class="close balance-alert-close" type="button" data-dismiss="alert">&times;</button>
                </div>
            </div>
        </div>
        <div class="row">
            <h2 class="sr-only">Таблица данных по финансам</h2>
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
        @include('includes.balance-modal')
        @include('includes.bill-modal')
    </main>
@stop
