@extends('layouts.app')
@section('content')
    <link href='https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css' rel='stylesheet'>
    <link href='https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css' rel='stylesheet'>
    <script src='https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js'></script>
    <script src='https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js'></script>
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
                    <button type="button" class="btn dashboard-button show-toast mb-1" data-toggle="tooltip"
                            data-placement="bottom"
                            title="Последнее обновление ..." trigger="hover"
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
                <form class="search-form">
                    <div class="input-group">
                        <input type="text" class="form-control search-form-input" placeholder="Поиск">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary button-search"><i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 table-wrapper mb-5">
                <table class="table company-table company-grid table-hover table-striped ">
                    <thead class="table-bordered">
                        <tr class="table-grey table-head">
                            <th class="text-left rounded-table-left">Рабочая область
                            </th>
                            <th colspan="5"  class="text-center">Заявки</th>
                            <th colspan="3"  class="text-center">Финансы</th>
                            <th colspan="3"  class="text-center rounded-table-right">Баланс сервисов</th>
                        </tr>
                        <tr class="table-grey text-center table-head ">
                            <th class="company-td text-left border-top-0 company-col"><a data-toggle="tooltip"
                                                                                         data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Название компании">
                                    <i class="fa fa-bars company-icon mr-2"></i>Компания
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 all-orders-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Общее количество входящих заявок">
                                    Все
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 cr-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Доля целевых заявок от общего количества заявок">
                                    CR %
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 target-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Заявки в статусе &laquo;Целевая заявка&raquo;">
                                    Целевые
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 cpl-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Средняя стоимость заявки (Расходы / Целевые заявки)">
                                    CPL
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 moderation-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Заявки в статусе модерации. Не согласовано">
                                    Проверка
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 gain-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Вознаграждение без учета расходов">
                                    Выручка
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 costs-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Рекламные расходы">
                                    Расходы
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 profit-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Выручка минус рекламные расходы, если настроен вычет расходов">
                                    Прибыль
                                </a>
                            </th>
                            <th class="border-top-0 lidgen-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Баланс аккаунта компании Лидогенератор">
                                    Лидген
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 yandex-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Баланс аккаунтов Яндекс.Директ">
                                    Яндекс
                                </a>
                            </th>
                            <th scope="col" class="border-top-0 google-col">
                                <a data-toggle="tooltip" data-placement="bottom" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Баланс аккаунтов Google Ads">
                                    Google
                                </a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="sum-line">
                            <td scope="row" class="company-col">
                                <a data-toggle="tooltip" data-placement="right" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Подсчитывается по всем компаниям соответствующим
                    фильтру">
                                    <span class="sigma-icon">&#931;</span>Итого / Среднее
                                </a>
                            </td>
                            <td class="all-orders-col">6000</td>
                            <td class="cr-col">15500</td>
                            <td class="target-col">3000</td>
                            <td class="cpl-col">300</td>
                            <td class="moderation-col">150</td>
                            <td class="gain-col">45</td>
                            <td class="costs-col">1500</td>
                            <td class="profit-col">4000</td>
                            <td class="lidgen-col">1000</td>
                            <td class="yandex-col">1000</td>
                            <td class="google-col">1000</td>
                        </tr>
                        <tr class="dark-stroke">
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
                                Тверь.
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
                            <td scope="row">
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
                        <tr class="dark-stroke">
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
                    <tr class="dark-stroke">
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
                    <tr class="dark-stroke">
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
                    <tr class="dark-stroke">
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
                    <tr class="dark-stroke">
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
                    <tr class="dark-stroke">
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
                        <tr class="dark-stroke">
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
