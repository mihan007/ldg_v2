<div>
    <a class="directory-button @if($step=='users') active @endif" href="{{ route('accounts.users-accounts') }}">
        1. Пользователи</a>
    <a class="directory-button @if($step=='project') active @endif"
       href="{{ route('accounts.project') }}">2. Проект</a>
    <a class="directory-button @if($step=='payments') active @endif" href="{{ route('accounts.get-payments') }}">3. Прием платежей</a>
    <a class="directory-button @if($step=='timezone') active @endif" href="{{ route('accounts.timezone') }}">
        4. Часовой пояс</a>
</div>

