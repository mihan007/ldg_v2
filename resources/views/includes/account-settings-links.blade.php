<div>
    <a class="directory-button @if($step=='users') active @endif" href="{{ route('accounts.users-accounts') }}">
        Пользователи</a>
    <a class="directory-button @if($step=='project') active @endif"
       href="{{ route('accounts.project') }}">Ниша</a>
    <a class="directory-button @if($step=='payments') active @endif" href="{{ route('accounts.get-payments') }}">Прием платежей</a>
    <a class="directory-button @if($step=='timezone') active @endif" href="{{ route('accounts.timezone') }}">
        Часовой пояс</a>
</div>

