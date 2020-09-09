@extends('layouts.app')
@section('content')
    <main class="page-wrapper no-data-page-wrapper">
        <div class="row bg-white">
            <h1 class="sr-only">Страница отсутствия данных для отображения</h1>
            <div class="col-md-12 offset-block"></div>
            <div class="col-12 col-sm-11 col-md-9 col-lg-7 text-center mx-auto">
                @desktop
                    <div class="no-data-image-wrapper pt-3">
                        <img class="no-data-image" src="./img/no-data.png" width="500" height="515"
                             alt="Нет данных для отображения">
                    </div>
                    <div class="mt-3 alert alert-primary">Нет данных для отображения с учетом текущих настроек фильтра и периода</div>
                @elsedesktop
                    <div class="no-data-image-wrapper pt-3">
                        <img class="no-data-image" src="./img/no-data.png" width="280" height="295"
                             alt="Нет данных для отображения">
                    </div>
                    <p class="mt-2 alert alert-primary">Нет данных для отображения с учетом текущих настроек фильтра и периода</p>
                @enddesktop
            </div>
        </div>
    </main>
@stop
