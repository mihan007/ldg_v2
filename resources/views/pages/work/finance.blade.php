@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        @include('includes.finance-settings')
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
