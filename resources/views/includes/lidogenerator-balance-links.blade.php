<div>
    <a class="directory-button @if($step=='billing') active @endif"
       href="{{ route('lidogenerators.billing') }}">Биллинг</a>
    <a class="directory-button @if($step=='billing-finance') active @endif"
       href="{{ route('lidogenerators.finance-billing') }}">Финансы</a>
</div>
