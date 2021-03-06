@extends('layouts.app')
@section('content')
    <main class="page-wrapper crm-main">
        @desktop
            <div class="row bg-white sticky-top">
            <script>let gridOffset = 144;</script>
        @elsedesktop
            <div class="row bg-white">
                <script>let gridOffset = 50;</script>
        @enddesktop
            <h1 class="sr-only">Страница заявок</h1>
            <h2 class="sr-only">Фильтр данных для таблицы заявок</h2>
            @include('includes.orders-directory-links', ['step'=>'crm', 'role'=>'staff'])
            <div class="col-md-12 filter-wrapper">
                <div class="order-filter">
                    <select class="custom-select select-item crm-select-item">
                        <option selected>Все заявки</option>
                        <option value="1">Целевые заявки</option>
                        <option value="2">Нецелевые заявки</option>
                        <option value="3">На модерации</option>
                    </select>
                    @include('includes.date-range')
                </div>
                <div class="orders-count-wrapper text-center">
                    <ul class="list-inline mb-0 d-flex justify-content-between">
                        <li class="list-inline-item bg-success text-white rounded targeted-orders-count"
                            data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                            title="Целевые заявки">
                            <p class="font-weight-bold mb-0 d-block">2415</p>
                        </li>
                        <li class="list-inline-item bg-danger text-white rounded inappropriate-orders-count"
                            data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                            title="Нецелевые заявки">
                            <p class="font-weight-bold mb-0 d-block">8477</p>
                        </li>
                    </ul>
                </div>
                <div class="order-buttons">
                    <button type="button" class="btn page-button show-toast" data-toggle="tooltip" data-placement="top"
                            data-delay='{"show":"1000", "hide":"1000"}'
                            title="Подробное описание условий того, какие заявки считаются целевыми и нецелевыми">
                        Описание условий</button>
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
                    <select class="custom-select openmodal add-order-select-item w-auto">
                        <option selected>Добавить заявку</option>
                        <option value="1" data-modal="js-orders-source-modal">Источник 1</option>
                        <option value="2" data-modal="js-orders-source-modal">Источник 2</option>
                    </select>
                </div>
                @include('includes.search-form')
            </div>
        </div>
        @include('includes.orders-table', ['role'=>'staff'])
        @include('includes.modal.balance-modal')
        @include('includes.modal.comment-modal', [
            'messageHeader' => 'Укажите, почему Вы не согласны с решением клиента',
            'messagePlaceholder' => 'Опишите причину здесь'
        ])
        @include('includes.modal.orders-source-modal')
    </main>
@stop
