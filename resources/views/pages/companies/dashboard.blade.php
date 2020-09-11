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
                <a class="btn btn-primary text-uppercase mb-1 add-button" href="#" >Создать</a>
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
                <form class="search-form" method="post" action="#">
                    <div class="input-group">
                        <input class="form-control search-form-input" type="text" placeholder="Поиск">
                        <div class="input-group-append">
                            <button class="btn btn-secondary button-search" type="button" >
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 dashboard-wrapper mb-1">
                <div>
                    <div class="card company-dashboard">
                        <div class="card-body">
                            <canvas id="js-dashboard" height="400px" width="1030px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="dashboard-checkbox-wrapper">
                    <form method="post" action="#">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="all-orders">
                            <label class="custom-control-label" for="all-orders">Все заявки</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="cr-orders" checked>
                            <label class="custom-control-label" for="cr-orders">CR %</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="target-orders">
                            <label class="custom-control-label" for="target-orders">Целевые</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="cpl-orders" checked>
                            <label class="custom-control-label" for="cpl-orders">CPL</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="moderation">
                            <label class="custom-control-label" for="moderation">Проверка</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="gain" checked>
                            <label class="custom-control-label" for="gain">Выручка</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="expenses" checked>
                            <label class="custom-control-label" for="expenses">Расходы</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="income">
                            <label class="custom-control-label" for="income">Прибыль</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="lidgen-balance" checked>
                            <label class="custom-control-label" for="lidgen-balance">Баланс Лидген</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="yandex-balance" checked>
                            <label class="custom-control-label" for="yandex-balance">Баланс Яндекс</label>
                        </div>
                        <div class="custom-control custom-checkbox mt-2">
                            <input type="checkbox" class="custom-control-input" name="customCheck" id="google-balance">
                            <label class="custom-control-label" for="google-balance">Баланс Google</label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12 table-wrapper mb-5">
                @include('includes.company-grid')
            </div>
            @include('includes.no-data')
        </div>
    </main>
@stop
