@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="row">
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper">
                <div class="index-buttons-wrapper mr-3">
                    <div id="reportrange" class="date-range text-center mb-1" tabindex="0">
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
                    <button type="button" class="btn dashboard-button show-toast mb-1" data-toggle="tooltip"
                            data-placement="bottom" title="Последнее обновление ..." data-trigger="hover"
                            aria-label="Обновление данных в таблице аналитики">
                        <i class="fa fa-refresh"></i>
                    </button>
                    <div class="toast update-button" id="myToast">
                        <div class="toast-body">
                            <div>Данные обновлены</div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-primary text-uppercase mb-1 add-button">Создать</a>
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
                <form class="company-search-form">
                    <div class="input-group">
                        <input type="text" class="form-control search-form-input" placeholder="Поиск">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary button-search">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 table-wrapper mb-5">
                <table class="table company-table company-grid table-striped">
                    <thead>
                        <tr class="table-grey">
                            <th class="text-left rounded-table-left">Рабочая область</th>
                            <th colspan="5" class="text-center">Заявки</th>
                            <th colspan="3" class="text-center">Финансы</th>
                            <th colspan="3" class="text-center rounded-table-right">Баланс сервисов</th>
                        </tr>
                        <tr class="table-grey text-center">
                            <th class="text-left">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Название компании">
                                    <i class="fa fa-bars company-icon mr-2"></i>Компания
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
                                   title="Баланс аккаунта компании Лидогенератор">Лидген
                                </a>
                            </th>
                            <th scope="col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Баланс аккаунтов Яндекс.Директ">Яндекс
                                </a>
                            </th>
                            <th scope="col">
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Баланс аккаунтов Google Ads">Google
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
                            <th>1000</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">
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
                            <td scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Центр профессиональной юридической помощи.
                                Тверь. Оказываем юридические услуги.
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
                            <td>20</td>
                        </tr>
                        <tr>
                            <td scope="row">
                                <i class="fa fa-bars company-icon-active mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>1000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bars company-icon mr-2"></i>Импульс
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
                            <td>2000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop
