<div>
    <a class="directory-button @if($step=='profile') active @endif" href="{{ route('users.users-profile') }}">
        Мой профиль</a>
    <a class="directory-button @if($step=='password') active @endif"
       href="#">Пароль</a>
</div>
