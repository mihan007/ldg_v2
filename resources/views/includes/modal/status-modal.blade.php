<div class="modal fade js-status-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-modal-title">Укажите, почему заявка нецелевая?</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="status-reason-form" method="post" action="#" novalidate>
                    <div class="form-group">
                        <textarea class="form-control comment-input" rows="6"
                                  id="status-input" placeholder="Опишите причину здесь" autofocus></textarea>
                        <div class="invalid-feedback status-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group modal-action-buttons">
                        <button class="btn btn-primary modal-action-button show-save-toast workspace-save-button"
                                type="submit">Сохранить</button>
                        <button class="btn cancel-button modal-action-button" data-dismiss="modal"
                                type="button">Отменить
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
