@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
<div class="row">
    <div class="col-md-12 settings-wrapper">
        <div class="index-buttons-wrapper mr-3">
            <div id="reportrange" class=" date-range text-center mb-1" tabindex="0">
                <i class="fa fa-calendar"></i>&nbsp;
                <span></span> <i class="fa fa-caret-down"></i>
            </div>

            <div class="btn-group date-items mb-1">
                <button type="button" class="btn date-item">Сегодня</button>
                <button type="button" class="btn date-item">Вчера</button>
                <button type="button" class="btn date-item">7 дней</button>
                <button type="button" class="btn date-item">30 дней</button>
                <button type="button" class="btn date-item">Месяц</button>
            </div>


            <button type="button" class="btn dashboard-button mb-1" aria-label="Показать дашборд">
                <i class="fa fa-line-chart"></i>
            </button>
            <button type="button" class="btn dashboard-button show-toast mb-1" data-toggle="tooltip" data-placement="bottom"
                    title="Последнее обновление ..." trigger="hover" aria-label="Обновление данных в таблице аналитики">
                <i class="fa fa-refresh"></i>
            </button>
            <div class="toast update-button" id="myToast">
                <div class="toast-body">
                    <div>Данные обновлены</div>
                </div>
            </div>
        </div>

        <a href="#" class="btn btn-primary text-uppercase col-md-2 mb-1 add-button">Создать</a>
    </div>
    <div class="col-md-12 filter-wrapper mb-1">
        <div class="index-select-wrapper d-flex mr-auto">
            <select class="custom-select index-select">
                <option selected>Все проекты</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <select class="custom-select index-select">
                <option selected>Все менеджеры</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <form class="search-form col-md-2">
            <div class="input-group">
                <input type="text" class="form-control search-form-input" placeholder="Поиск">
                <div class="input-group-append">
                    <button type="button" class="btn btn-secondary button-search"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
<div class="col-md-12 table-wrapper" id="header">
    <table class="table company-table" id="dtBasicExample" cellspacing="0" width="100%">
        <thead class="table-bordered table-fixed">
        <tr class="table-secondary table-head">
            <th rowspan="2" class="th-sm position-sticky">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Название компании">
                    <i class="fa fa-bars company-icon mr-2"></i>Компания<i class="fa fa-fw fa-sort"></i>
                </a>
            </th>
            <th colspan="5" class="text-center">Заявки</th>
            <th colspan="3" class="text-center">Финансы</th>
            <th colspan="3" class="text-center">Баланс сервисов</th>
        </tr>
        <tr class="table-secondary text-center table-head">
            <th class="th-sm">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Общее количество входящих заявок">
                    Все<i class="fa fa-fw fa-sort-asc"></i>
                </a>
            </th>
            <th class="th-sm table-head">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Доля целевых заявок от общего количества заявок">
                    CR %<i class="fa fa-fw fa-sort-desc"></i>
                </a>
            </th>
            <th class="th-sm">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Заявки в статусе &laquo;Целевая заявка&raquo;">
                    Целевые
                </a>
            </th>
            <th class="th-sm">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Средняя стоимость заявки (Расходы / Целевые заявки)">
                    CPL<i class="fa fa-fw fa-sort"></i>
                </a>
            </th>
            <th class="th-sm">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Заявки в статусе модерации. Не согласовано">
                    На модерации<i class="fa fa-fw fa-sort-asc"></i>
                </a>
            </th>
            <th class="th-sm">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Вознаграждение без учета расходов">
                    Выручка<i class="fa fa-fw fa-sort-desc"></i>
                </a>
            </th>
            <th class="th-sm">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Рекламные расходы">
                    Расходы
                </a>
            </th>
            <th class="th-sm">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Выручка минус рекламные расходы, если настроен
                вычет расходов">
                    Прибыль<i class="fa fa-fw fa-sort"></i>
                </a>
            </th>
            <th class="th-sm">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Баланс аккаунта компании Лидогенератор">
                    Лидген<i class="fa fa-fw fa-sort-asc"></i>
                </a>
            </th>
            <th class="th-sm">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Баланс аккаунтов Яндекс.Директ">
                    Яндекс<i class="fa fa-fw fa-sort-desc"></i>
                </a>
            </th>
            <th class="th-sm">
                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Баланс аккаунтов Google Ads">
                    Google<i class="fa fa-fw fa-sort"></i>
                </a>
            </th>
        </tr>
        </thead>
        <tbody class="overflow-auto">
        <tr class="sum-line">
            <td>
                <a data-toggle="tooltip" data-placement="right" data-delay='{"show":"1000", "hide":"1000"}' title="Подсчитывается по всем компаниям соответствующим
                фильтру">
                    <span class="sigma-icon">&#931;</span>Итого / Среднее
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
    <div class="col-md-12 mt-3">
        <nav class="">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><span class="page-link">&#8592;</span></li>
                <li class="page-item active"><a href="#" class="page-link">1</a></li>
                <li class="page-item"><a href="#" class="page-link">2</a></li>
                <li class="page-item"><a href="#" class="page-link">3</a></li>
                <li class="page-item"><a href="#" class="page-link">4</a></li>
                <li class="page-item"><a href="#" class="page-link">5</a></li>
                <li class="page-item"><a href="#" class="page-link">&#8594;</a></li>
            </ul>
        </nav>
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
