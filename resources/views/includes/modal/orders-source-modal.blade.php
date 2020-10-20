<div class="js-orders-source-modal modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-modal-title">Источник заявок</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="orders-source-actions" method="post" action="#" novalidate>
                    <div class="form-group">
                        <label class="sr-only" for="orders-source-tel">Телефон</label>
                        <div class="input-group">
                            <input class="form-control" type="tel" id="orders-source-tel" placeholder="Телефон" required>
                        </div>
                        <div class="invalid-feedback orders-source-tel-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="orders-source-info">Информация</label>
                        <textarea class="form-control" id="orders-source-info" rows="6" placeholder="Информация">
                        </textarea>
                        <div class="invalid-feedback orders-source-info-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group modal-action-buttons">
                        <button class="btn btn-primary modal-action-button" type="submit">Создать</button>
                        <button class="btn cancel-button modal-action-button" data-dismiss="modal" type="button">
                            Отменить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
