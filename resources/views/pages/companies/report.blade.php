@extends('layouts.app')
@section('content')
    <main class="container">
<div class="row">
<div class="col-12 navbar">
    <div class="btn-group">
        <button type="button" class="btn btn-light disabled">Сегодня</button>
        <button type="button" class="btn btn-light">Вчера</button>
        <button type="button" class="btn btn-light">7 дней</button>
        <button type="button" class="btn btn-light">30 дней</button>
        <button type="button" class="btn btn-light">Месяц</button>
    </div>
    <div id="reportrange" class="date-range" style="">
        <i class="fa fa-calendar"></i>&nbsp;
        <span></span> <i class="fa fa-caret-down"></i>
    </div>
    <form class="form-inline">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Поиск">
            <div class="input-group-append">
                <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </form>
    <button type="button" class="btn btn-primary">Создать</button>
</div>
    <div class="col-12">

    </div>
    <div class="col-12">

    </div>
        </div>






    </main>
@stop
