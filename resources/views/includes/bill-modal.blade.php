<div class="js-bill-modal modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Создание счета</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="bill-actions" method="post" action="#" novalidate>
                    <div class="form-group">
                        <label class="sr-only" for="input-sum-bill">Сумма</label>
                        <div class="input-group">
                            <input class="form-control" type="number" min="0" id="input-sum-bill" placeholder="Сумма" required>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-rub" aria-hidden="true"></i></span>
                            </div>
                            <div class="invalid-feedback bill-sum-invalid-feedback">Сообщение об ошибке
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="input-company-bill">Наименование организации</label>
                        <div class="input-group">
                            <input class="form-control" type="text" id="input-company-bill" placeholder="Наименование организации" required>
                            <div class="invalid-feedback bill-company-invalid-feedback">Сообщение об ошибке
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="input-taxes-number">Инн</label>
                        <div class="input-group">
                            <input class="form-control" type="text" id="input-taxes-number" placeholder="ИНН" required>
                            <div class="invalid-feedback bill-taxes-invalid-feedback">Сообщение об ошибке
                            </div>
                        </div>
                    </div>
                    <div class="form-group modal-action-buttons">
                        <button class="btn btn-primary modal-action-button" type="submit">Создать</button>
                        <button class="btn cancel-button modal-action-button" data-dismiss="modal"
                                type="button">Отменить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
