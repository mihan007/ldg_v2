@extends('layouts.app')
@section('content')
    <main class="page-wrapper position-relative">
        <h1 class="sr-only">Настройки аккаунтов.Пользователи.</h1>
                <div class="row sticky-top bg-white">
                    <div class="col-md-12 offset-block"></div>
                    <div class="col-md-12 settings-wrapper font-weight-bold border-bottom">
                        <h2 class="sr-only">Блок навигации по страницам настроек аккаунтов и управления настройками</h2>
                        @include('includes.account-settings-links', ['step'=>'timezone'])
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 settings-wrapper">
                        <h2 class="company-title font-weight-bold">Часовой пояс клиента</h2>
                    </div>
                    <div class="col-md-12 mx-auto timezone-select-wrapper">
                        <select class="js-timezone-select w-75" name="timezone">
                            <option value="1">Часовая зона МСК−1 (калининградское время) MSK-1 (UTC+2)</option>
                            <option value="2">Часовая зона МСК (московское время) MSK (UTC+3)</option>
                            <option value="3">Часовая зона МСК+1 (самарское время) MSK+1 (UTC+4)</option>
                            <option value="4">Часовая зона МСК+2 (екатеринбургское время) MSK+2 (UTC+5)</option>
                            <option value="5">Часовая зона МСК+3 (омское время)	MSK+3 (UTC+6)</option>
                            <option value="6">Часовая зона МСК+4 (красноярское время)	MSK+4 (UTC+7)</option>
                            <option value="7">Часовая зона МСК+5 (иркутское время)	MSK+5 (UTC+8)</option>
                            <option value="7">Часовая зона МСК+6 (якутское время)	MSK+6 (UTC+9)</option>
                            <option value="7">Часовая зона МСК+7 (владивостокское время)	MSK+7 (UTC+10)</option>
                            <option value="7">Часовая зона МСК+8 (магаданское время)	MSK+8 (UTC+11)</option>
                            <option value="8">Часовой зона МСК+9 (камчатское время)	MSK+9 (UTC+12)</option>
                        </select>
                    </div>
                </div>
        <div class="toast saved-toast js-saved-toast">
            <div class="toast-body">
                <div>Данные сохранены</div>
            </div>
        </div>
        @include('includes.workspace-save-modal')
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
