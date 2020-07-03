<div class="modal fade js-roistat-phone-modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Настройки Roistat телефонии</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="" method="post" action="#">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="roistat-connect-name">Имя подключения</label>
                        <div class="col-sm-8">
                        <input class="form-control" type="text" id="roistat-connect-name" value="Roistat телефония">
                        </div>
                    </div>
                    <p class="modal-text">Укажите стоимость заявки</p>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="roistat-cost">Цена</label>
                        <div class="col-sm-8">
                        <input class="form-control" type="text" id="roistat-cost" value="Базовая">
                        </div>
                    </div>
                    @include('includes.modal.buttons', ['resultModalClass' => 'js-roistat-url-modal'])
                </form>
            </div>
        </div>
    </div>
</div>
