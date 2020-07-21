<div>
    <a class="directory-button @if($step=='workspace') active @endif" href="{{ route('settings.workspace') }}">
        1. Рабочая область</a>
    <a class="directory-button @if($step=='orders-source') active @endif"
       href="{{ route('settings.orders-source') }}">2. Источник заявок</a>
    <a class="directory-button @if($step=='ad') active @endif" href="{{ route('settings.ad-yandex') }}">3. Реклама</a>
    <a class="directory-button @if($step==4) active @endif" href="#">4. Интеграция CRM</a>
</div>

