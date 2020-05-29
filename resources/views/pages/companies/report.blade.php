@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
<div class="row">
    <div class="col-md-12 settings-wrapper">
        <div class="date-group mr-3">
            <div class="btn-group mr-3 date-items mb-2">
                <button type="button" class="btn date-item">Сегодня</button>
                <button type="button" class="btn date-item">Вчера</button>
                <button type="button" class="btn date-item">7 дней</button>
                <button type="button" class="btn date-item">30 дней</button>
                <button type="button" class="btn date-item">Месяц</button>
            </div>
            <div id="reportrange" class="date-range text-center mb-2" tabindex="0">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span> <i class="fa fa-caret-down"></i>
            </div>
        </div>
        <a href="#" class="btn btn-primary text-uppercase col-md-2 mb-2">Создать</a>
    </div>
    <div class="col-md-12 filter-wrapper mb-2">
        <div class="col-md-4 d-flex mr-auto">
            <select class="custom-select mr-3">
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
            <button type="button ml-auto" class="btn dashboard-button" aria-label="Показать дашборд">
                <i class="fa fa-line-chart"></i>
            </button>
            <button type="button" class="btn dashboard-button show-toast" data-toggle="tooltip" data-placement="bottom"
                    title="Последнее обновление ..." aria-label="Обновление данных в таблице аналитики">
                <i class="fa fa-refresh"></i>
            </button>
            <div class="toast" id="myToast" style="position: absolute; bottom: 100px; right: 0;">
                <div class="toast-body">
                    <div>Данные обновлены</div>
                </div>
            </div>
        </div>
        <form class="search-form">
            <div class="input-group ">
                <input type="text" class="form-control" placeholder="Поиск">
                <div class="input-group-append">
                    <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
<div class="col-md-12 table-responsive">
    <table class="table company-table">
        <thead>
        <tr class="table-secondary">
            <th rowspan="2">
                <a data-toggle="tooltip" data-placement="top" title="Название компании">
                    <i class="fa fa-bars company-icon mr-1"></i> Компания <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
            <th rowspan="2">
                <a data-toggle="tooltip" data-placement="top" title="Общее количество входящих заявок">
                    Все заявки <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th >
            <th rowspan="2">
                <a data-toggle="tooltip" data-placement="top" title="Доля целевых заявок от общего количества заявок">
                    CR % <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
            <th rowspan="2">
                <a data-toggle="tooltip" data-placement="top" title="Заявки в статусе &laquo;Целевая заявка&raquo;">
                    Целевые заявки  <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
            <th rowspan="2">
                <a data-toggle="tooltip" data-placement="top" title="Средняя стоимость заявки (Расходы / Целевые заявки)">
                    CPL <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
            <th rowspan="2">
                <a data-toggle="tooltip" data-placement="top" title="Заявки в статусе модерации. Не согласовано">
                    Заявки на модерации <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
            <th rowspan="2">
                <a data-toggle="tooltip" data-placement="top" title="Вознаграждение без учета расходов">
                    Выручка <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
            <th rowspan="2">
                <a data-toggle="tooltip" data-placement="top" title="Рекламные расходы">
                    Расходы <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
            <th rowspan="2">
                <a data-toggle="tooltip" data-placement="top" title="Выручка минус рекламные расходы, если настроен
                вычет расходов">
                    Прибыль <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
            <th colspan="3" class="text-center">Баланс сервисов</th>
        </tr>
        <tr class="table-secondary">
            <th>
                <a data-toggle="tooltip" data-placement="top" title="Баланс аккаунта компании &laquo;Лидогенератор&raquo;">
                    Лидген <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
            <th>
                <a data-toggle="tooltip" data-placement="top" title="Баланс аккаунтов Яндекс.Директ">
                    Яндекс <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
            <th>
                <a data-toggle="tooltip" data-placement="right" title="Баланс аккаунтов Google Ads">
                    Google <small><i class="fa fa-question-circle-o"></i></small>
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr class="sum-line">
            <td>
                <a data-toggle="tooltip" data-placement="right" title="Подсчитывается по всем компаниям соответствующим
                фильтру">
                    <span class="sigma-icon">&#931;</span>Итого / Среднее
                    <small><i class="fa fa-question-circle-o"></i><small>
                </a>
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
            <td>2000</td>
        </tr>
        <tr class="dark-stroke">
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Центр профессиональной юридической помощи. Тверь.
                Оказываем юридические услуги.
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
            <td>2000</td>
        </tr>
        <tr class="dark-stroke">
            <td>
                <i class="fa fa-bars company-icon-hover mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr class="dark-stroke">
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr class="dark-stroke">
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr class="dark-stroke">
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr class="dark-stroke">
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr class="dark-stroke">
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr>
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        <tr class="dark-stroke">
            <td>
                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
            <td>2000</td>
        </tr>
        </tbody>
    </table>
</div>
</div>
    </main>
{{--    <div id="myModal" class="modal fade" tabindex="-1">--}}
{{--        <div class="modal-dialog">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title">Лидогенератор</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    <p>Данные в таблице аналитики обновлены.</p>--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>--}}
{{--                    <button type="button" class="btn btn-primary">Сохранить данные</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@stop
