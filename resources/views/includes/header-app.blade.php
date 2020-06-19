<header class="container-fluid bg-grey company-header fixed-top">
    <nav class="navbar navbar-expand navbar-dark bg-grey scrollmenu">
        <a href="#" class="navbar-brand magic-hide">
            <img class="align-top mr-2" src="/img/logo-index.png" height="30" alt="Лидогенератор">
        </a>
        <div class="navbar-nav">
            <div class="nav-item dropdown magic-menu">
                <a href="#" onclick="return false;" class="nav-link dropdown-toggle">Название аккаунта</a>
                <div class="dropdown-menu accounts-list">
                    <a href="#" class="dropdown-item disabled">Пункт 1</a>
                    <a href="#12344" class="dropdown-item">Пункт 2</a>
                    <a href="#" class="dropdown-item">Пункт 3</a>
                    <a href="#" class="dropdown-item">Пункт 4</a>
                    <a href="#" class="dropdown-item">Пункт 5</a>
                    <a href="#" class="dropdown-item">Пункт 6</a>
                    <a href="#" class="dropdown-item">Пункт 7</a>
                    <a href="#" class="dropdown-item">Пункт 8</a>
                    <a href="#" class="dropdown-item">Пункт 9</a>
                    <a href="#" class="dropdown-item">Пункт 10</a>
                    <a href="#" class="dropdown-item">Пункт 11</a>
                    <a href="#" class="dropdown-item">Пункт 12</a>
                    <a href="#" class="dropdown-item">Пункт 13</a>
                    <a href="#" class="dropdown-item">Пункт 14</a>
                    <a href="#" class="dropdown-item">Пункт 15</a>
                </div>
            </div>
        </div>
        <div class="navbar-nav login-wrapper ml-auto">
            <div class="nav-item dropdown magic-menu">
                <a href="#" onclick="return false;" class="nav-link dropdown-toggle">
                    <i class="fa fa-user-o mr-2" aria-hidden="true"></i>
                    <span>Виктор Емельянов</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item disabled">1@troiza.net</a>
                    <a href="#" class="dropdown-item"><i class="fa fa-id-card-o" aria-hidden="true"></i>Мой профиль</a>
                    <a href="#" class="cog-link dropdown-item" alt="Настройки аккаунта">
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
                <a class="nav-link sidenav-link active" href="{{ route('companies.report') }}" data-toggle="tooltip" data-placement="right" title="Компании"
                   aria-label="Главная страница">
                    <i class="fa fa-home sidenav-icon " aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link sidenav-link" href="{{ route('work.orders') }}" data-toggle="tooltip" data-placement="right" title="Заявки"
                   aria-label="Заявки">
                    <i class="fa fa-bars sidenav-icon" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item sidenav-link">
                <a class="nav-link" href="#" data-toggle="tooltip" data-placement="right" title="Настройки"
                   aria-label="Настройки">
                    <i class="fa fa-cog sidenav-icon" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </nav>
</header>
