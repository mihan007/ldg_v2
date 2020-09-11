@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        @desktop
            <div class="row bg-white sticky-top">
            <script>let gridOffset = 144;</script>
        @elsedesktop
            <div class="row bg-white">
            <script>let gridOffset = 50;</script>
        @enddesktop
            <h1 class="sr-only">Страница финансов</h1>
            <h2 class="sr-only">Фильтр данных для таблицы по финансам</h2>
            @include('includes.orders-directory-links', ['step'=>'finance', 'role'=>'staff'])
            @include('includes.finance-settings', ['role'=> null])
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
