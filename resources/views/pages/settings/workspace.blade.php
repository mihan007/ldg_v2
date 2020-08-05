@extends('layouts.app')
@section('content')
    <main class="page-wrapper position-relative">
        <h1 class="sr-only">Страница настроек "Рабочая область"</h1>
        <div class="row">
            <h2 class="sr-only">Блок навигации по страницам настроек и управления настройками страницы
                "Рабочая область"</h2>
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper border-bottom font-weight-bold">
                @include('includes.settings-links', ['step'=>'workspace'])
                <div>
                    <select class="custom-select settings-select-item">
                        <option selected>Менеджер</option>
                        <option value="1">Айгуль Шайкенова</option>
                        <option value="2">Имя 2</option>
                        <option value="3">Имя 3</option>
                        <option value="4">Имя 4</option>
                        <option value="5">Имя 5</option>
                        <option value="6">Имя 6</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <h2 class="sr-only">Блок настроек рабочей области</h2>
            <div class="col-md-12 border-bottom">
                <form class="d-flex workspace-form" method="post" action="#">
                    <div class="workspace-form-column">
                        <div class="form-group company-name-group">
                            <label class="workspace-form-label" for="company-name">
                                1. Название компании клиента
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top" data-title="Эта информация будет
                                       видна клиенту"></i>
                            </label>
                            <input class="form-control company-name-input" type="text" id="company-name" required>
                            <div class="invalid-feedback company-name-invalid-feedback">Сообщение об ошибке</div>
                        </div>
                        <div class="d-flex align-items-end">
                            <div class="form-group base-cost-group">
                                <label class="workspace-form-label" for="base-cost">
                                    5. Базовая цена заявки для клиента
                                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                       data-toggle="click-tooltip" data-placement="top" data-title="Ваше вознаграждение за
                                       целевую заявку"></i>
                                </label>
                                <div class="input-group">
                                    <input class="form-control base-cost-input" type="number" id="base-cost" min="0"
                                           max="100000" placeholder="0">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-rub" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="invalid-feedback base-cost-invalid-feedback">Сообщение об ошибке</div>
                            </div>
                            <div class="form-group max-cpl-group">
                                <label class="workspace-form-label" for="max-cpl">
                                    6. Максимально допустимый CPL
                                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                       data-toggle="click-tooltip" data-placement="top" data-title="Отправим оповещение о
                                           превышении CPL за прошлые сутки ответственному менеджеру. Оставьте 0 рублей,
                                           чтобы не получать уведомления"></i>
                                </label>
                                <div class="input-group">
                                    <input class="form-control max-cpl-input" type="number" id="max-cpl" min="0"
                                           placeholder="0">
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="fa fa-rub" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="invalid-feedback max-cpl-invalid-feedback">Сообщение об ошибке</div>
                            </div>
                        </div>
                    </div>
                    <div class="workspace-form-column">
                        <div class="form-group project-group">
                            <label class="workspace-form-label" for="project">
                                2. Ниша
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top" data-title="Разделяйте лидогенерацию
                                       по нишам. Пример: окна, юристы, строительство"></i>
                            </label>
                            <select class="form-control js-project-select project-input" data-placeholder="Выберите
                            вариант из списка" name="project" id="project" required>
                                <option></option>
                                <option value="р1">проект 1</option>
                                <option value="р2">проект 2</option>
                                <option value="р3">проект 3</option>
                                <option value="р4">проект 4</option>
                                <option value="р5">проект 5</option>
                                <option value="р6">проект 6</option>
                            </select>
                        </div>
                        <div class="form-group balance-limit-group">
                            <label class="workspace-form-label" for="balance-limit">
                                7. Уведомлять об окончании баланса Лидгена при
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top" data-title="Отправим оповещение клиенту о
                                   необходимости пополнить баланс"></i>
                            </label>
                            <div class="input-group">
                                <input class="form-control balance-limit-input" type="number" id="balance-limit" min="0"
                                       placeholder="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-rub" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="invalid-feedback balance-limit-invalid-feedback">Сообщение об ошибке</div>
                        </div>
                    </div>
                    <div class="workspace-form-column">
                        <div class="form-group moderation-period-group">
                            <label class="workspace-form-label form-label-nowrap" for="moderation-period">
                                3. Максимальный период модерации
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top" data-title="Количество дней, в
                                   течение которых клиент может изменить статус заявки. Максимальный период 45 дней"></i>
                            </label>
                            <input class="form-control moderation-period-input" type="number" id="moderation-period"
                                   placeholder="7" min="1" max="45">
                            <div class="invalid-feedback moderation-period-invalid-feedback">Максимальный период
                                модерации 45 дней
                            </div>
                        </div>
                        <div class="form-group data-hide-group">
                            <label class="workspace-form-label" for="data-hide">
                                8. Скрывать данные заявок при балансе Лидгена менее
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top" data-title="Система скроет заявки
                                   для вашего клиента при балансе менее этого значения"></i>
                            </label>
                            <div class="input-group">
                                <input class="form-control data-hide-input" type="number" id="data-hide" min="0"
                                       placeholder="0">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-rub" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="invalid-feedback data-hide-invalid-feedback">Сообщение об ошибке</div>
                        </div>
                    </div>
                    <div class="form-group orders-agreement-group">
                        <label class="workspace-form-label" for="orders-agreement">
                            4. Описание соглашения по заявкам
                            <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                               data-toggle="click-tooltip" data-placement="top" data-title="Соглашение о том, какие
                                   заявки считаются нецелевыми или целевыми"></i>
                        </label>
                        <button class="btn description-example-button function-button" data-toggle="tooltip"
                                data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                title="Вставить стандартное описание">
                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                        <textarea class="form-control orders-agreement-input" rows="6" id="orders-agreement"></textarea>
                        <div class="invalid-feedback orders-agreement-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 mb-1 mt-1 settings-wrapper align-items-start">
                <div>
                    <label class="workspace-form-label" for="workspace-email">9. Доступ клиента к заявкам и
                        уведомлениям
                        <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                            data-toggle="click-tooltip" data-placement="top" data-title="Добавьте почту клиента"></i>
                    </label>
                    <a class="btn client-acсess-button" href="#" aria-label="Ссылка на внешнее администрирование">
                        <i class="fa fa-external-link" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <h2 class="sr-only">Таблица настроек рабочей области</h2>
            <div class="col-md-12 mx-auto">
                <div class="table-wrapper mb-5">
                    <table class="table workspace-table common-table">
                        <thead>
                        <tr class="table-grey text-center">
                            <th class="rounded-table-left activity-col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Включает / выключает доступ и
                                        рассылку">Активность
                            </th>
                            <th class="email-col" scope="col">Почта</th>
                            <th class="crm-col" scope="col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Открывает доступ в CRM Лидогенератора
                                с вашими заявками">Доступ в CRM</th>
                            <th class="new-order-col" scope="col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Отправляет на почту уведомления о
                                новой заявке в Лидогенераторе">Новая заявка</th>
                            <th class="lidgen-balance-col" scope="col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Отправляет уведомления при снижении
                                баланса Лидгена менее указанной суммы в разделе №1 Рабочая область">Лидген баланс</th>
                            <th class="yandex-balance-col" scope="col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Отправляет уведомления при снижении
                                баланса Яндекса менее указанной суммы в разделе №3 Реклама">Яндекс баланс</th>
                            <th class="google-balance-col" scope="col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Отправляет уведомления при снижении
                                баланса Google менее указанной суммы в разделе №3 Реклама">Google баланс</th>
                            <th class="roistat-balance-col" scope="col" data-toggle="tooltip" data-placement="top"
                                data-delay='{"show":"1000", "hide":"1000"}' title="Отправляет уведомления при снижении
                                баланса Roistat менее указанной суммы в разделе №3 Реклама">Roistat баланс</th>
                            <th class="admin-col" scope="col">
                                <a data-toggle="tooltip" data-placement="top"
                                   data-delay='{"show":"1000", "hide":"1000"}'
                                   title="Наделяет правами управления рассылкой для текущих и новых пользователей">
                                    Администратор
                                </a>
                            </th>
                            <th class="workspace-buttons-col rounded-table-right"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="active-switch"
                                           type="checkbox" checked>
                                    <label class="custom-control-label" for="active-switch"
                                           aria-label="Активность включена/выключена"></label>
                                </div>
                            </td>
                            <td class="email-col text-center">1@troiza.net</td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customCheck"
                                           id="crm-access" checked>
                                    <label class="custom-control-label" for="crm-access"
                                           aria-label="Доступ в CRM клиента"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox" data-toggle="tooltip" data-placement="top"
                                     data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка включена + время
                                                   изменения статуса">
                                    <input type="checkbox" class="custom-control-input custom-control-input-success"
                                           id="orders-message" name="example1" checked>
                                    <label class="custom-control-label" for="orders-message" aria-label="Оповещение о
                                            заявках"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox" data-toggle="tooltip" data-placement="top"
                                     data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка включена + время
                                                   изменения статуса">
                                    <input type="checkbox" class="custom-control-input custom-control-input-success"
                                           id="ldg-balance" name="example1" checked>
                                    <label class="custom-control-label" for="ldg-balance"
                                           aria-label="Лидогенератор баланс"></label>
                                </div>
                            </td>
                            <td class="target-status text-center">
                                <div class="custom-control custom-checkbox" data-toggle="tooltip" data-placement="top"
                                     data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка включена + время
                                             изменения статуса">
                                    <input type="checkbox" class="custom-control-input custom-control-input-success"
                                           id="yandex-balance" name="example1" checked>
                                    <label class="custom-control-label" for="yandex-balance" aria-label="Яндекс баланс">
                                    </label>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox" data-toggle="tooltip" data-placement="top"
                                     data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка ожидает подтверждения
                                             + время изменения статуса">
                                    <input type="checkbox" class="custom-control-input custom-control-input-warning"
                                           name="example1" id="google-balance" checked>
                                    <label class="custom-control-label" for="google-balance" aria-label="Google баланс">
                                    </label>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox" data-toggle="tooltip" data-placement="top"
                                     data-delay='{"show":"1000", "hide":"1000"}'
                                     title="Отказ от рассылки + время изменения статуса">
                                    <input type="checkbox" class="custom-control-input custom-control-input-danger"
                                           name="customCheck" id="roistat-balance" checked>
                                    <label class="custom-control-label custom-control-label-cross" for="roistat-balance"
                                           aria-label="Roistat баланс"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customCheck"
                                           id="administrator" checked>
                                    <label class="custom-control-label" for="administrator" aria-label="Администратор">
                                    </label>
                                </div>
                            </td>
                            <td class="text-center">
                                <a class="btn workspace-reset-button function-button" aria-label="Удалить доступ"
                                   href=".js-reset-modal" role="button" data-toggle="modal">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="activity-col text-center">
                                <div class="custom-control custom-switch">
                                    <input class="custom-control-input custom-control-input-success" id="active-switch2"
                                           type="checkbox">
                                    <label class="custom-control-label font-italic" for="active-switch2"
                                           aria-label="Активность включена/выключена"></label>
                                </div>
                            </td>
                            <td class="email-col text-center">1@troiza.net</td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customCheck"
                                           id="crm-access2" checked>
                                    <label class="custom-control-label" for="crm-access2" aria-label="Доступ в CRM
                                            клиента"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox" data-toggle="tooltip" data-placement="top"
                                     data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка включена + время
                                             изменения статуса">
                                    <input type="checkbox" class="custom-control-input custom-control-input-success"
                                           id="orders-message2" name="example1" checked>
                                    <label class="custom-control-label" for="orders-message2" aria-label="Оповещение
                                            о заявках"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox" data-toggle="tooltip" data-placement="top"
                                     data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка включена + время
                                             изменения статуса">
                                    <input type="checkbox" class="custom-control-input custom-control-input-success"
                                           id="ldg-balance2" name="example1" checked>
                                    <label class="custom-control-label" for="ldg-balance2"
                                           aria-label="Лидогенератор баланс">
                                    </label>
                                </div>
                            </td>
                            <td class="target-status text-center">
                                <div class="custom-control custom-checkbox" data-toggle="tooltip" data-placement="top"
                                     data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка отключена">
                                    <input type="checkbox" class="custom-control-input custom-control-input-success"
                                           id="yandex-balance2" name="example1">
                                    <label class="custom-control-label" for="yandex-balance2" aria-label="Яндекс
                                            баланс"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox" data-toggle="tooltip" data-placement="top"
                                     data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка отключена">
                                    <input type="checkbox" class="custom-control-input custom-control-input-warning"
                                           name="example1" id="google-balance2">
                                    <label class="custom-control-label" for="google-balance2" aria-label="Google
                                            баланс"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox" data-toggle="tooltip" data-placement="top"
                                     data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка отключена">
                                    <input type="checkbox" class="custom-control-input custom-control-input-danger"
                                           name="customCheck" id="roistat-balance2">
                                    <label class="custom-control-label custom-control-label-cross"
                                           for="roistat-balance2" aria-label="Roistat баланс"></label>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="customCheck"
                                           id="administrator2">
                                    <label class="custom-control-label" for="administrator2"
                                           aria-label="Администратор"></label>
                                </div>
                            </td>
                            <td class="workspace-buttons-col text-center">
                                <a class="btn workspace-reset-button function-button" aria-label="Удалить доступ"
                                   href=".js-reset-modal" role="button" data-toggle="modal">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="workspace-email-form" method="post" action="/">
                    <label class="sr-only" for="workspace-email">Почта</label>
                    <div class="input-group">
                        <input class="form-control workspace-email-input" type="email" id="workspace-email"
                               placeholder="Почта">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary email-add-button" aria-label="Добавить">
                                Добавить
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                    <div class="invalid-feedback workspace-email-invalid-feedback">Вы можете добавить не более
                        20 доступов за 2 часа.
                    </div>
                </form>
            </div>
        </div>
        <div class="toast saved-toast js-saved-toast">
            <div class="toast-body">
                <div>Данные сохранены</div>
            </div>
        </div>
        @include('includes.modal.workspace-save-modal')
        @include('includes.modal.reset-modal', [
            'messageHeader' => 'Удаление доступа и рассылок',
            'messageBody' => 'Вы действительно хотите удалить доступ к проекту?'
        ])
    </main>
    <footer class="page-footer footer-hide bg-grey fixed-bottom">
        <div class="container">
            <div class="text-center py-2 d-flex justify-content-center align-items-center">
                <h5 class="mb-1 unsaved-text mr-3">На странице есть несохраненные изменения</h5>
                <button class="btn btn-primary show-save-toast footer-save-button" type="submit">Сохранить
                </button>
            </div>
        </div>
    </footer>
@stop
