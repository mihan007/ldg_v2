@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
<div class="row">
    <div class="col-md-12 settings-wrapper">
        <div class="date-group">
            <div class="btn-group mr-1 date-items mb-2">
                <button type="button" class="btn">Сегодня</button>
                <button type="button" class="btn">Вчера</button>
                <button type="button" class="btn">7 дней</button>
                <button type="button" class="btn">30 дней</button>
                <button type="button" class="btn">Месяц</button>
            </div>
            <div id="reportrange" class="date-range text-center mb-2" tabindex="0">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span> <i class="fa fa-caret-down"></i>
            </div>
        </div>
        <form class="form-inline mb-2">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Поиск">
                <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <a href="#" class="btn btn-primary text-uppercase col-md-2 mb-2">Создать</a>
    </div>
    <div class="col-md-12 filter-wrapper mb-4">
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
<div class="col-md-12 table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr class="table-primary">
            <th>
                <i class="fa fa-bars mr-1"></i> Компания
            </th>
            <th>Баланс</th>
            <th>Пополнения</th>
            <th>Выручка</th>
            <th>Прибыль</th>
            <th>Лиды</th>
            <th>CPL</th>
            <th>Принято %</th>
            <th>Проценты</th>
            <th>Я.Баланс</th>
            <th>G.Баланс</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><span class="sigma-icon">&#931;</span>Итого / Среднее</td>
            <td>2000</td>
            <td>10000</td>
            <td>5000</td>
            <td>500</td>
            <td>250</td>
            <td>75</td>
            <td>2500</td>
            <td>4000</td>
            <td>2000</td>
            <td>2000</td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars company-icon mr-1"></i> Импульс
            </td>
            <td>2000</td>
            <td>10000</td>
            <td>5000</td>
            <td>500</td>
            <td>250</td>
            <td>75</td>
            <td>2500</td>
            <td>4000</td>
            <td>2000</td>
            <td>2000</td>
        </tr>
        </tbody>
    </table>
</div>
</div>





    </main>
@stop
