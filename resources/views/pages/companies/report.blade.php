@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="row">
            <h1 class="sr-only">Страница компаний</h1>
            <h2 class="sr-only">Фильтр для таблицы данных по компаниям</h2>
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper">
                <div class="index-buttons-wrapper mr-3">
                    @include('includes.date-range')
                    <div class="btn-group date-items mb-1">
                        <button class="btn date-item" type="button">Сегодня</button>
                        <button class="btn date-item" type="button">Вчера</button>
                        <button class="btn date-item" type="button">7 дней</button>
                        <button class="btn date-item" type="button">30 дней</button>
                        <button class="btn date-item" type="button">Месяц</button>
                    </div>
                    <button type="button" class="btn page-button mb-1" aria-label="Показать дашборд">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn page-button show-update-toast mb-1" data-toggle="tooltip"
                            data-placement="bottom" title="Последнее обновление ..." data-trigger="hover"
                            aria-label="Обновление данных в таблице аналитики">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </button>
                    <div class="toast update-button js-update-toast">
                        <div class="toast-body">
                            <div>Данные обновлены</div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary mb-1 add-button" href="{{ route('settings.workspace') }}">
                    Создать
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-md-12 filter-wrapper mb-1">
                <div class="index-select-wrapper d-flex mr-auto">
                    <select class="custom-select select-item">
                        <option selected>Все ниши</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="custom-select select-item">
                        <option selected>Все менеджеры</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                @include('includes.search-form')
            </div>
            <div class="col-md-12 table-wrapper mb-5">
                <h2 class="sr-only">Таблица данных по компаниям</h2>
                @include('includes.company-grid')
            </div>
            @include('includes.no-data')
        </div>
    </main>
@stop
