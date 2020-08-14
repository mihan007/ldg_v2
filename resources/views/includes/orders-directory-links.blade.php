<div class="col-md-12 offset-block">
</div>
<div class="col-md-12 settings-wrapper directory-buttons">
    <div>
        <a class="directory-button @if($step=='crm') active @endif" href="{{ route('work.orders') }}">CRM</a>
        <a class="directory-button @if($step=='finance') active @endif" href="{{ route('work.finance') }}">Финансы</a>
    </div>
    <div>
        @if ($role=='staff')
            <a class="balance-info" href=".js-balance-modal" role="button" data-toggle="modal">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
                Баланс 2000
                <i class="fa fa-rub" aria-hidden="true"></i>
            </a>
        @endif
        @if ($role=='client')
            <a class="balance-info" href=".js-balance-client-modal" role="button" data-toggle="modal">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
                Баланс 2000
                <i class="fa fa-rub" aria-hidden="true"></i>
            </a>
        @endif
    </div>
</div>
