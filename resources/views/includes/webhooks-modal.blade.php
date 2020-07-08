<div class="modal fade js-webhook-modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Настройки Webhooks</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="" method="get" action="#">
                    <div class="form-group row">
                        <label class="col-sm-3 col-lg-2 col-form-label" for="webhooks-connect-name">Имя подключения</label>
                        <div class="col-sm-9 col-lg-10">
                            <input class="form-control" type="text" id="webhooks-connect-name" value="Webhooks[ID]">
                        </div>
                    </div>
                <p class="modal-text">Отправьте тестовый webhooks на url и нажмите "Проверить"</p>
                    <div class="form-group row">
                        <div class="input-group col-lg-10 offset-lg-2">
                            <input class="form-control" type="text" id="" value="https://сайт.ru/wh/54/1lfqoq7/ik">
                            <div class="input-group-append">
                                <button class="btn btn-secondary copy-button" type="button">Проверить</button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                <div class="table-wrapper col-lg-10 offset-lg-2">
                    <table class="table common-table ">
                        <thead>
                            <tr class="table-grey text-center">
                                <th class="rounded-table-left">
                                    Параметры приняты</th>
                                <th class="rounded-table-right" scope="col">Значения</th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <td class="text-center">phone</td>
                                <td class="text-center">89229997988</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    </div>
                <p class="modal-text">Соотнесите полученные параметры или пропишите вручную</p>
                    <div class="form-group row">
                        <label class="col-sm-3 col-lg-2 col-form-label" for="webhook-phone">Телефон</label>
                        <div class="col-sm-5 col-lg-7">
                            <input class="form-control" type="tel" id="webhook-phone" value="89229997988">
                        </div>
                        <div class="col-sm-4 col-lg-3 modal-select-wrapper">
                            <select class="select custom-select modal-select">
                                <option selected>Выбрать параметр</option>
                                <option value="1">Телефон</option>
                                <option value="2">Электронная почта</option>
                                <option value="3">Адрес</option>
                                <option value="4">Комментарий</option>
                                <option value="5">Другой параметр</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-lg-2 col-form-label" for="webhook-name">Имя</label>
                        <div class="col-sm-5 col-lg-7">
                            <input class="form-control" type="text" id="webhook-name">
                        </div>
                        <div class="col-sm-4 col-lg-3 modal-select-wrapper">
                            <select class="select custom-select modal-select">
                                <option selected>Выбрать параметр</option>
                                <option value="1">Телефон</option>
                                <option value="2">Электронная почта</option>
                                <option value="3">Адрес</option>
                                <option value="4">Комментарий</option>
                                <option value="5">Другой параметр</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-lg-2 col-form-label" for="webhook-site-name">Название сайта, формы</label>
                        <div class="col-sm-5 col-lg-7">
                            <input class="form-control" type="text" id="webhook-site-name">
                        </div>
                        <div class="col-sm-4 col-lg-3 modal-select-wrapper">
                            <select class="select custom-select modal-select">
                                <option selected>Выбрать параметр</option>
                                <option value="1">Телефон</option>
                                <option value="2">Электронная почта</option>
                                <option value="3">Адрес</option>
                                <option value="4">Комментарий</option>
                                <option value="5">Другой параметр</option>
                             </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-lg-2 col-form-label" for="webhook-info-name">Дополнительная информация</label>
                        <div class="col-sm-5 col-lg-7">
                            <input class="form-control" type="text" id="webhook-info-name">
                        </div>
                        <div class="col-sm-4 col-lg-3 modal-select-wrapper">
                            <select class="select custom-select modal-select">
                                <option selected>Выбрать параметр</option>
                                <option value="1">Телефон</option>
                                <option value="2">Электронная почта</option>
                                <option value="3">Адрес</option>
                                <option value="4">Комментарий</option>
                                <option value="5">Другой параметр</option>
                             </select>
                        </div>
                    </div>
                    <p class="modal-text">Укажите стоимость заявки</p>
                    <div class="form-group row">
                        <label class="col-sm-4 col-lg-2 col-form-label" for="roistat-cost">Цена</label>
                        <div class="col-sm-8 col-lg-7">
                            <input class="form-control" type="text" id="roistat-cost" value="Базовая">
                        </div>
                    </div>
                    @include('includes.modal.buttons', ['resultModalClass' => 'js-webhooks-url-modal'])
                </form>
            </div>
        </div>
    </div>
</div>
