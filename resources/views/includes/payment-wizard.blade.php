<div class="modal fade js-payment-wizard" tabindex="-1">
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
                            <h3 class="mb-3 wizard-step-title">Выберите способ платежа</h3>
                            <ul class="list-unstyled wizard-list">
                                <li>
                                    <ul>
                                        <li class="wizard-list-item">
                                            <button class="btn function-button">Яндекс Деньги</button>
                                        </li>
                                        <li class="wizard-list-item">
                                            <button class="btn function-button">Расчетный счет</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div id="step-2" class="tab-pane" role="tabpanel">
                            <section>
                                <h3 class="mb-3 wizard-step-title">Настройки онлайн-платежа</h3>
                                <div class="text-right">
                                    <a class="btn btn-outline-primary instruction-button mb-3" href="#"
                                       target="_blank">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        Инструкция
                                    </a>
                                </div>
                                <form class="yandex-payment-form" method="post" action="#" novalidate>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="wallet-number">Кошелек</label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="number" id="wallet-number"
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
                                            <div class="input-group" id="show_hide_password">
                                                <input class="form-control wizard-form-input" type="password" id="secret-key"
                                                       required>
                                                <div class="input-group-append">
                                                    <a class="btn btn-secondary show-hide-password-button" href="">
                                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                    </a>
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
                                                <label class="custom-control-label" for="payment-method2">Банковская карта
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="yandex-buttons-wrapper">
                                        <p class="">
                                            <i class="fa fa-info-circle" aria-hidden="true"></i> Убедитесь, что отправка
                                            уведомлений включена
                                        </p>
                                        <div class="form-group">
                                            <a class="btn btn-outline-primary settings-button" href="#">Перейти в Яндекс.Деньги</a>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <a class="" href="#">Соглашение</a>
                                        <span>&#8226;</span>
                                        <a class="" href="#">Тарифы и комиссии</a>
                                    </div>
                                </form>
                            </section>
                            <section>
                                <h3 class="mb-3 wizard-step-title">Настройки оплаты через расчетный счет</h3>
                                <div class="text-right">
                                    <a class="btn btn-outline-primary instruction-button mb-3" href="#"
                                       target="_blank">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        Инструкция
                                    </a>
                                </div>
                                <form class="checking-account-payment-form" method="post" action="#">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="bank-name">Банк получателя</label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="text" id="bank-name"
                                                   placeholder="АО &#8220;Тинькофф Банк&#8221;" required>
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
                                            <input class="form-control wizard-form-input" type="number" id="correspondent-account"
                                                   placeholder="30101810145250000974" required>
                                            <div class="invalid-feedback correspondent-account-invalid-feedback">Сообщение
                                                об ошибке</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="checking-account">Расчетный счет
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="number" id="checking-account"
                                                   placeholder="40802810600000408982" required>
                                            <div class="invalid-feedback checking-account-invalid-feedback">Сообщение
                                                об ошибке</div>
                                        </div>
                                    </div>
                                    <h4>Реквизиты компании</h4>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="recipient-brand-name">Название бренда
                                            организации
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="text" id="recipient-brand-name"
                                                   placeholder="Лидогенератор" required>
                                            <div class="invalid-feedback recipient-brand-invalid-feedback">Сообщение
                                                об ошибке</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="recipient-company-name">Юридическое
                                            наименование организации
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="text" id="recipient-company-name"
                                                   placeholder="ИП Емельянов Виктор Владимирович" required>
                                            <div class="invalid-feedback recipient-company-name-invalid-feedback">Сообщение
                                                об ошибке</div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="taxes-number">ИНН</label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="number" id="taxes-number"
                                                   placeholder="561112781701" required>
                                            <div class="invalid-feedback taxes-number-invalid-feedback">Сообщение
                                                об ошибке
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="postcode">Почтовый индекс</label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="number" id="postcode"
                                                   placeholder="460021" required>
                                            <div class="invalid-feedback postcode-invalid-feedback">Сообщение
                                                об ошибке
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="city">Город вашей организации</label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="text" id="city"
                                                   placeholder="Россия, Оренбургская Обл, г Оренбург" required>
                                            <div class="invalid-feedback city-invalid-feedback">Сообщение
                                                об ошибке
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="company-address">Адрес вашей организации
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="text" id="company-address"
                                                   placeholder="ул Восточная, д 44" required>
                                            <div class="invalid-feedback company-address-invalid-feedback">Сообщение
                                                об ошибке
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="company-head">Руководитель компании
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="text" id="company-head"
                                                   placeholder="Емельянов Виктор Владимирович" required>
                                            <div class="invalid-feedback company-head-invalid-feedback">Сообщение
                                                об ошибке
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="company-bookkeeper">Бухгалтер
                                        </label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="text" id="company-bookkeeper"
                                                   placeholder="Емельянов Виктор Владимирович" required>
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
                                        <label class="col-sm-4 col-form-label">Подпись руководителя (Формат PNG)</label>
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
                                                <label class="custom-file-label" for="bookkeeper-signature">Выберите файл
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                            <section>
                                <h3 class="mb-3 wizard-step-title">Автоматическое отслеживание оплаченных счетов в
                                    Тинькофф Банке</h3>
                                <div class="text-right">
                                    <a class="btn btn-outline-primary instruction-button mb-3" href="#"
                                       target="_blank">
                                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                                        Инструкция
                                    </a>
                                </div>
                                <form class="tinkoff-payment-form" method="post" action="#">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label" for="tinkoff-account">Счет</label>
                                        <div class="col-sm-8">
                                            <input class="form-control wizard-form-input" type="number" id="tinkoff-account"
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
                                            <div class="input-group" id="show_hide_password">
                                                <input class="form-control wizard-form-input" type="password" id="token"
                                                       required>
                                                <div class="input-group-append">
                                                    <a class="btn btn-secondary show-hide-password-button" href="">
                                                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback token-invalid-feedback">Сообщение об ошибке</div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                        <div id="step-3" class="tab-pane" role="tabpanel">
                            <h3 class="mb-3 wizard-step-title">Проверьте параметры настроек</h3>
                            <section>
                                <h4 class="wizard-section-title mt-2">Яндекс Деньги</h4>
                                <div class="table-wrapper">
                                    <table class="table common-table wizard-table mx-auto">
                                        <thead>
                                            <tr class="table-grey">
                                                <th class="rounded-table-left parametr-col" scope="col">Параметр</th>
                                                <th class="rounded-table-right meaning-col" scope="col">Значение</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-bordered">
                                        <tr>
                                            <td class="">Номер кошелька</td>
                                            <td class="">410000000050333</td>
                                        </tr>
                                        <tr>
                                            <td class="">Адрес</td>
                                            <td class="">https://panel.troiza.net/api/v1/web-leads/webhook/GyOJjqO8HqlRJdEsy5Pb</td>
                                        </tr>
                                        <tr>
                                            <td class="">Секретный ключ</td>
                                            <td class="">...</td>
                                        </tr>
                                        <tr>
                                            <td class="">Способы</td>
                                            <td class="">Яндекс Деньги, Банковская карта</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section>
                                <h4 class="wizard-section-title mt-2">Расчетный счет</h4>
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
                                            <td class="">Банк получателя</td>
                                            <td class="">АО &#8220;Тинькофф Банк&#8221;</td>
                                        </tr>
                                        <tr>
                                            <td class="">БИК</td>
                                            <td class="">044525974</td>
                                        </tr>
                                        <tr>
                                            <td class="">Корреспондентский счет</td>
                                            <td class="">30101810145250000974</td>
                                        </tr>
                                        <tr>
                                            <td class="">Расчетный счет</td>
                                            <td class="">4080281060000040898</td>
                                        </tr>
                                        <tr>
                                            <td class="">Название Бренда организации</td>
                                            <td class="">ИП Емельянов Виктор Владимирович</td>
                                        </tr>
                                        <tr>
                                            <td class="">Юридическое наименование организации</td>
                                            <td class="">ИП Емельянов Виктор Владимирович</td>
                                        </tr>
                                        <tr>
                                            <td class="">ИНН</td>
                                            <td class="">561112781701</td>
                                        </tr>
                                        <tr>
                                            <td class="">Адрес организации</td>
                                            <td class="">460021, Россия, Оренбургская Обл, г Оренбург, ул Восточная, д 44
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">Руководитель компании</td>
                                            <td class="">Емельянов Виктор Владимирович</td>
                                        </tr>
                                        <tr>
                                            <td class="">Бухгалтер</td>
                                            <td class="">Емельянов Виктор Владимирович</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                            <section>
                                <h4 class="wizard-section-title mt-2">Автоматическое отслеживание оплаченных счетов в
                                    Тинькофф Банке</h4>
                                <p class="unchecked-text">Способ оплаты не подключен</p>
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
                                            <td class="">Счет</td>
                                            <td class="">40802810600000408982</td>
                                        </tr>
                                        <tr>
                                            <td class="">ИНН</td>
                                            <td class="">561112781701</td>
                                        </tr>
                                        <tr>
                                            <td class="">Токен</td>
                                            <td class="">...</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

