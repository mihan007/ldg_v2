@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="row sticky-top bg-white">
            <h1 class="sr-only">Страница финансов</h1>
            <h2 class="sr-only">Фильтр данных для таблицы по финансам</h2>
            @include('includes.orders-directory-links', ['step'=>'finance', 'role'=>'staff'])
            <div class="col-md-12 filter-wrapper">
                <div class="finance-filter">
                    <div class="filter-select-wrapper">
                        <select class="custom-select select-item">
                            <option selected>Операции</option>
                            <option value="1">Пополнения</option>
                            <option value="2">Списания</option>
                            <option value="3">Возврат</option>
                            <option value="4">Не оплачено</option>
                            <option value="5">Выставлен к оплате</option>
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
        @include('includes.finance-table', ['role'=>'staff'])
        @include('includes.modal.balance-modal')
        @include('includes.modal.bill-modal')
        @include('includes.modal.confirm-modal', [
            'messageHeader' => 'Отметить счет как оплаченный?',
            'modalId' => 'js-confirm-client-paid-modal'
            ])
        @include('includes.modal.confirm-modal', [
            'messageHeader' => 'Отметить счет как неоплаченный?',
            'modalId' => 'js-confirm-client-unpaid-modal'
            ])
    </main>
@stop
