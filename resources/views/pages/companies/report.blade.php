@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="row">
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper">
                <div class="index-buttons-wrapper mr-3">
                    <div class="date-range js-date-range text-center mb-1" tabindex="0">
                        <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;
                        <span class="js-date-range-span"></span>
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                    </div>
                    <div class="btn-group date-items mb-1">
                        <button type="button" class="btn date-item">Сегодня</button>
                        <button type="button" class="btn date-item">Вчера</button>
                        <button type="button" class="btn date-item">7 дней</button>
                        <button type="button" class="btn date-item">30 дней</button>
                        <button type="button" class="btn date-item">Месяц</button>
                    </div>
                    <button type="button" class="btn page-button mb-1" aria-label="Показать дашборд">
                        <i class="fa fa-line-chart" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btn page-button show-toast mb-1" data-toggle="tooltip"
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
                <a href="#" class="btn btn-primary text-uppercase mb-1 add-button">Создать</a>
            </div>
            <div class="col-md-12 filter-wrapper mb-1">
                <div class="index-select-wrapper d-flex mr-auto">
                    <select class="custom-select select-item">
                        <option selected>Все проекты</option>
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
            <div class="col-md-12 table-wrapper mb-5">
                @include('includes.company_grid')
            </div>
        </div>
    </main>
@stop
