@extends('layouts.app')
@section('content')
    <main class="container">
<div class="row">
    <div class="col-md-12 settings-wrapper border-bottom-secondary">
        <div class="date-group">
            <div class="btn-group mr-1 date-items">
                <button type="button" class="btn">Сегодня</button>
                <button type="button" class="btn">Вчера</button>
                <button type="button" class="btn">7 дней</button>
                <button type="button" class="btn">30 дней</button>
                <button type="button" class="btn">Месяц</button>
            </div>
            <div id="reportrange" class="date-range text-center" tabindex="0">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span> <i class="fa fa-caret-down"></i>
            </div>
        </div>
        <form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Поиск">
                <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <a href="#" class="btn btn-primary text-uppercase">Создать</a>
    </div>
    <div class="col-md-12 filter-wrapper mb-2">
        <div class="col-md-4 d-flex mr-auto">
            <select class="custom-select mr-1">
                <option selected>Все проекты</option>
                <option value="1" disabled>One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <select class="custom-select">
                <option selected>Все менеджеры</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="dashboard-buttons">
            <button type="button ml-auto" class="btn dashboard-button">
                <i class="fa fa-line-chart"></i>
            </button>
            <button type="button" class="btn dashboard-button">
                <i class="fa fa-refresh"></i>
            </button>
        </div>
    </div>
</div>







    </main>
@stop
