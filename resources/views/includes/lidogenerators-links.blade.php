<div>
    <a class="directory-button @if($step=='lidogenerator-workspace') active @endif"
       href="{{ route('lidogenerators.lidogenerator-settings') }}">Рабочая область</a>
    <a class="directory-button @if($step=='lidogenerator-finance') active @endif"
       href="{{ route('lidogenerators.lidogenerator-finance') }}">Финансы</a>
</div>
