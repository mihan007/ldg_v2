<header class="container-fluid bg-grey company-header fixed-top">
    <nav class="navbar navbar-expand navbar-dark bg-grey scrollmenu">
        <a href="#" class="navbar-brand magic-hide">
            <img class="align-top mr-2" src="/img/logo-index.png" height="30" alt="Лидогенератор">
        </a>
        <div class="navbar-nav">
            <div class="nav-item dropdown magic-menu">
                <a class="nav-link dropdown-toggle" href="#" onclick="return false;">Название аккаунта</a>
                <div class="dropdown-menu accounts-list">
                    <a class="dropdown-item disabled" href="#">Пункт 1</a>
                    <a class="dropdown-item" href="{{ route('users.login') }}">Страница входа</a>
                    <a class="dropdown-item" href="{{ route('users.reset-password') }}">Восстановление пароля</a>
                    <a class="dropdown-item" href="{{ route('users.reset-alert') }}">Оповещение о ссылке на
                        восстановление пароля</a>
                    <a class="dropdown-item" href="{{ route('users.new-password') }}">Ввод нового пароля</a>
                    <a class="dropdown-item" href="{{ route('users.new-password-login') }}">Оповещение об изменении
                        пароля
                        и страница входа</a>
                    <a class="dropdown-item" href="{{ route('users.old-password') }}">Переход по устаревшей ссылке</a>
                    <a class="dropdown-item" href="{{ route('users.new-info-alert') }}">О новой ссылке на почту</a>
                    <a class="dropdown-item" href="{{ route('users.error-login') }}">Переход по неверной ссылке</a>
                    <a class="dropdown-item" href="{{ route('companies.report') }}">Страница компаний</a>
                    <a class="dropdown-item" href="{{ route('work.orders') }}">Заявки</a>
                    <a class="dropdown-item" href="{{ route('work.finance') }}">Финансы</a>
                    <a class="dropdown-item" href="{{ route('companies.dashboard') }}">Дашборд</a>
                    <a class="dropdown-item" href="{{ route('settings.workspace') }}">Настройки рабочей области</a>
                    <a class="dropdown-item" href="{{ route('settings.workspace-invite') }}">Страница входа с доступом в
                        рабочую область</a>
                    <a class="dropdown-item" href="{{ route('settings.orders-source') }}">Страница настроек "Источник
                        заявок"</a>
                </div>
            </div>
        </div>
        <div class="navbar-nav login-wrapper ml-auto">
            <div class="nav-item dropdown magic-menu">
                <a class="nav-link dropdown-toggle" href="#" onclick="return false;">
                    <i class="fa fa-user-o mr-2" aria-hidden="true"></i>
                    <span>Виктор Емельянов</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item disabled">1@troiza.net</a>
                    <a class="dropdown-item" href="{{ route('users.users-profile') }}"><i class="fa fa-id-card-o"
                                                                                          aria-hidden="true"></i>Мой
                        профиль</a>
                    <a class="cog-link dropdown-item" href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i>Настройки аккаунта
                    </a>
                    <button class="dropdown-item"><i class="fa fa-sign-out" aria-hidden="true"></i>Выйти</button>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar-collapse magic-hide">
        <ul class="navbar-nav navbar-dark mr-auto sidenav text-center position-fixed">
            <li class="nav-item">
                <a class="nav-link sidenav-link active" href="{{ route('companies.report') }}" data-toggle="tooltip"
                   data-placement="right" title="Компании" aria-label="Главная страница">
                    <i class="fa fa-home sidenav-icon " aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidenav-link" href="{{ route('work.orders') }}" data-toggle="tooltip"
                   data-placement="right" title="Заявки" aria-label="Заявки">
                    <i class="fa fa-bars sidenav-icon" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item sidenav-link">
                <a class="nav-link" href="{{ route('settings.workspace') }}" data-toggle="tooltip"
                   data-placement="right"
                   title="Настройки" aria-label="Настройки">
                    <i class="fa fa-cog sidenav-icon" aria-hidden="true"></i>
                </a>
            </li>
            @if ($showSaveButton)
                <li class="nav-item sidenav-link save-button-item">
                    <button class="btn btn-primary save-result-button">Сохранить</button>
                </li>
            @endif
        </ul>
    </nav>
</header>
@include('includes.sidenav-save-modal')
