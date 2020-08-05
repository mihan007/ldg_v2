<div class="modal fade js-reset-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title custom-modal-title">{{ $messageHeader }}</h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>{{ $messageBody }}</p>
                <div class="modal-action-buttons">
                    <button class="btn btn-danger modal-action-button" type="submit">Удалить</button>
                    <button class="btn cancel-button modal-action-button" data-dismiss="modal"
                            type="button">Отменить
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
