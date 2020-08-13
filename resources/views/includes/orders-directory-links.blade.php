<div class="col-md-12 offset-block">
</div>
<div class="col-md-12 settings-wrapper directory-buttons">
    <div>
        <a class="directory-button @if($step=='crm') active @endif" href="{{ route('work.orders') }}">CRM</a>
        <a class="directory-button @if($step=='finance') active @endif" href="{{ route('work.finance') }}">Финансы</a>
    </div>
{{--    <div class="orders-count-wrapper-2 text-center">--}}
{{--        <ul class="list-inline mb-0 d-flex justify-content-between">--}}
{{--            <li class="list-inline-item bg-success text-white rounded targeted-orders-count"--}}
{{--                data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'--}}
{{--                title="Целевые заявки">--}}
{{--                <p class="font-weight-bold mb-0 d-block">2415</p>--}}
{{--            </li>--}}
{{--            <li class="list-inline-item bg-danger text-white rounded inappropriate-orders-count"--}}
{{--                data-toggle="tooltip" data-placement="top" data-delay='{"show":"1000", "hide":"1000"}'--}}
{{--                title="Нецелевые заявки">--}}
{{--                <p class="font-weight-bold mb-0 d-block">8477</p>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </div>--}}
    <div>
{{--        <a class="btn page-button mr-4" href="#">Excel <i class="fa fa-file-excel-o" aria-hidden="true"></i>--}}
{{--                    </a>--}}
{{--        <a class="balance-info bill-button mr-4" data-toggle="modal" href=".js-bill-modal" role="button" >--}}
{{--            Выставить счет--}}
{{--        </a>--}}
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
