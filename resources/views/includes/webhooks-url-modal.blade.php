<div class="modal fade js-webhooks-url-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Webhooks от других сервисов</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="" method="get" action="#">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label url-modal-label" for="webhooks-url">Webhook</label>
                        <div class="input-group col">
                            <input class="form-control" type="text" id="webhooks-url"
                                   value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                            <div class="input-group-append">
                                <button class="btn btn-secondary copy-button" type="button"
                                        data-clipboard-target="#copy-form-input" aria-label="Копировать">
                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-action-buttons">
                        <button class="btn cancel-button modal-action-button" data-dismiss="modal"
                                type="button">Отменить
                        </button>
                        <a class="btn btn-primary modal-action-button js-save-show-result"
                           href=".js-compare-parameters" role="button">
                            Соотнести параметры</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
