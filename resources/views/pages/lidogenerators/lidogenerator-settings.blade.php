@extends('layouts.app')
@section('content')
    <main class="page-wrapper position-relative">
        <h1 class="sr-only">Страница настроек Лидогенератора</h1>
        <div class="row">
            <h2 class="sr-only">Блок навигации по страницам настроек и управления настройками страницы</h2>
            <div class="col-md-12 offset-block"></div>
            <div class="col-md-12 settings-wrapper border-bottom font-weight-bold">
                @include('includes.lidogenerator-links', ['step'=>'lidogenerator-workspace'])
                <a class="btn btn-primary wizard-button" href="{{ route('companies.report') }}">Войти</a>
            </div>
        </div>
        <div class="row">
            <h2 class="sr-only">Блок настроек Лидогенератора</h2>
            <div class="col-md-12">
                <form class="lidogenerator-form" method="post" action="#">
                    <div class="lidogenerator-form-column">
                        <div class="form-group">
                            <label class="workspace-form-label" for="lidogenerator-active-switch">
                                Активность
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top"
                                   data-title="Включает/выключает аккаунт лидогенератора"></i>
                            </label>
                            <div class="custom-control custom-switch mt-2">
                                <input class="custom-control-input custom-control-input-success" id="lidogenerator-active-switch"
                                       type="checkbox" checked>
                                <label class="custom-control-label" for="lidogenerator-active-switch"
                                       aria-label="Активность включена/выключена"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="workspace-form-label" for="lidogenerator-moderation-period">
                                Максимальный период модерации
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top" data-title="Количество дней, в
                                   течение которых клиент может изменить статус заявки"></i>
                            </label>
                            <input class="form-control" type="number" id="lidogenerator-moderation-period"
                                   placeholder="14" min="1" max="45">
                            <div class="invalid-feedback lidogenerator-moderation-invalid-feedback">Сообщение об ошибке
                            </div>
                        </div>
                    </div>
                    <div class="lidogenerator-form-column">
                        <div class="form-group">
                            <label class="workspace-form-label" for="lidogenerator-admin-email">Почта аккаунта
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top"
                                   data-title="Почта администратора аккаунта"></i>
                            </label>
                            <input class="form-control" type="email" id="lidogenerator-admin-email"
                                   placeholder="Ivanov@gmail.ru">
                            <div class="invalid-feedback lidogenerator-admin-invalid-feedback">Сообщение об ошибке</div>
                        </div>
                        <div class="form-group">
                            <label class="workspace-form-label" for="lidogenerator-min-profit">Минимальный заработок
                                с целевой заявки
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top"
                                   data-title="Система спишет эту стоимость, если фактическая цена заработка будет меньше
                                   указанной суммы"></i>
                            </label>
                            <div class="input-group">
                                <input class="form-control" type="number" id="lidogenerator-min-profit" min="0"
                                       max="100000" placeholder="10">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-rub" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="invalid-feedback lidogenerator-min-profit-invalid-feedback">Сообщение об ошибке
                            </div>
                        </div>
                    </div>
                    <div class="lidogenerator-form-column">
                        <div class="form-group">
                            <label class="workspace-form-label" for="profit-percent">Процент заработка
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top"
                                   data-title="Заработок от выручки лидогенератора в процентах"></i>
                            </label>
                            <div class="input-group">
                                <input class="form-control" type="number" id="profit-percent" min="0"
                                       max="100000" placeholder="10">
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa fa-percent" aria-hidden="true"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="invalid-feedback profit-percent-invalid-feedback">Сообщение об ошибке</div>
                        </div>
                        <div class="form-group">
                            <label class="workspace-form-label" for="free-period">Бесплатный период
                                <i class="fa fa-question-circle-o" aria-hidden="true" data-trigger="manual"
                                   data-toggle="click-tooltip" data-placement="top"
                                   data-title="Количество бесплатных дней пользования сервисом"></i>
                            </label>
                            <input class="form-control workspace-email-input" type="number" id="free-period"
                                   placeholder="30">
                            <div class="invalid-feedback free-period-invalid-feedback">Сообщение об ошибке</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="toast saved-toast js-saved-toast">
            <div class="toast-body">
                <div>Данные сохранены</div>
            </div>
        </div>
        @include('includes.modal.workspace-save-modal')
        @include('includes.modal.reset-modal', [
            'messageHeader' => 'Удаление доступа и рассылок',
            'messageBody' => 'Вы действительно хотите удалить доступ к проекту?'
        ])
    </main>
    <footer class="page-footer footer-hide bg-grey fixed-bottom">
        <div class="container">
            <div class="text-center py-2 d-flex justify-content-center align-items-center">
                <h5 class="mb-1 unsaved-text mr-3">На странице есть несохраненные изменения</h5>
                <button class="btn btn-primary show-save-toast footer-save-button" type="submit">Сохранить
                </button>
            </div>
        </div>
    </footer>
@stop
