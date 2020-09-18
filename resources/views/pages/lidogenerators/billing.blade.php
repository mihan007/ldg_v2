@extends('layouts.app')
@section('content')
    <main class="page-wrapper position-relative">
        <h1 class="sr-only">Страница баланса Лидогенератора</h1>
        <div class="row">
            <h2 class="sr-only">Блок навигации по странице и управления настройками страницы</h2>
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper border-bottom font-weight-bold">
                @include('includes.lidogenerator-balance-links', ['step'=>'billing'])
            </div>
        </div>
        <div class="row pt-2">
            <h2 class="sr-only">Блок настроек Лидогенератора</h2>
            <div class="col-md-9 d-flex justify-content-between">
                <p>
                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                   data-toggle="click-tooltip" data-placement="top" data-title="Система спишет комиссию от
                       стоимости проданной заявки. Если произойдет возврат средств за заявку вашему клиенту, система
                       вернет комиссию на ваш баланс и укажет это в финансах"></i>
                    <span class="font-weight-bolder mr-2">Тариф:</span> 10%
                </p>
                <p>
                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                       data-toggle="click-tooltip" data-placement="top" data-title="Минимальная комиссия за проданную
                           заявку не может быть менее указанной суммы"></i>
                    <span class="font-weight-bolder">Минимальная комиссия:</span> 10
                    <i class="fa fa-rub" aria-hidden="true"></i>
                </p>
                <p>
                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                       data-toggle="click-tooltip" data-placement="top" data-title="Это максимальный период модерации
                       заявок для вашего клиента. В течение этого периода система вернет комиссию на баланс, если ваш
                       клиент сделает заявку нецелевой"></i>
                    <span class="font-weight-bolder">Период согласования заявок:</span> 14 дней
                </p>
                <p>
                    <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                       data-toggle="click-tooltip" data-placement="top" data-title="Период для бесплатного доступа ко
                       всем функциям. При завершении начинает действовать тарифный план"></i>
                    <span class="font-weight-bolder">Бесплатный период:</span> 30 дней
                </p>
            </div>
        </div>
        <div class="row pt-md-3">
            <div class="col-md-4">
                <form class="balance-action lidogenerator-balance-form" method="post" action="#" novalidate>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="balance-radio" id="lidogenerator-bankcard" checked>
                            <label class="custom-control-label" for="lidogenerator-bankcard">Банковская карта</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" class="custom-control-input" name="balance-radio" id="lidogenerator-yandex-modal">
                            <label class="custom-control-label" for="lidogenerator-yandex-modal">Яндекс Деньги</label>
                        </div>
                        <div class="custom-control custom-radio mt-2">
                            <input type="radio" class="custom-control-input" name="balance-radio" id="lidogenerator-bill" >
                            <label class="custom-control-label" for="lidogenerator-bill">Выставить счет</label>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label class="sr-only" for="input-sum-client-balance">Сумма</label>
                        <div class="input-group">
                            <input class="form-control" type="number" min="0" id="input-sum-client-balance"
                                   placeholder="Сумма" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-rub" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                        <div class="invalid-feedback client-sum-invalid-feedback">Сообщение об ошибке</div>
                    </div>
                    <div class="form-group ">
                        <button class="btn btn-primary w-100" type="submit">Пополнить</button>
                    </div>
                </form>
            </div>
        <div class="col-md-8 billing-image-wrapper">
{{--            <img class="" src="../img/billing-image.png" width="300" height="315" alt="">--}}
        </div>
        </div>
    </main>
@stop
