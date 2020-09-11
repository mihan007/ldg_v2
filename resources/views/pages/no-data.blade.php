@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="row">
            <h1 class="sr-only">Страница компаний</h1>
            <h2 class="sr-only">Фильтр для таблицы данных по компаниям</h2>
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper">
                <div class="index-buttons-wrapper mr-3">
                    @include('includes.date-range')
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
                    <div class="toast update-button js-update-toast">
                        <div class="toast-body">
                            <div>Данные обновлены</div>
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary mb-1 add-button" href="{{ route('settings.workspace') }}">
                    Создать
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </a>
            </div>
            <div class="col-md-12 filter-wrapper mb-1">
                <div class="index-select-wrapper d-flex mr-auto">
                    <select class="custom-select select-item">
                        <option selected>Все ниши</option>
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
                @include('includes.search-form')
            </div>
            <div class="col-md-12 table-wrapper mb-5">
                <h2 class="sr-only">Таблица данных по компаниям</h2>
                <table class="table company-table common-table company-grid table-striped">
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
                                <i class="fa fa-bars company-icon mr-2" aria-hidden="true"></i>Компания
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
                    </tbody>
                </table>
            </div>
            @desktop
            <div class="col-4 col-sm-4 col-md-6 col-lg-4 text-center mx-auto mb-5 mt-n4">
                <div class="no-data-image-wrapper">
                    <img class="no-data-image" src="../img/no-data.png" width="300" height="315"
                         alt="Нет данных для отображения">
                </div>
                <div class="mt-3 alert alert-primary no-data-alert">Создайте свою первую компанию для лидогенерации</div>
                <button class="btn btn-primary mb-4 add-button w-auto" type="button">Создать</button>
            </div>
            @elsedesktop
            <div class="col-3 col-sm-4 col-md-6 col-lg-6 text-center mr-auto mb-5 mt-n4">
                <div class="no-data-image-wrapper">
                    <img class="no-data-image" src="../img/no-data.png" width="250" height="265"
                         alt="Нет данных для отображения">
                </div>
                <div class="mt-3 alert alert-primary d-flex justify-content-between align-items-center no-data-alert">Создайте свою первую компанию для лидогенерации
                    <button class="ml-2 btn btn-primary add-button w-auto" type="button">Создать</button></div>
            </div>
            @enddesktop
        </div>
    </main>
@stop
