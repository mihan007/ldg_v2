@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="row">
            <h1 class="sr-only">Страница компаний</h1>
            <h2 class="sr-only">Фильтр для таблицы данных по компаниям</h2>
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper">
                @include('includes.date-range', ['role'=>'lidogenerators'])
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
                <div class="toast update-button lidogenerators-update-button js-update-toast">
                    <div class="toast-body">
                        <div>Данные обновлены</div>
                    </div>
                </div>
                <form class="lidogenerstors-search-form mb-1 mr-3" method="get" action="#">
                    <div class="input-group">
                        <input type="text" class="form-control search-form-input" placeholder="Поиск">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary button-search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <a class="btn btn-primary mb-1 add-button" href=".js-lidogenerators-invite-modal" role="button" data-toggle="modal">
                    Пригласить <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-md-12 table-wrapper mb-5">
                <h2 class="sr-only">Таблица данных по компаниям</h2>
                <table class="table company-table common-table lidogenerator-grid table-striped">
                    <thead>
                    <tr class="table-grey">
                        <th class="text-left rounded-table-left">Рабочая область</th>
                        <th colspan="5" class="text-center">Заявки</th>
                        <th colspan="3" class="text-center">Финансы</th>
                        <th colspan="2" class="text-center rounded-table-right">Аккаунт</th>
                    </tr>
                    <tr class="table-grey text-center">
                        <th class="text-left">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Название аккаунта Лидогенератора в системе">
                                <i class="fa fa-bars company-icon mr-2" aria-hidden="true"></i>Лидогенератор
                            </a>
                        </th>
                        <th scope="col">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Общее количество входящих заявок">Все
                            </a>
                        </th>
                        <th scope="col">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Доля целевых заявок от общего количества заявок">CR %
                            </a>
                        </th>
                        <th scope="col">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Заявки в статусе &laquo;Целевая заявка&raquo;">Целевые
                            </a>
                        </th>
                        <th scope="col">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Средняя стоимость заявки (Расходы / Целевые заявки)">CPL
                            </a>
                        </th>
                        <th scope="col">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Заявки в статусе модерации. Не согласовано">Проверка
                            </a>
                        </th>
                        <th scope="col">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Вознаграждение без учета расходов">Выручка
                            </a>
                        </th>
                        <th scope="col">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Рекламные расходы">Расходы
                            </a>
                        </th>
                        <th scope="col">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Выручка минус рекламные расходы, если настроен вычет расходов">Прибыль
                            </a>
                        </th>
                        <th scope="col">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Текущий баланс аккаунта Лидогенератора">Баланс
                            </a>
                        </th>
                        <th scope="col">
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Вознаграждение полученное сервисом Лидогенератор">Выручка
                            </a>
                        </th>
                    </tr>
                    <tr class="sum-line">
                        <th scope="row">
                            <a data-toggle="tooltip" data-placement="right" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Подсчитывается по всем компаниям соответствующим фильтру">
                                <span class="sigma-icon">&#931;</span>Итого / Среднее
                            </a>
                        </th>
                        <th>6000</th>
                        <th>15500</th>
                        <th>3000</th>
                        <th>300</th>
                        <th>150</th>
                        <th>45</th>
                        <th>1500</th>
                        <th>4000</th>
                        <th>1000</th>
                        <th>1000</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>
                            Импульс
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
                    <tr>
                        <td>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>
                            Центр профессиональной юридической помощи. Тверь.
                        </td>
                        <td>20</td>
                        <td>10</td>
                        <td>50</td>
                        <td>50</td>
                        <td>25</td>
                        <td>75</td>
                        <td>2</td>
                        <td>400</td>
                        <td>200</td>
                        <td>200</td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn company-dashboard-button active">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </td>
                        <td>2000</td>
                        <td>10000</td>
                        <td>5000</td>
                        <td>500</td>
                        <td>250</td>
                        <td>77</td>
                        <td>2500</td>
                        <td>4000</td>
                        <td>230</td>
                        <td>2000</td>
                    </tr>
                    <tr>
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
                        <td>12000</td>
                        <td>110000</td>
                        <td>15000</td>
                        <td>1500</td>
                        <td>1250</td>
                        <td>175</td>
                        <td>2500</td>
                        <td>1</td>
                        <td>1000</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Центр профессиональной юридической помощи. Тверь.
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Центр профессиональной юридической помощи. Тверь.
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
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
                        <th>
                            <button class="btn company-dashboard-button">
                                <i class="fa fa-line-chart company-icon" aria-hidden="true"></i>
                            </button>Импульс
                        </th>
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
            @include('includes.no-data')
        </div>
    </main>
    @include('includes.modal.lidogenerators-invite-modal')
@stop
