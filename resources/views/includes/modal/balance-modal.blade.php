<div class="modal fade js-balance-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-modal-title">Операции с балансом</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="balance-actions" method="post" action="#" novalidate>
                    <div class="form-group">
                        <label class="sr-only" for="input-sum-balance">Сумма</label>
                        <div class="input-group">
                            <input class="form-control" type="number" min="0" id="input-sum-balance" placeholder="Сумма" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="invalid-feedback balance-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group balance-action-buttons">
                        <button class="btn btn-primary balance-action-button" type="submit">Пополнить</button>
                        <button class="btn btn-primary balance-action-button" type="submit">Списать</button>
                        <button class="btn cancel-button balance-action-button" data-dismiss="modal"
                                type="button">Отменить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
