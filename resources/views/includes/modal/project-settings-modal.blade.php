<div class="modal fade js-project-settings-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-modal-title">Изменение настроек</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="balance-actions" method="post" action="#" novalidate>
                    <div class="form-group">
                        <label class="workspace-form-label" for="project-settings-moderation-period">
                            Максимальный период модерации
                            <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                               data-toggle="click-tooltip" data-placement="top" data-title="Количество дней, в
                                   течение которых клиент может изменить статус заявки. Максимальный период 45 дней"></i>
                        </label>
                        <input class="form-control moderation-period-input" type="number"
                               id="project-settings-moderation-period" placeholder="7" min="1" max="45">
                        <div class="invalid-feedback moderation-period-invalid-feedback">Максимальный период
                            модерации 45 дней
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="workspace-form-label" for="project-settings-orders-agreement">
                            Описание соглашения по заявкам
                            <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                               data-toggle="click-tooltip" data-placement="top" data-title="Соглашение о том, какие
                                   заявки считаются нецелевыми или целевыми"></i>
                        </label>
                        <button class="btn description-example-button function-button" data-toggle="tooltip"
                                data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'
                                title="Вставить стандартное описание">
                            <i class="fa fa-clipboard" aria-hidden="true"></i>
                        </button>
                        <textarea class="form-control orders-agreement-input" rows="6"
                                  id="project-settings-orders-agreement"></textarea>
                        <div class="invalid-feedback orders-agreement-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group">
                        <label class="workspace-form-label" for="project-settings-base-cost">
                            Базовая цена заявки для клиента
                            <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                               data-toggle="click-tooltip" data-placement="top" data-title="Ваше вознаграждение за
                                       целевую заявку"></i>
                        </label>
                        <div class="input-group">
                            <input class="form-control base-cost-input" type="number" id="project-settings-base-cost" min="0"
                                   max="100000" placeholder="0">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-rub" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="invalid-feedback base-cost-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group">
                        <label class="workspace-form-label" for="project-settings-max-cpl">
                            Максимально допустимый CPL
                            <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                               data-toggle="click-tooltip" data-placement="top" data-title="Отправим оповещение о
                                           превышении CPL за прошлые сутки ответственному менеджеру. Оставьте 0 рублей,
                                           чтобы не получать уведомления"></i>
                        </label>
                        <div class="input-group">
                            <input class="form-control max-cpl-input" type="number" id="project-settings-max-cpl" min="0"
                                   placeholder="0">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-rub" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="invalid-feedback max-cpl-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group">
                        <label class="workspace-form-label" for="project-settings-balance-limit">
                            Уведомлять об окончании баланса Лидгена при
                            <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                               data-toggle="click-tooltip" data-placement="top" data-title="Отправим оповещение клиенту
                               о необходимости пополнить баланс"></i>
                        </label>
                        <div class="input-group">
                            <input class="form-control balance-limit-input" type="number"
                                   id="project-settings-balance-limit" min="0" placeholder="0">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-rub" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="invalid-feedback balance-limit-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group">
                        <label class="workspace-form-label" for="project-settings-data-hide">
                            Скрывать данные заявок при балансе Лидгена менее
                            <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                               data-toggle="click-tooltip" data-placement="top" data-title="Система скроет заявки
                                   для вашего клиента при балансе менее этого значения"></i>
                        </label>
                        <div class="input-group">
                            <input class="form-control data-hide-input" type="number" id="project-settings-data-hide"
                                   min="0" placeholder="0">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-rub" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="invalid-feedback data-hide-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group modal-action-buttons">
                        <button class="btn btn-primary modal-action-button show-save-toast workspace-save-button" type="submit">Сохранить</button>
                        <button class="btn cancel-button modal-action-button" data-dismiss="modal"
                                type="button">Отменить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
