<div class="modal fade js-settings-wizard" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div id="smartwizard">
                    <ul class="nav">
                        <li>
                            <a class="nav-link active" href="#step-1">Шаг 1</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#step-2">Шаг 2</a>
                        </li>
                        <li>
                            <a class="nav-link final" href="#step-3">Шаг 3</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="step-1" class="tab-pane" role="tabpanel">
                            <h3 class="mb-3 wizard-step-title">Выберите подключение</h3>
                            <ul class="list-unstyled connect-list">
                                <li class="connect-list-main-item">Получение заявок
                                    <ul>
                                        <li class="connect-list-item">
                                            <button class="btn function-button">Roistat телефония</button>
                                        </li>
                                        <li class="connect-list-item">
                                            <button class="btn function-button">Zadarma телефония</button>
                                        </li>
                                        <li class="connect-list-item">
                                            <button class="btn function-button">Marquiz</button>
                                        </li>
                                        <li class="connect-list-item">
                                            <button class="btn function-button">Webhooks от других сервисов</button>
                                        </li>
                                        <li class="connect-list-item">
                                            <button class="btn function-button">GET запрос с сайта</button>
                                        </li>
                                    </ul>
                                </li>
                                <li class="connect-list-main-item">Реклама и расходы
                                    <ul>
                                        <li class="connect-list-item">
                                            <button class="btn function-button">Яндекс.Директ</button>
                                        </li>
                                        <li class="connect-list-item">
                                            <button class="btn function-button">Google Ads</button>
                                        </li>
                                        <li class="connect-list-item">
                                            <button class="btn function-button">Roistat</button>
                                        </li>
                                    </ul>
                                </li>
                                <li class="connect-list-main-item">Отправка заявок в CRM
                                    <ul>
                                        <li class="connect-list-item">
                                            <button class="btn function-button">Битрикс 24</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="step-2" class="tab-pane" role="tabpanel">
                            <h3 class="mb-1 wizard-step-title">Определите параметры</h3>
                            <div class="text-right">
                                <a class="btn btn-outline-primary mb-3" href="{{ route('settings.elama-instruction') }}"
                                   target="_blank">
                                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                                    Инструкция
                                </a>
                            </div>
                            <form class="webhooks-form" method="post" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-lg-2 col-form-label" for="webhooks-connect-name">
                                        Имя подключения</label>
                                    <div class="col-sm-9 col-lg-10">
                                        <input class="form-control wizard-form-input" type="text"
                                               id="webhooks-connect-name" value="Webhooks [ID]">
                                        <div class="invalid-feedback webhooks-connect-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <p class="modal-text">Отправьте тестовый webhooks на url и нажмите "Проверить"</p>
                                <div class="form-group row">
                                    <div class="input-group col-lg-10 offset-lg-2">
                                        <input class="form-control wizard-form-input" type="text"
                                               value="https://сайт.ru/wh/54/1lfqoq7/ik">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary copy-button" type="button">Проверить</button>
                                        </div>
                                        <div class="invalid-feedback webhooks-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="table-wrapper col-lg-10 offset-lg-2">
                                        <table class="table common-table">
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
                                    <label class="col-sm-3 col-lg-2 col-form-label" for="webhooks-phone">Телефон</label>
                                    <div class="col-sm-5 col-lg-7">
                                        <input class="form-control" type="text" id="webhooks-phone" value="89229997988">
                                        <div class="invalid-feedback webhooks-phone-invalid-feedback">Сообщение об ошибке</div>
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
                                    <label class="col-sm-3 col-lg-2 col-form-label" for="webhooks-name">Имя</label>
                                    <div class="col-sm-5 col-lg-7">
                                        <input class="form-control wizard-form-input" type="text" id="webhooks-name">
                                        <div class="invalid-feedback webhooks-name-invalid-feedback">Сообщение об ошибке</div>
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
                                    <label class="col-sm-3 col-lg-2 col-form-label" for="webhooks-info-name">
                                        Дополнительная информация</label>
                                    <div class="col-sm-5 col-lg-7">
                                        <input class="form-control wizard-form-input" type="text"
                                               id="webhooks-info-name">
                                        <div class="invalid-feedback webhooks-info-invalid-feedback">Сообщение об ошибке</div>
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
                                <p class="modal-text">Укажите стоимость заявки
                                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                          data-toggle="click-tooltip" data-placement="top" data-title="Ваше
                                          вознаграждение за заявку с этого источника. Можете оставить базовую цену из
                                          настроек Рабочей области"></i>
                                </p>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-lg-2 col-form-label" for="webhooks-cost">Цена</label>
                                    <div class="col-sm-8 col-lg-7">
                                        <input class="form-control wizard-form-input" type="text" id="webhooks-cost"
                                               value="Базовая">
                                        <div class="invalid-feedback webhooks-cost-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                            </form>
                            <form class="roistat-phone-form" method="post" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="roistat-phone-name">Имя подключения
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text"
                                               id="roistat-phone-name" value="Roistat телефония [ID]">
                                        <div class="invalid-feedback roistat-phone-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <p class="modal-text">Укажите стоимость заявки
                                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                       data-toggle="click-tooltip" data-placement="top" data-title="Ваше
                                          вознаграждение за заявку с этого источника. Можете оставить базовую цену из
                                          настроек Рабочей области"></i>
                                </p>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="roistat-phone-cost">Цена</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="roistat-phone-cost"
                                               value="Базовая">
                                        <div class="invalid-feedback roistat-phone-cost-invalid-feedback">Сообщение об
                                            ошибке</div>
                                    </div>
                                </div>
                            </form>
                            <form class="markviz-form" method="post" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="marquiz-name">Имя подключения</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="marquiz-name"
                                               value="Marquiz [ID]">
                                        <div class="invalid-feedback marquiz-name-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <p class="modal-text">Укажите стоимость заявки
                                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                       data-toggle="click-tooltip" data-placement="top" data-title="Ваше
                                          вознаграждение за заявку с этого источника. Можете оставить базовую цену из
                                          настроек Рабочей области"></i>
                                </p>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="marquiz-cost">Цена</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="marquiz-cost"
                                               value="Базовая">
                                        <div class="invalid-feedback marquiz-cost-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                            </form>
                            <form class="get-form" method="post" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="get-name">Имя подключения</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="get-name"
                                               value="GET запрос с сайта [ID]">
                                        <div class="invalid-feedback get-name-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <p class="modal-text">Укажите стоимость заявки
                                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                       data-toggle="click-tooltip" data-placement="top" data-title="Ваше
                                          вознаграждение за заявку с этого источника. Можете оставить базовую цену из
                                          настроек Рабочей области"></i>
                                </p>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="get-cost">Цена</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="get-cost"
                                               value="Базовая">
                                        <div class="invalid-feedback get-cost-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                            </form>
                            <form class="zadarma-form" method="post" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="zadarma-name">Имя подключения</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="zadarma-name"
                                               value="Zadarma [ID]">
                                        <div class="invalid-feedback zadarma-name-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <p class="modal-text">Укажите ключи авторизации API</p>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="zadarma-key">Key</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="zadarma-key"
                                               value="API Key">
                                        <div class="invalid-feedback zadarma-key-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="zadarma-secret">Secret</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="zadarma-secret"
                                               value="API Secret">
                                        <div class="invalid-feedback zadarma-secret-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <p class="modal-text">Укажите стоимость заявки
                                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                       data-toggle="click-tooltip" data-placement="top" data-title="Ваше
                                          вознаграждение за заявку с этого источника. Можете оставить базовую цену из
                                          настроек Рабочей области"></i>
                                </p>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="zadarma-cost">Цена</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="zadarma-cost"
                                               value="Базовая">
                                        <div class="invalid-feedback zadarma-cost-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                            </form>
                            <form class="yandex-direct-form" method="post" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="yandex-name">Имя подключения
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="yandex-name"
                                               value="Яндекс.Директ [ID]">
                                        <div class="invalid-feedback yandex-name-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="yandex-parametr-1">Параметр 1
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="yandex-parametr-1">
                                        <div class="invalid-feedback yandex-parametr1-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="yandex-parametr-2">Параметр 2
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="yandex-parametr-2">
                                        <div class="invalid-feedback yandex-parametr2-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                            </form>
                            <form class="google-ads-form" method="post" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="google-name">Имя подключения</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="google-name"
                                               value="Google Ads [ID]">
                                        <div class="invalid-feedback google-name-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="google-parametr-1">Параметр 1</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="google-parametr-1">
                                        <div class="invalid-feedback google-parametr1-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="google-parametr-2">Параметр 2</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="google-parametr-2">
                                        <div class="invalid-feedback google-parametr1-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                            </form>
                            <form class="roistat-form" method="post" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="roistat-name">Имя подключения</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="roistat-name"
                                               value="Roistat [ID]">
                                        <div class="invalid-feedback roistat-name-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="roistat-parametr-1">Параметр 1</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="roistat-parametr-1">
                                        <div class="invalid-feedback roistat-parametr1-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="roistat-parametr-2">Параметр 2</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="roistat-parametr-2">
                                        <div class="invalid-feedback roistat-parametr2-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                            </form>
                            <form class="bitrix-form" method="post" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="bitrix-name">Имя подключения</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="bitrix-name"
                                               value="Битрикс 24 [ID]">
                                        <div class="invalid-feedback bitrix-name-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="bitrix-webhooks">Вставьте ссылку webhooks</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="bitrix-webhooks"
                                               placeholder="https://name.bitrix24.ru/rest/1/7k5lak0lsn91ln/">
                                        <div class="invalid-feedback bitrix-webhooks-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="bitrix-parametr-1">Параметр 1</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="bitrix-parametr-1">
                                        <div class="invalid-feedback bitrix-parametr1-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="bitrix-parametr-2">Параметр 2</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text" id="bitrix-parametr-2">
                                        <div class="invalid-feedback bitrix-parametr2-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                            </form>
                            <div class="wizard-demo wizard-block-hide">
                                <p class="modal-text">После нажатия кнопки "Продолжить" вы будете перенаправлены
                                    на сервер авторизации Google Ads, где необходимо предоставить доступ к данным для
                                    приложения Лидогенератор</p>
                            </div>
                            <div class="wizard-demo wizard-block-hide">
                                <p class="modal-text">После нажатия кнопки "Продолжить" вы будете перенаправлены
                                    на сервер авторизации Яндекса, где необходимо предоставить доступ к данным для приложения
                                    Лидогенератор</p>
                            </div>
                            <form class="roistat-ad-form" method="post" action="#">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="roistat-ad-connect-name">
                                        Имя подключения</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text"
                                               id="roistat-ad-connect-name" value="Roistat [ID]">
                                        <div class="invalid-feedback roistat-ad-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="roistat-ad-number">
                                        Номер компании Roistat</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text"
                                               id="roistat-ad-number" value="">
                                        <div class="invalid-feedback roistat-ad-number-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="roistat-ad-api-key">
                                        API ключ аккаунта</label>
                                    <div class="col-sm-8">
                                        <input class="form-control wizard-form-input" type="text"
                                               id="roistat-ad-api-key" value="">
                                        <div class="invalid-feedback roistat-ad-api-key-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="roistat-ad-balance">
                                        Уведомлять о пополнении, если на балансе Roistat</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input class="form-control wizard-form-input" type="text"
                                                   id="roistat-ad-balance" value="0">
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-rub" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <div class="invalid-feedback roistat-ad-balance-invalid-feedback">Сообщение об ошибке</div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="step-3" class="tab-pane" role="tabpanel">
                            <h3 class="mb-3 wizard-step-title">Проверьте параметры подключения</h3>
                            <div class="table-wrapper">
                                <table class="table common-table wizard-table mx-auto">
                                    <thead>
                                        <tr class="table-grey">
                                            <th class="rounded-table-left" scope="col">Параметр</th>
                                            <th class="rounded-table-right" scope="col">Значение</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-bordered">
                                        <tr>
                                            <td class="">ID</td>
                                            <td class=""></td>
                                        </tr>
                                        <tr>
                                            <td class="">Имя</td>
                                            <td class=""></td>
                                        </tr>
                                        <tr>
                                            <td class="">Источник</td>
                                            <td class=""></td>
                                        </tr>
                                        <tr>
                                            <td class="">Стоимость заявки</td>
                                            <td class="">Базовая</td>
                                        </tr>
                                        <tr>
                                            <td class="">URL</td>
                                            <td class="">
                                                <div class="input-group">
                                                    <input class="form-control copy-form-input" type="text"
                                                           id="form-url-result"
                                                           value="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-secondary copy-button" type="button"
                                                                data-clipboard-target="#copy-form-input"
                                                                data-trigger="manual" data-toggle="click-leave-tooltip"
                                                                data-placement="top" title="Скопировано"
                                                                aria-label="Копировать">
                                                            <i class="fa fa-files-o" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">API Key</td>
                                            <td class=""></td>
                                        </tr>
                                        <tr>
                                            <td class="">API Secret</td>
                                            <td class=""></td>
                                        </tr>
                                        <tr>
                                            <td class="">Название подключения</td>
                                            <td class=""></td>
                                        </tr>
                                        <tr>
                                            <td class="">Останавливать, если на балансе CRM 0 рублей
                                                <i class="fa fa-question-circle-o" aria-hidden="true"
                                                   data-trigger="manual" data-toggle="click-tooltip" data-placement="top"
                                                   data-title="Если баланс Лидогенератора достигнет этого значения,
                                                   система автоматически остановит все включенные кампании и запомнит их.
                                                   Когда баланс станет выше значения, система запустит ранее выключенные
                                                   кампании"></i>
                                            </td>
                                            <td class="">Включено</td>
                                        </tr>
                                        <tr>
                                            <td class="">Уведомлять об окончании баланса при 10000 рублей
                                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                                   data-toggle="click-tooltip" data-placement="top"
                                                   data-title="При достижении этого значения система отправит
                                                   уведомление об окончании баланса Яндекса"></i>
                                            </td>
                                            <td class="">Включено</td>
                                        </tr>
                                        <tr>
                                            <td class="">НДС</td>
                                            <td class="">20%</td>
                                        </tr>
                                        <tr>
                                            <td class="">Бюджет оплачивает клиент
                                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                                 data-toggle="click-tooltip" data-placement="top" data-title="Включите,
                                                 если рекламный бюджет оплачивает клиент. Тогда при подсчете вашей
                                                 Прибыли система не вычтет рекламный Расход из Выручки"></i>
                                            </td>
                                            <td class="">Выключено</td>
                                        </tr>
                                        <tr>
                                            <td class="">Уведомлять о пополнении, если на балансе Roistat 0 рублей
                                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                                   data-toggle="click-tooltip" data-placement="top" data-title="При
                                                   достижении этого значения система отправит уведомление об окончании
                                                   баланса Roistat"></i>
                                            </td>
                                            <td class="">Выключено</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h3 class="mb-4 wizard-step-title">Параметры заявок</h3>
                            <div class="table-wrapper">
                                <table class="table common-table wizard-table mx-auto">
                                    <thead>
                                        <tr class="table-grey">
                                            <th class="rounded-table-left">Лидген CRM</th>
                                            <th class="rounded-table-right">Параметры webhook</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-bordered">
                                        <tr>
                                            <td class="">Телефон</td>
                                            <td class=""></td>
                                        </tr>
                                        <tr>
                                            <td class="">Имя</td>
                                            <td class=""></td>
                                        </tr>
                                        <tr>
                                            <td class="">Дополнительная информация</td>
                                            <td class=""></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

