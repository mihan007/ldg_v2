@extends('layouts.app')
@section('content')
    <main class="page-wrapper position-relative">
        <h1 class="sr-only">Страница настроек Лидогенератора</h1>
        <div class="row sticky-top bg-white">
            <h2 class="sr-only">Блок навигации по страницам настроек и управления настройками страницы</h2>
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper font-weight-bold">
                @include('includes.lidogenerator-links', ['step'=>'lidogenerator-finance'])
                <a class="balance-info" href=".js-balance-modal" role="button" data-toggle="modal">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                    Баланс 2000
                    <i class="fa fa-rub" aria-hidden="true"></i>
                </a>
            </div>
            @include('includes.finance-settings')
        </div>
        @include('includes.finance-table', ['role'=>'lidogenerator'])
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
