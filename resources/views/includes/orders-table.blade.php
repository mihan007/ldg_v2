<div class="row">
    <h2 class="sr-only">Таблица данных по заявкам</h2>
    <div class="col-md-12 mx-auto">
        <div class="table-wrapper mb-5">
            <table class="table crm-table common-table order-grid crm-table-{{$role}} @if ($role=='client')
                table-striped @endif" data-offset="144">
                <thead>
                <tr class="table-grey text-center ">
                    <th class="rounded-table-left id-col" scope="col">ID</th>
                    <th class="time-col" scope="col">
                        @if ($role=='staff')
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Дата и время в часовом поясе клиента">Время</a>
                        @endif
                        @if ($role=='client') Время @endif
                    </th>
                    <th class="info-col @if ($role=='client') info-client-col @endif" scope="col">Информация
                    </th>
                    <th class="phone-col" scope="col">Телефон</th>
                    <th class="status-col @if ($role=='client') status-client-col @endif" scope="col">Статус</th>
                    <th class="client-col @if ($role=='client') comment-client-col @endif" scope="col">
                        @if ($role=='staff')
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Комментарий клиента">Комментарий</a>
                        @endif
                        @if ($role=='client')
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                               title="Ваш комментарий">
                            Комментарий</a>
                        @endif
                    </th>
                    @if ($role=='staff')
                    <th class="moderation-col" scope="col">
                        Модерация
                    </th>
                    @endif
                    <th class="comment-col @if ($role=='client')
                        rounded-table-right @endif" scope="col">
                        @if ($role=='staff')
                            <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                           title="Комментарий модератора">Комментарий</a>
                        @endif
                        @if ($role=='client')
                                <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Комментарий модератора появляется, если принято решение изменить статус заявки
                                   с нецелевого на целевой">Модерация</a>
                        @endif
                    </th>
                    @if ($role=='staff')
                        <th class="buttons-col rounded-table-right" scope="col"></th>
                    @endif
                </tr>
                </thead>
                <tbody>
                <tr class="order-line">
                    <td class="id-col">1</td>
                    <td class="time-col text-left">11.01.2018 13:00:00</td>
                    <td class="info-col">1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                    </td>
                    <td class="phone-col text-center">85557777777</td>
                    @if ($role=='staff')
                        <td class="status-col target-status">Целевой</td>
                    @endif
                    @if ($role=='client')
                        <td class="status-client-col target-status">
                            <select class="custom-select openmodal">
                                <option value="1" data-color="#008000" selected>Целевая заявка</option>
                                <option value="2" data-modal="js-status-modal" data-color="#e52515">Не оставляли заявку
                                </option>
                                <option value="3" data-modal="js-status-modal" data-color="#e52515">Некорректный номер
                                </option>
                                <option value="4" data-modal="js-status-modal" data-color="#e52515">Предложение рекламы
                                </option>
                                <option value="5" data-modal="js-status-modal" data-color="#e52515">Не дозвонились
                                </option>
                                <option value="6" data-modal="js-status-modal" data-color="#e52515">Дубль заявки
                                </option>
                                <option value="7" data-modal="js-status-modal" data-color="#e52515">Вне зоны обслуживания
                                </option>
                                <option value="8" data-modal="js-status-modal" data-color="#e52515">Другое</option>
                            </select>
                        </td>
                    @endif
                    <td class="client-col">3Lorem ipsum dolor
                        @if ($role=='client')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="moderation-col text-center">
                            <button class="btn moderation-circle circle-green" data-toggle="tooltip"
                                    data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="Согласны" aria-label="Согласны">
                            </button>
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                    aria-label="На модерации"></button>
                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                 data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                <a class="btn moderation-circle" href=".js-comment-modal" data-toggle="modal"
                                        aria-label="Не согласны"></a>
                            </div>
                        </td>
                    @endif
                    <td class="comment-col">4Lorem ipsum dolor
                        @if ($role=='staff')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="text-center buttons-col">
                            <button class="btn restore-button restore-button-hide function-button" type="button"
                                    value="Восстановление" aria-label="Восстановить данные">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>
                            <button class="btn reset-button reset-button-show function-button" type="reset"
                                    value="Удаление"
                                    aria-label="Удалить заявку">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    @endif
                </tr>
                <tr class="@if ($role=='staff') reset-order @endif">
                    <td class="id-col">11</td>
                    <td class="text-left time-col">12.02.2020 13:00:00</td>
                    <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                    </td>
                    <td class="phone-col text-center">87777777777</td>
                    @if ($role=='staff')
                        <td class="status-col non-target-status">Не дозвонились</td>
                    @endif
                    @if ($role=='client')
                        <td class="status-client-col non-target-status">
                            <select class="custom-select openmodal">
                                <option value="1" data-color="#008000">Целевая заявка</option>
                                <option value="2" data-modal="js-status-modal" data-color="#e52515">Не оставляли заявку
                                </option>
                                <option value="3" data-modal="js-status-modal" data-color="#e52515">Некорректный номер
                                </option>
                                <option value="4" data-modal="js-status-modal" data-color="#e52515">Предложение рекламы
                                </option>
                                <option value="5" data-modal="js-status-modal" data-color="#e52515" selected>Не
                                    дозвонились</option>
                                <option value="6" data-modal="js-status-modal" data-color="#e52515">Дубль заявки</option>
                                <option value="7" data-modal="js-status-modal" data-color="#e52515">Вне зоны обслуживания
                                </option>
                                <option value="8" data-modal="js-status-modal" data-color="#e52515">Другое</option>
                            </select>
                        </td>
                    @endif
                    <td class="client-col">Lorem ipsum dolor
                        @if ($role=='client')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="moderation-col text-center">
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="Согласны" aria-label="Согласны">
                            </button>
                            <button class="btn moderation-circle circle-yellow" data-toggle="tooltip"
                                    data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                    aria-label="На модерации"></button>
                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                 data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                <a class="btn moderation-circle" href=".js-comment-modal" data-toggle="modal"
                                        aria-label="Не согласны"></a>
                            </div>
                        </td>
                    @endif
                    <td class="comment-col">Lorem ipsum dolor
                        @if ($role=='staff')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="buttons-col text-center">
                            <button class="btn restore-button restore-button-show function-button" type="button"
                                    value="Восстановление" aria-label="Восстановить данные">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>
                            <button class="btn reset-button reset-button-hide function-button" type="reset"
                                    value="Удаление"
                                    aria-label="Удалить заявку">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    @endif
                </tr>
                <tr class="order-line">
                    <td class="id-col">111</td>
                    <td class="text-left time-col">12.02.2020 13:00:00</td>
                    <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                    </td>
                    <td class="phone-col text-center">87777777777</td>
                    @if ($role=='staff')
                        <td class="status-col non-target-status"></td>
                    @endif
                    @if ($role=='client')
                        <td class="status-client-col non-target-status">
                            <select class="custom-select openmodal">
                                <option value="1" data-color="#008000">Целевая заявка</option>
                                <option value="2" data-modal="js-status-modal" data-color="#e52515">Не оставляли заявку
                                </option>
                                <option value="3" data-modal="js-status-modal" data-color="#e52515">Некорректный номер
                                </option>
                                <option value="4" data-modal="js-status-modal" data-color="#e52515">Предложение рекламы
                                </option>
                                <option value="5" data-modal="js-status-modal" data-color="#e52515">Не дозвонились
                                </option>
                                <option value="6" data-modal="js-status-modal" data-color="#e52515">Дубль заявки</option>
                                <option value="7" data-modal="js-status-modal" data-color="#e52515">Вне зоны обслуживания
                                </option>
                                <option value="8" data-modal="js-status-modal" data-color="#e52515" selected>Другое
                                </option>
                            </select>
                        </td>
                    @endif
                    <td class="client-col">Lorem ipsum dolor
                        @if ($role=='client')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="moderation-col text-center">
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="Согласны" aria-label="Согласны">
                            </button>
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                    aria-label="На модерации"></button>
                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                 data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                <a class="btn moderation-circle circle-red" href=".js-comment-modal" data-toggle="modal"
                                        aria-label="Не согласны"></a>
                            </div>
                        </td>
                    @endif
                    <td class="comment-col">Lorem ipsum dolor
                        @if ($role=='staff')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="buttons-col text-center">
                            <button class="btn restore-button restore-button-hide function-button" type="button"
                                    value="Восстановление" aria-label="Восстановить данные">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>
                            <button class="btn reset-button reset-button-show function-button" type="reset"
                                    value="Удаление"
                                    aria-label="Удалить заявку">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    @endif
                </tr>
                <tr class="@if ($role=='staff') reset-order @endif">
                    <td class="id-col">1111</td>
                    <td class="text-left time-col">12.02.2020 13:00:00</td>
                    <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                    </td>
                    <td class="phone-col text-center">87777777777</td>
                    @if ($role=='staff')
                        <td class="status-col target-status">Целевой</td>
                    @endif
                    @if ($role=='client')
                        <td class="status-client-col target-status">
                            <select class="custom-select openmodal">
                                <option value="1" data-color="#008000" selected>Целевая заявка</option>
                                <option value="2" data-modal="js-status-modal" data-color="#e52515">Не оставляли заявку
                                </option>
                                <option value="3" data-modal="js-status-modal" data-color="#e52515">Некорректный номер
                                </option>
                                <option value="4" data-modal="js-status-modal" data-color="#e52515">Предложение рекламы
                                </option>
                                <option value="5" data-modal="js-status-modal" data-color="#e52515">Не дозвонились
                                </option>
                                <option value="6" data-modal="js-status-modal" data-color="#e52515">Дубль заявки
                                </option>
                                <option value="7" data-modal="js-status-modal" data-color="#e52515">Вне зоны обслуживания
                                </option>
                                <option value="8" data-modal="js-status-modal" data-color="#e52515">Другое</option>
                            </select>
                        </td>
                    @endif
                    <td class="client-col">Lorem ipsum dolor
                        @if ($role=='client')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="moderation-col text-center">
                            <button class="btn moderation-circle circle-green" data-toggle="tooltip"
                                    data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="Согласны"
                                    aria-label="Согласны"></button>
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                    aria-label="На модерации"></button>
                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                 data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                 <a class="btn moderation-circle" href=".js-comment-modal" data-toggle="modal"
                                        aria-label="Не согласны"></a>
                            </div>
                        </td>
                    @endif
                    <td class="comment-col">Lorem ipsum dolor
                        @if ($role=='staff')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="buttons-col text-center">
                            <button class="btn restore-button restore-button-show function-button" type="button"
                                    value="Восстановление" aria-label="Восстановить данные">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>
                            <button class="btn reset-button reset-button-hide function-button" type="reset"
                                    value="Удаление"
                                    aria-label="Удалить заявку">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    @endif
                </tr>
                <tr class="order-line">
                    <td class="id-col">11111</td>
                    <td class="text-left time-col">12.02.2020 13:00:00</td>
                    <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                    </td>
                    <td class="phone-col text-center">87777777777</td>
                    @if ($role=='staff')
                        <td class="status-col non-target-status">Не дозвонились</td>
                    @endif
                    @if ($role=='client')
                        <td class="status-client-col non-target-status">
                            <select class="custom-select openmodal">
                                <option value="1" data-modal="js-status-modal" data-color="#008000">Целевая заявка
                                </option>
                                <option value="2" data-modal="js-status-modal" data-color="#e52515">Не оставляли заявку
                                </option>
                                <option value="3" data-modal="js-status-modal" data-color="#e52515">Некорректный номер
                                </option>
                                <option value="4" data-modal="js-status-modal" data-color="#e52515">Предложение рекламы
                                </option>
                                <option value="5" data-modal="js-status-modal" data-color="#e52515" selected>Не
                                    дозвонились</option>
                                <option value="6" data-modal="js-status-modal" data-color="#e52515">Дубль заявки</option>
                                <option value="7" data-modal="js-status-modal" data-color="#e52515">Вне зоны
                                    обслуживания</option>
                                <option value="8" data-modal="js-status-modal" data-color="#e52515">Другое</option>
                            </select>
                        </td>
                    @endif
                    <td class="client-col">Lorem ipsum dolor
                        @if ($role=='client')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="moderation-col text-center">
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="Согласны"
                                    aria-label="Согласны">
                            </button>
                            <button class="btn moderation-circle circle-yellow" data-toggle="tooltip"
                                    data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                    aria-label="На модерации">
                            </button>
                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                 data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                <a class="btn moderation-circle" href=".js-comment-modal" data-toggle="modal"
                                        aria-label="Не согласны"></a>
                            </div>
                        </td>
                    @endif
                    <td class="comment-col">Lorem ipsum dolor
                        @if ($role=='staff')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="buttons-col text-center">
                            <button class="btn restore-button restore-button-hide function-button" type="button"
                                    value="Восстановление" aria-label="Восстановить данные">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>
                            <button class="btn reset-button reset-button-show function-button" type="reset"
                                    value="Удаление"
                                    aria-label="Удалить заявку">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    @endif
                </tr>
                <tr class="@if ($role=='staff') reset-order @endif">
                    <td class="id-col">111111</td>
                    <td class="text-left time-col">12.02.2020 13:00:00</td>
                    <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                    </td>
                    <td class="phone-col text-center">87777777777</td>
                    @if ($role=='staff')
                        <td class="status-col non-target-status"></td>
                    @endif
                    @if ($role=='client')
                        <td class="status-client-col non-target-status">
                            <select class="custom-select openmodal">
                                <option value="1" data-color="#008000">Целевая заявка</option>
                                <option value="2" data-modal="js-status-modal" data-color="#e52515" selected>Не
                                    оставляли заявку</option>
                                <option value="3" data-modal="js-status-modal" data-color="#e52515">Некорректный
                                    номер</option>
                                <option value="4" data-modal="js-status-modal" data-color="#e52515">Предложение
                                    рекламы</option>
                                <option value="5" data-modal="js-status-modal" data-color="#e52515">Не дозвонились
                                </option>
                                <option value="6" data-modal="js-status-modal" data-color="#e52515">Дубль заявки
                                </option>
                                <option value="7" data-modal="js-status-modal" data-color="#e52515">Вне зоны
                                    обслуживания</option>
                                <option value="8" data-modal="js-status-modal" data-color="#e52515">Другое</option>
                            </select>
                        </td>
                    @endif
                    <td class="client-col">Lorem ipsum dolor
                        @if ($role=='client')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="moderation-col text-center">
                            <button class="btn moderation-circle " data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="Согласны"
                                    aria-label="Согласны"></button>
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                    aria-label="На модерации"></button>
                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                 data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                <a class="btn moderation-circle" href=".js-comment-modal" data-toggle="modal"
                                        aria-label="Не согласны"></a>
                            </div>
                        </td>
                    @endif
                    <td class="comment-col">Lorem ipsum dolor
                        @if ($role=='staff')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="buttons-col text-center">
                            <button class="btn restore-button restore-button-show function-button" type="button"
                                    value="Восстановление" aria-label="Восстановить данные">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>
                            <button class="btn reset-button reset-button-hide function-button" type="reset"
                                    value="Удаление"
                                    aria-label="Удалить заявку">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    @endif
                </tr>
                <tr class="order-line">
                    <td class="id-col">1111111</td>
                    <td class="text-left time-col">12.02.2020 13:00:00</td>
                    <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                    </td>
                    <td class="phone-col text-center">87777777777</td>
                    @if ($role=='staff')
                        <td class="status-col non-target-status">Не дозвонились</td>
                    @endif
                    @if ($role=='client')
                        <td class="status-client-col non-target-status">
                            <select class="custom-select openmodal">
                                <option value="1" data-color="#008000">Целевая заявка</option>
                                <option value="2" data-modal="js-status-modal" data-color="#e52515">Не оставляли
                                    заявку</option>
                                <option value="3" data-modal="js-status-modal" data-color="#e52515">Некорректный
                                    номер</option>
                                <option value="4" data-modal="js-status-modal" data-color="#e52515">Предложение
                                    рекламы</option>
                                <option value="5" data-modal="js-status-modal" data-color="#e52515" selected>Не
                                    дозвонились</option>
                                <option value="6" data-modal="js-status-modal" data-color="#e52515">Дубль заявки
                                </option>
                                <option value="7" data-modal="js-status-modal" data-color="#e52515">Вне зоны
                                    обслуживания</option>
                                <option value="8" data-modal="js-status-modal" data-color="#e52515">Другое</option>
                            </select>
                        </td>
                    @endif
                    <td class="client-col">Lorem ipsum dolor
                        @if ($role=='client')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="moderation-col text-center">
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="Согласны"
                                    aria-label="Согласны"></button>
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                    aria-label="На модерации"></button>
                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                 data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                <a class="btn moderation-circle" href=".js-comment-modal" data-toggle="modal"
                                        aria-label="Не согласны"></a>
                            </div>
                        </td>
                    @endif
                    <td class="comment-col">Lorem ipsum dolor
                        @if ($role=='staff')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="buttons-col text-center">
                            <button class="btn restore-button restore-button-hide function-button" type="button"
                                    value="Восстановление" aria-label="Восстановить данные">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>
                            <button class="btn reset-button reset-button-show function-button" type="reset"
                                    value="Удаление"
                                    aria-label="Удалить заявку">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    @endif
                </tr>
                <tr class="@if ($role=='staff') reset-order @endif">
                    <td class="id-col">11111111</td>
                    <td class="text-left time-col">12.02.2020 13:00:00</td>
                    <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                    </td>
                    <td class="phone-col text-center">87777777777</td>
                    @if ($role=='staff')
                        <td class="status-col non-target-status"></td>
                    @endif
                    @if ($role=='client')
                        <td class="status-client-col non-target-status">
                            <select class="custom-select openmodal">
                                <option value="1" data-color="#008000">Целевая заявка</option>
                                <option value="2" data-modal="js-status-modal" data-color="#e52515" selected>Не
                                    оставляли заявку</option>
                                <option value="3" data-modal="js-status-modal" data-color="#e52515">Некорректный
                                    номер</option>
                                <option value="4" data-modal="js-status-modal" data-color="#e52515">Предложение
                                    рекламы</option>
                                <option value="5" data-modal="js-status-modal" data-color="#e52515">Не дозвонились
                                </option>
                                <option value="6" data-modal="js-status-modal" data-color="#e52515">Дубль заявки
                                </option>
                                <option value="7" data-modal="js-status-modal" data-color="#e52515">Вне зоны
                                    обслуживания</option>
                                <option value="8" data-modal="js-status-modal" data-color="#e52515">Другое</option>
                            </select>
                        </td>
                    @endif
                    <td class="client-col">Lorem ipsum dolor
                        @if ($role=='client')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="moderation-col text-center">
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="Согласны" aria-label="Согласны">
                            </button>
                            <button class="btn moderation-circle circle-yellow" data-toggle="tooltip"
                                    data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                    aria-label="На модерации"></button>
                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                 data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                <a class="btn moderation-circle" href=".js-comment-modal" data-toggle="modal"
                                        aria-label="Не согласны"></a>
                            </div>
                        </td>
                    @endif
                    <td class="comment-col">Lorem ipsum dolor
                        @if ($role=='staff')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="buttons-col text-center">
                            <button class="btn restore-button restore-button-show function-button" type="button"
                                    value="Восстановление" aria-label="Восстановить данные">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>
                            <button class="btn reset-button reset-button-hide function-button" type="reset"
                                    value="Удаление"
                                    aria-label="Удалить заявку">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    @endif
                </tr>
                <tr class="order-line">
                    <td class="id-col">1111112</td>
                    <td class="text-left time-col">12.02.2020 13:00:00</td>
                    <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                    </td>
                    <td class="phone-col text-center">87777777777</td>
                    @if ($role=='staff')
                        <td class="status-col non-target-status">Не дозвонились</td>
                    @endif
                    @if ($role=='client')
                        <td class="status-client-col non-target-status">
                            <select class="custom-select openmodal">
                                <option value="1" data-color="#008000">Целевая заявка</option>
                                <option value="2" data-modal="js-status-modal" data-color="#e52515">Не оставляли
                                    заявку</option>
                                <option value="3" data-modal="js-status-modal" data-color="#e52515">Некорректный
                                    номер</option>
                                <option value="4" data-modal="js-status-modal" data-color="#e52515">Предложение
                                    рекламы</option>
                                <option value="5" data-modal="js-status-modal" data-color="#e52515" selected>Не
                                    дозвонились</option>
                                <option value="6" data-modal="js-status-modal" data-color="#e52515">Дубль заявки
                                </option>
                                <option value="7" data-modal="js-status-modal" data-color="#e52515">Вне зоны
                                    обслуживания</option>
                                <option value="8" data-modal="js-status-modal" data-color="#e52515">Другое</option>
                            </select>
                        </td>
                    @endif
                    <td class="client-col">Lorem ipsum dolor
                        @if ($role=='client')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="moderation-col text-center">
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="Согласны"
                                    aria-label="Согласны"></button>
                            <button class="btn moderation-circle circle-yellow" data-toggle="tooltip"
                                    data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                    aria-label="На модерации"></button>
                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                 data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                <a class="btn moderation-circle" href=".js-comment-modal" data-toggle="modal"
                                        aria-label="Не согласны"></a>
                            </div>
                        </td>
                    @endif
                    <td class="comment-col">Lorem ipsum dolor
                        @if ($role=='staff')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="buttons-col text-center">
                            <button class="btn restore-button restore-button-hide function-button" type="button"
                                    value="Восстановление" aria-label="Восстановить данные">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>
                            <button class="btn reset-button reset-button-show function-button" type="reset"
                                    value="Удаление"
                                    aria-label="Удалить заявку">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    @endif
                </tr>
                <tr class="@if ($role=='staff') reset-order @endif">
                    <td class="id-col">1111113</td>
                    <td class="text-left time-col">12.02.2020 13:00:00</td>
                    <td class="info-col">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore
                    </td>
                    <td class="phone-col text-center">87777777777</td>
                    @if ($role=='staff')
                        <td class="status-col non-target-status">Не дозвонились</td>
                    @endif
                    @if ($role=='client')
                        <td class="status-client-col non-target-status">
                            <select class="custom-select openmodal">
                                <option value="1" data-color="#008000">Целевая заявка</option>
                                <option value="2" data-modal="js-status-modal" data-color="#e52515">Не оставляли
                                    заявку</option>
                                <option value="3" data-modal="js-status-modal" data-color="#e52515">Некорректный
                                    номер</option>
                                <option value="4" data-modal="js-status-modal" data-color="#e52515">Предложение
                                    рекламы</option>
                                <option value="5" data-modal="js-status-modal" data-color="#e52515" selected>Не
                                    дозвонились</option>
                                <option value="6" data-modal="js-status-modal" data-color="#e52515">Дубль заявки
                                </option>
                                <option value="7" data-modal="js-status-modal" data-color="#e52515">Вне зоны
                                    обслуживания</option>
                                <option value="8" data-modal="js-status-modal" data-color="#e52515">Другое</option>
                            </select>
                        </td>
                    @endif
                    <td class="client-col">Lorem ipsum dolor
                        @if ($role=='client')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="moderation-col text-center">
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="Согласны"
                                    aria-label="Согласны"></button>
                            <button class="btn moderation-circle" data-toggle="tooltip" data-placement="top"
                                    data-delay='{"show":"1000", "hide":"1000"}' title="На модерации"
                                    aria-label="На модерации"></button>
                            <div class="d-inline-block" data-toggle="tooltip" data-placement="top"
                                 data-delay='{"show":"1000", "hide":"1000"}' title="Не согласны">
                                <a class="btn moderation-circle circle-red" href=".js-comment-modal" data-toggle="modal"
                                        aria-label="Не согласны"></a>
                            </div>
                        </td>
                    @endif
                    <td class="comment-col">Lorem ipsum dolor
                        @if ($role=='staff')
                            <a class="btn crm-correct-button function-button" href=".js-comment-modal" data-toggle="modal"
                                    aria-label="Редактировать комментарий">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        @endif
                    </td>
                    @if ($role=='staff')
                        <td class="buttons-col text-center">
                            <button class="btn restore-button restore-button-show function-button" type="button"
                                    value="Восстановление" aria-label="Восстановить данные">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>
                            <button class="btn reset-button reset-button-hide function-button" type="reset"
                                    value="Удаление"
                                    aria-label="Удалить заявку">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </td>
                    @endif
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    @include('includes.no-data')
</div>
