<div class="modal fade js-balance-client-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-modal-title">Операции с балансом</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="balance-actions" method="post" action="#" novalidate>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="balance-radio" id="bankcard" checked>
                            <label class="custom-control-label" for="bankcard">Банковская карта</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" class="custom-control-input" name="balance-radio" id="yandex-modal">
                            <label class="custom-control-label" for="yandex-modal">Яндекс.Деньги</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" class="custom-control-input" name="balance-radio" id="bill" >
                            <label class="custom-control-label" for="bill">Выставить счет</label>
                        </div>
                    </div>
                    <div class="bill-form-groups">
                        <div class="form-group">
                            <label class="sr-only" for="input-company-balance">Наименование организации</label>
                            <input class="form-control" type="text" id="input-company-balance"
                                   placeholder="Наименование организации" required>
                            <div class="invalid-feedback balance-company-invalid-feedback">Сообщение об ошибке</div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="input-taxes-number-balance">Инн</label>
                            <input class="form-control" type="text" id="input-taxes-number-balance" placeholder="ИНН"
                                   required>
                            <div class="invalid-feedback balance-taxes-invalid-feedback">Сообщение об ошибке</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="input-sum-client-balance">Сумма</label>
                        <div class="input-group">
                            <input class="form-control" type="number" min="0" id="input-sum-client-balance"
                                   placeholder="Сумма" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-rub" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="invalid-feedback client-sum-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group balance-action-buttons">
                        <button class="btn btn-primary balance-action-button" type="submit">Пополнить</button>
                        <button class="btn btn-danger balance-action-button" type="submit">Списать</button>
                        <button class="btn cancel-button balance-action-button" data-dismiss="modal"
                                type="button">Отменить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
