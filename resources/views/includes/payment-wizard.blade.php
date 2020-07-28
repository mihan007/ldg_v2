<div class="modal fade js-payment-wizard" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div id="smartwizard">
                    <ul class="nav">
                        <li>
                            <a class="nav-link active" href="#step-1">Онлайн-платеж</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#step-2">Расчетный счет</a>
                        </li>
                        <li>
                            <a class="nav-link" href="#step-3">Тинькофф Банк</a>
                        </li>
                        <li>
                            <a class="nav-link final" href="#step-4">Общие настройки</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="step-1" class="tab-pane" role="tabpanel">
                            <h3 class="mb-3 wizard-step-title">Настройки онлайн-платежа</h3>
                            <form>
                                <label class="form-check-label mb-3">
                                    <input class="mr-2" type="checkbox" checked>Яндекс Деньги
                                </label>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="wallet-number">Кошелек</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="wallet-number"
                                                   placeholder="410000000050333" required>
                                        <div class="invalid-feedback wallet-number-invalid-feedback">
                                            Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="address">Адрес</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input class="form-control copy-form-input" type="text" id="address"
                                                   placeholder="https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb"
                                            required>
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary copy-button" type="button"
                                                        data-clipboard-target="#copy-form-input" data-trigger="manual"
                                                        data-toggle="click-leave-tooltip" data-placement="top"
                                                        title="Скопировано" aria-label="Копировать">
                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Адрес, на который необходимо отправлять
                                            уведомления</small>
                                        <div class="invalid-feedback address-invalid-feedback">Coобщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="secret-key">Секретный ключ</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input class="form-control" type="password" id="secret-key" required>
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-secondary">
                                                    <i class="fa fa-eye"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Секретный ключ проверки подлинности данных
                                        </small>
                                        <div class="invalid-feedback login-password-invalid-feedback">Сообщение об ошибке
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Способы</label>
                                    <div class="col-sm-8">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="payment-method"
                                                   id="payment-method1" checked>
                                            <label class="custom-control-label" for="payment-method1">Яндекс Кошелек</label>
                                        </div>
                                        <div class="custom-control custom-checkbox mt-2">
                                            <input type="checkbox" class="custom-control-input" name="payment-method"
                                                   id="payment-method2" checked>
                                            <label class="custom-control-label" for="payment-method2">Банковская карта</label>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <i class="fa fa-info-circle" aria-hidden="true"></i> Убедитесь, что отправка уведомлений
                                включена
                                </p>
                                <div class="form-group modal-action-buttons">
                                    <a class="btn btn-outline-secondary modal-action-button" href="#">
                                        Перейти к настройке</a>
                                    <button class="btn btn-primary show-save-toast modal-action-button" type="submit">
                                        Сохранить</button>
                                </div>
                                <div class="form-group text-center">
                                    <a class="" href="#">Соглашение</a>
                                    <span>&#8226;</span>
                                    <a class="" href="#">Тарифы и комиссии</a>
                                </div>
                            </form>
                        </div>
                        <div id="step-2" class="tab-pane" role="tabpanel">
                            <h3 class="mb-3 wizard-step-title">Настройки оплаты через расчетный счет</h3>
                            <form>
                                <label class="form-check-label mb-3">
                                    <input class="mr-2" type="checkbox" checked>Расчетный счет
                                </label>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="bank-name">Банк получателя</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="bank-name"
                                               placeholder="АО &#8220;ТИНЬКОФФ БАНК&#8221;" required>
                                        <div class="invalid-feedback bank-name-invalid-feedback">
                                            Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="bik">БИК банка</label>
                                    <div class="col-sm-8">
                                        <input class="form-control copy-form-input" type="number" id="bik"
                                                   placeholder="044525974" required>
                                        <div class="invalid-feedback bik-invalid-feedback">Coобщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="correspondent-account">Корреспондентский
                                        счет</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="correspondent-account"
                                               placeholder="30101810145250000974" required>
                                        <div class="invalid-feedback correspondent-account-invalid-feedback">Сообщение
                                            об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="checking-account">Расчетный счет
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="checking-account"
                                               placeholder="40802810600000408982" required>
                                        <div class="invalid-feedback checking-account-invalid-feedback">Сообщение
                                            об ошибке</div>
                                    </div>
                                </div>
                                <h4>Реквизиты компании</h4>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="recipient-brand-name">Название Бренда
                                        организации
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="recipient-brand-name"
                                               placeholder="ИП ЕМЕЛЬЯНОВ ВИКТОР ВЛАДИМИРОВИЧ" required>
                                        <div class="invalid-feedback recipient-brand-invalid-feedback">Сообщение
                                            об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="recipient-company-name">Юридическое
                                        наименование организации
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="recipient-company-name"
                                               placeholder="ИП ЕМЕЛЬЯНОВ ВИКТОР ВЛАДИМИРОВИЧ" required>
                                        <div class="invalid-feedback recipient-company-name-invalid-feedback">Сообщение
                                            об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="taxes-number">ИНН</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="taxes-number"
                                               placeholder="561112781701" required>
                                        <div class="invalid-feedback taxes-number-invalid-feedback">Сообщение
                                            об ошибке
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="postcode">Почтовый индекс</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="postcode"
                                               placeholder="460021" required>
                                        <div class="invalid-feedback postcode-invalid-feedback">Сообщение
                                            об ошибке
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="city">Город вашей организации</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="city"
                                               placeholder="РОССИЯ, ОРЕНБУРГСКАЯ ОБЛ, Г ОРЕНБУРГ" required>
                                        <div class="invalid-feedback city-invalid-feedback">Сообщение
                                            об ошибке
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="company-address">Адрес вашей организации
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="company-address"
                                               placeholder="УЛ ВОСТОЧНАЯ, Д 44" required>
                                        <div class="invalid-feedback company-address-invalid-feedback">Сообщение
                                            об ошибке
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="company-head">Руководитель компании
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="company-head"
                                               placeholder="ЕМЕЛЬЯНОВ ВИКТОР ВЛАДИМИРОВИЧ" required>
                                        <div class="invalid-feedback company-head-invalid-feedback">Сообщение
                                            об ошибке
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="company-bookkeeper">Бухгалтер
                                    </label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" id="company-bookkeeper"
                                               placeholder="ЕМЕЛЬЯНОВ ВИКТОР ВЛАДИМИРОВИЧ" required>
                                        <div class="invalid-feedback company-bookkeeper-invalid-feedback">Сообщение
                                            об ошибке
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Печать (Формат PNG)</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="stamp-file">
                                            <label class="custom-file-label" for="stamp-file">Выберите файл</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Подпись руководителя
                                        (Формат PNG)</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input class="custom-file-input" type="file" id="head-signature">
                                            <label class="custom-file-label" for="head-signature">Выберите файл</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Подпись бухгалтера (Формат PNG)</label>
                                    <div class="col-sm-8">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="bookkeeper-signature">
                                            <label class="custom-file-label" for="bookkeeper-signature">Выберите файл</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary show-save-toast modal-action-button" type="submit">
                                        Сохранить</button>
                                </div>
                            </form>
                        </div>
                        <div id="step-3" class="tab-pane" role="tabpanel">
                            <h3 class="mb-3 wizard-step-title">Настройки оплаты через Тинькофф Банк</h3>
                            <form>
                                <label class="form-check-label mb-3">
                                    <input class="mr-2" type="checkbox" checked>Тинькофф Банк
                                </label>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="tinkoff-account">Счет</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="tinkoff-account"
                                               placeholder="40802810600000408982" required>
                                        <div class="invalid-feedback tinkoff-account-invalid-feedback">
                                            Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="tinkoff-taxes-number">ИНН</label>
                                    <div class="col-sm-8">
                                        <input class="form-control copy-form-input" type="number"
                                               id="tinkoff-taxes-number" placeholder="561112781701" required>
                                        <div class="invalid-feedback tinkoff-taxes-number-invalid-feedback">
                                            Coобщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="token">Токен</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="number" id="token"
                                               placeholder="30101810145250000974" required>
                                        <div class="invalid-feedback token-invalid-feedback">Сообщение об ошибке</div>
                                    </div>
                                </div>
                                <div class="form-group text-light">
                                    <button class="btn btn-outline-secondary modal-action-button" type="button">
                                        Проверить</button>
                                </div>
                            </form>
                        </div>
                        <div id="step-4" class="tab-pane" role="tabpanel">
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

