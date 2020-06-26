@extends('layouts.app')
@section('content')
    <main class="page-wrapper show-toast">
        @include('includes.settings-links', ['step'=>'workspace'])
        <div class="row">
            <div class="col-md-12 border-bottom">
                <form class="d-flex" method="post" action="#">
                    <div class="workspace-form-column">
                        <div class="form-group company-name-group">
                            <label class="workspace-form-label" for="company-name" data-toggle="tooltip" data-placement="top"
                                   data-delay='{"show":"1000", "hide":"1000"}' title="Эта информация будет видна клиенту">
                                    1. Название компании клиента
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                            </label>
                            <input class="form-control company-name-input" type="text" id="company-name" required>
                        </div>
                        <div class="d-flex align-items-end">
                            <div class="form-group base-cost-group">
                                <label class="workspace-form-label" for="base-cost" data-toggle="tooltip" data-placement="top"
                                       data-delay='{"show":"1000", "hide":"1000"}' title="Ваше вознаграждение за целевую заявку">
                                    5. Базовая цена заявки для клиента
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                </label>
                                <div class="input-group">
                                    <input class="form-control base-cost-input" type="number" id="base-cost" min="0"
                                           max="100000" placeholder="0">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group max-cpl-group">
                                <label class="workspace-form-label" for="max-cpl" data-toggle="tooltip" data-placement="top"
                                       data-delay='{"show":"1000", "hide":"1000"}' title="Отправим оповещение о превышении
                                       CPL за прошлые сутки ответственному менеджеру. Оставьте 0 рублей, чтобы не получать уведомления">
                                        6. Максимально допустимый CPL
                                        <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                                </label>
                                <div class="input-group">
                                    <input class="form-control max-cpl-input" type="number" id="max-cpl" min="0" placeholder="0">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="workspace-form-column">
                        <div class="form-group project-group">
                            <label class="workspace-form-label" for="project" data-toggle="tooltip" data-placement="top"
                                   data-delay='{"show":"1000", "hide":"1000"}' title="Разделяйте лидогенерацию по нишам.
                                   Пример: окна, юристы, строительство">
                                    2. Проект
                                    <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                            </label>
                            <input class="form-control project-input" type="text" id="project" required>
                        </div>
                        <div class="form-group balance-limit-group">
                            <label class="workspace-form-label" for="balance-limit" data-toggle="tooltip" data-placement="top"
                                   data-delay='{"show":"1000", "hide":"1000"}' title="Отправим оповещение клиенту о
                                       необходимости пополнить баланс">
                                7. Уведомлять об окончании баланса Лидгена при
                                <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                            </label>
                            <div class="input-group">
                                <input class="form-control balance-limit-input" type="number" id="balance-limit" min="0" placeholder="0">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="workspace-form-column">
                        <div class="form-group moderation-period-group">
                            <label class="workspace-form-label" for="moderation-period" data-toggle="tooltip"
                                   data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Количество
                                   дней в течение которых клиент может изменить статус заявки. Максимальный период 45 дней">
                                3. Максимальный период модерации
                                <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                            </label>
                            <input class="form-control moderation-period-input" type="number" id="moderation-period"
                                   placeholder="7" min="1" max="45">
                        </div>
                        <div class="form-group data-hide-group">
                            <label class="workspace-form-label" for="data-hide" data-toggle="tooltip" data-placement="top"
                                   data-delay='{"show":"1000", "hide":"1000"}' title="Система скроет данные заявки при
                                       балансе ниже этого значения">
                                8. Скрывать данные заявок при балансе Лидгена менее
                                <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                            </label>
                            <div class="input-group">
                                <input class="form-control data-hide-input" type="number" id="data-hide" min="0" placeholder="0">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group orders-agreement-group">
                        <label class="workspace-form-label" for="orders-agreement" data-toggle="tooltip"
                               data-placement="top" data-delay='{"show":"1000", "hide":"1000"}' title="Соглашение о
                               том, какие заявки считаются нецелевыми или целевыми">
                                4. Описание соглашения по заявкам
                                <i class="fa fa-question-circle-o" aria-hidden="true"></i>
                        </label>
                        <button class="btn description-example-button" data-toggle="tooltip"
                                data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                title="Вставить стандартное описание">
                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                        <textarea class="form-control orders-agreement-input" rows="6" type="text" id="orders-agreement"></textarea>
                    </div>
                </form>
            </div>
            <div class="col-md-12 mb-1 mt-1 settings-wrapper">
                <div>
                    <span class="workspace-form-label">9. Доступ клиента к заявкам и уведомления</span>
                    <a class="btn client-acсess-button" href="#" aria-label="Ссылка на внешнее администрирование">
                        <i class="fa fa-external-link" aria-hidden="true"></i>
                    </a>
                </div>
                <form class="form-inline workspace-email-form" method="post" action="/">
                    <div class="form-group workspace-email-group">
                        <label class="sr-only" for="workspace-email">Почта</label>
                        <input class="form-control workspace-email-input" type="email" id="workspace-email"
                               placeholder="Почта">
                        <div class="invalid-feedback workspace-email-invalid-feedback">Вы можете добавить не более
                            20 доступов за 2 часа.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary email-add-button">Добавить
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="table-wrapper mb-5">
                    <table class="table workspace-table common-table workspace-grid" data-offset="140">
                        <thead>
                            <tr class="table-grey text-center">
                                <th class="rounded-table-left i-col" data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                    title="Включает / выключает доступ и рассылку">Активность
                                </th>
                                <th class="email-col" scope="col">Почта
                                </th>
                                <th class="titl-col" scope="col">Доступ в CRM
                                </th>
                                <th class="inf-col" scope="col">Новая заявка
                                </th>
                                <th class="phon-col" scope="col">Лидген баланс
                                </th>
                                <th class="stats-col" scope="col">Яндекс баланс
                                </th>
                                <th class="clien-col" scope="col">Google баланс
                                </th>
                                <th class="moderatio-col" scope="col">Roistat баланс
                                </th>
                                <th class="commen-col" scope="col">
                                    <a data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                       title="Наделяет правами управления рассылкой для текущих и новых пользователей">
                                       Администратор
                                    </a>
                                </th>
                                <th class="buttos-col rounded-table-right">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="order-line">
                                <td class="i-col text-center" scope="row">
                                    <div class="custom-control custom-switch">
                                        <input class="custom-control-input custom-control-input-success" id="active-switch"
                                               type="checkbox" checked>
                                        <label class="custom-control-label font-italic" for="active-switch"
                                               aria-label="Активность включена/выключена"></label>
                                    </div>
                                </td>
                                <td class="email-col text-center">1@troiza.net</td>
                                <td class="tite-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="customCheck" id="crm-access"
                                               checked>
                                        <label class="custom-control-label" for="crm-access" aria-label="Доступ в CRM клиента">
                                        </label>
                                    </div>
                                </td>
                                <td class="ino-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control-input-success"
                                               id="orders-message" name="example1" checked>
                                        <label class="custom-control-label" for="orders-message" aria-label="Оповещение о
                                        заявках" data-toggle="tooltip" data-placement="top"
                                               data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка включена + время
                                               изменения статуса"></label>
                                    </div>
                                </td>
                                <td class="phne-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control-input-success"
                                               id="ldg-balance" name="example1" checked>
                                        <label class="custom-control-label" for="ldg-balance"
                                               aria-label="Лидогенератор баланс" data-toggle="tooltip" data-placement="top"
                                               data-delay='{"show":"1000", "hide":"1000"}' title="Рассылка включена + время
                                               изменения статуса"></label>
                                    </div>
                                </td>
                                <td class="staus-col target-status text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control-input-success"
                                               id="yandex-balance" name="example1" checked>
                                        <label class="custom-control-label" for="yandex-balance" aria-label="Яндекс баланс"
                                               data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                               title="Рассылка включена + время изменения статуса">
                                        </label>
                                    </div>
                                </td>
                                <td class="clint-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control-input-warning"
                                               name="example1" id="google-balance" checked>
                                        <label class="custom-control-label" for="google-balance" aria-label="Google баланс"
                                               data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                               title="Рассылка ожидает подтверждения + время изменения статуса">
                                        </label>
                                    </div>
                                </td>
                                <td class="modration-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control-input-danger"
                                               name="customCheck" id="roistat-balance" checked>
                                        <label class="custom-control-label custom-control-label-cross" for="roistat-balance"
                                               aria-label="Roistat баланс" data-toggle="tooltip" data-placement="top"
                                               data-delay='{"show":"1000", "hide":"1000"}'
                                               title="Отказ от рассылки + время изменения статуса"></label>
                                    </div>
                                </td>
                                <td class="coment-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="customCheck"
                                               id="administrator" checked>
                                        <label class="custom-control-label" for="administrator" aria-label="Администратор">
                                        </label>
                                    </div>
                                </td>
                                <td class="workspace-buttons-col text-center">
                                    <a  class="btn workspace-reset-button" value="Удаление" aria-label="Удалить заявку"
                                        href=".js-workspace-reset-modal" role="button" data-toggle="modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="order-line">
                                <td class="i-col text-center" scope="row">
                                    <div class="custom-control custom-switch">
                                        <input class="custom-control-input custom-control-input-success" id="active-switch2"
                                               type="checkbox">
                                        <label class="custom-control-label font-italic" for="active-switch2"
                                               aria-label="Активность включена/выключена"></label>
                                    </div>
                                </td>
                                <td class="email-col text-center">1@troiza.net</td>
                                <td class="tite-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="customCheck" id="crm-access2"
                                        checked>
                                        <label class="custom-control-label" for="crm-access2" aria-label="Доступ в CRM клиента"></label>
                                    </div>
                                </td>
                                <td class="ino-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control-input-success" id="orders-message2" name="example1"
                                        checked>
                                        <label class="custom-control-label" for="orders-message2" aria-label="Оповещение о заявках"
                                               data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                               title="Рассылка включена + время изменения статуса"></label>
                                    </div>
                                </td>
                                <td class="phne-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control-input-success"
                                               id="ldg-balance2" name="example1" checked>
                                        <label class="custom-control-label" for="ldg-balance2"
                                               aria-label="Лидогенератор баланс" data-toggle="tooltip" data-placement="top"
                                               data-delay='{"show":"1000", "hide":"1000"}'
                                               title="Рассылка включена + время изменения статуса"></label>
                                    </div>
                                </td>
                                <td class="staus-col target-status text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control-input-success"
                                               id="yandex-balance2" name="example1">
                                        <label class="custom-control-label" for="yandex-balance2" aria-label="Яндекс баланс"
                                               data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                               title="Рассылка включена + время изменения статуса"></label>
                                    </div>
                                </td>
                                <td class="clint-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control-input-warning"
                                               name="example1" id="google-balance2">
                                        <label class="custom-control-label" for="google-balance2" aria-label="Google баланс"
                                               data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                        title="Рассылка ожидает подтверждения + время изменения статуса"></label>
                                    </div>
                                </td>
                                <td class="modration-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input custom-control-input-danger" name="customCheck" id="roistat-balance2">
                                        <label class="custom-control-label custom-control-label-cross" for="roistat-balance2"
                                               aria-label="Roistat баланс" data-toggle="tooltip" data-placement="top"
                                               data-delay='{"show":"1000", "hide":"1000"}'
                                               title="Отказ от рассылки + время изменения статуса"></label>
                                    </div>
                                </td>
                                <td class="coment-col text-center">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="customCheck" id="administrator2">
                                        <label class="custom-control-label" for="administrator2" aria-label="Администратор"></label>
                                    </div>
                                </td>
                                <td class="workspace-buttons-col text-center">
                                    <a  class="btn workspace-reset-button" value="Удаление" aria-label="Удалить заявку"
                                        href=".js-workspace-reset-modal" role="button" data-toggle="modal">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade js-workspace-reset-modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Удаление доступа и рассылок</h5>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Вы действительно хотите удалить доступ к проекту?</p>
                        <div class="workspace-reset-modal-buttons modal-action-buttons">
                            <button class="btn btn-danger modal-action-button" type="submit">Удалить</button>
                            <button class="btn cancel-button modal-action-button" data-dismiss="modal"
                                    type="button">Отменить
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast saved-toast js-saved-toast">
            <div class="toast-body">
                <div>Данные сохранены</div>
            </div>
        </div>
    </main>
@stop
