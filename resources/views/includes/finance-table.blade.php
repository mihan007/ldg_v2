<div class="row">
    <h2 class="sr-only">Таблица данных по финансам</h2>
    <div class="col-md-12 mx-auto">
        <div class="table-wrapper mb-5">
            <table class="table finance-table common-table finance-grid table-striped" data-offset="144">
                <thead>
                <tr class="table-grey text-center ">
                    <th class="rounded-table-left finance-time-col" scope="col">Время</th>
                    <th class="finance-operation-col" scope="col">Операция</th>
                    <th class="finance-info-co" scope="col">Информация</th>
                    <th class="finance-sum-col" scope="col">Сумма</th>
                    <th class="finance-history-col rounded-table-right" scope="col">История счета</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="finance-time-col text-left" scope="row">11.02.2018 13:00:00</td>
                    <td class="finance-operation-col">Выставлен к оплате</td>
                    <td class="finance-info-col">Емельянов Виктор</td>
                    <td class="finance-sum-col">
                        @if ($role=='client')
                            +-2.00
                        @endif
                        @if ($role=='staff' or $role=='lidogenerator')
                            <div class="finance-sum-wrapper">
                                <span class="mr-1 mb-1">+-2.00</span>
                                <button class="btn page-button paid-bill-button" type="button" href=".js-confirm-client-paid-modal"
                                        data-toggle="modal">Подтвердить</button>
                            </div>
                        @endif
                    </td>
                    <td class="finance-history-col">85557</td>
                </tr>
                <tr>
                    <td class="finance-time-col text-left" scope="row">11.02.2018 13:00:00</td>
                    <td class="finance-operation-col">Пополнение</td>
                    <td class="finance-info-col">Емельянов Виктор</td>
                    <td class="finance-sum-col">
                        @if ($role=='client')
                            +-2.00
                        @endif
                        @if ($role=='staff' or $role=='lidogenerator')
                            <div class="finance-sum-wrapper">
                                <span class="mr-1 mb-1">+-2.00</span>
                                <button class="btn page-button paid-bill-button" type="button" href=".js-confirm-client-unpaid-modal"
                                        data-toggle="modal">Отменить</button>
                            </div>
                        @endif
                    </td>
                    <td class="finance-history-col">85557</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.03.2018 13:00:00</td>
                    <td>Списание</td>
                    <td>Целевая заявка №26061</td>
                    <td>-100.00</td>
                    <td>7777</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.04.2018 13:00:00</td>
                    <td>Списание</td>
                    <td>Возврат средств за дубль заявки №24697</td>
                    <td>+100.00</td>
                    <td>55</td>
                </tr>
                <tr>
                    <td class="finance-time-col text-left" scope="row">11.05.2018 13:00:00</td>
                    <td class="finance-operation-col">Пополнение</td>
                    <td class="finance-info-col">Емельянов Виктор</td>
                    <td class="finance-sum-col">@if ($role=='client')
                            +-2.00
                        @endif
                        @if ($role=='staff' or $role=='lidogenerator')
                            <div class="finance-sum-wrapper">
                                <span  class="mr-1 mb-1">+-2.00</span>
                                <button class="btn page-button paid-bill-button" type="button" href=".js-confirm-client-unpaid-modal"
                                        data-toggle="modal">Отменить</button>
                            </div>
                        @endif
                    </td>
                    <td class="finance-history-col">85557</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.06.2018 13:00:00</td>
                    <td>Списание</td>
                    <td>Целевая заявка №26061</td>
                    <td>-100.00</td>
                    <td>7777</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.07.2018 13:00:00</td>
                    <td>Списание</td>
                    <td>Возврат средств за дубль заявки №24697</td>
                    <td>+100.00</td>
                    <td>55</td>
                </tr>
                <tr>
                    <td class="finance-time-col text-left" scope="row">11.08.2018 13:00:00</td>
                    <td class="finance-operation-col">Пополнение</td>
                    <td class="finance-info-col">Емельянов Виктор</td>
                    <td class="finance-sum-col">@if ($role=='client')
                            +-2.00
                        @endif
                        @if ($role=='staff' or $role=='lidogenerator')
                            <div class="finance-sum-wrapper">
                                <span class="mr-1 mb-1">+-300</span>
                                <button class="btn page-button paid-bill-button" type="button" href=".js-confirm-client-unpaid-modal"
                                        data-toggle="modal">Отменить</button>
                            </div>
                        @endif
                    </td>
                    <td class="finance-history-col">85557</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.09.2018 13:00:00</td>
                    <td>Списание</td>
                    @if ($role=='staff' or $role=='client')
                    <td>Целевая заявка №11111</td>
                    @endif
                    @if ($role=='lidogenerator')
                        <td>Целевая заявка <a class="btn-link" href="{{ route('work.orders') }}" aria-label="Ссылка на
                        страницу заявки">№ 11111</a>. Цена 100 рублей.<br> Название компании.<br> Название источника заявок</td>
                    @endif
                    <td>-100.00</td>
                    <td>7777</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.10.2018 13:00:00</td>
                    <td>Списание</td>
                    <td>Возврат средств за дубль заявки №24697</td>
                    <td>+100.00</td>
                    <td>55</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.11.2018 13:00:00</td>
                    <td>Списание</td>
                    <td>Возврат средств за дубль заявки №24697</td>
                    <td>+100.00</td>
                    <td>55</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.12.2018 13:00:00</td>
                    <td>Списание</td>
                    @if ($role=='staff' or $role=='client')
                    <td>Целевая заявка №26061</td>
                    @endif
                    @if ($role=='lidogenerator')
                        <td>Целевая заявка <a class="btn-link" href="{{ route('work.orders') }}" aria-label="Ссылка на
                        страницу заявки">№ 26061</a>. Цена 100 рублей.<br>Название компании.<br> Название источника заявок</td>
                    @endif
                    <td>-100.00</td>
                    <td>7777</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.01.2019 13:00:00</td>
                    <td>Списание</td>
                    <td>Возврат средств за дубль заявки №24697</td>
                    <td>+100.00</td>
                    <td>55</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.01.2020 13:00:00</td>
                    <td>Списание</td>
                    <td>Целевая заявка №26061</td>
                    <td>-100.00</td>
                    <td>7777</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.02.2020 13:00:00</td>
                    <td>Списание</td>
                    <td>Возврат средств за дубль заявки №24697</td>
                    <td>+100.00</td>
                    <td>55</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.03.2020 13:00:00</td>
                    <td>Списание</td>
                    <td>Целевая заявка №26061</td>
                    <td>-100.00</td>
                    <td>7777</td>
                </tr>
                <tr>
                    <td class="text-left" scope="row">11.04.2020 13:00:00</td>
                    <td>Списание</td>
                    <td>Возврат средств за дубль заявки №24697</td>
                    <td>+100.00</td>
                    <td>55</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
