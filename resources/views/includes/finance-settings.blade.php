<div class="col-md-12 filter-wrapper">
    <div class="finance-filter">
            <select class="custom-select select-item finance-select-item">
                <option selected>Операции</option>
                <option value="1">Пополнения</option>
                <option value="2">Списания</option>
                <option value="3">Возврат</option>
                <option value="4">Не оплачено</option>
                <option value="5">Выставлен к оплате</option>
            </select>
            <select class="custom-select select-item finance-select-item">
                <option selected>Источник</option>
                <option value="1">Банковская карта</option>
                <option value="2">Яндекс Деньги</option>
                <option value="3">Расчетный счет</option>
                <option value="4">Пополнение вручную</option>
            </select>
        @include('includes.date-range')
    </div>
    <div class="finance-buttons">
        @include('includes.finance-info')
        @if ($role=='lidogenerator')
            <a href=".js-bill-modal" role="button" class="btn page-button bill-button" data-toggle="modal">
               Выставить счет
            </a>
        @endif
</div>
@include('includes.search-form')
</div>
<!-- Алерт об ошибке финансовой системы -->
<div class="col-md-6 text-center mx-auto balance-alert-wrapper">
<div class="alert alert-primary finance-balance-alert w-auto" role="alert">
Тут будет уведомление об ошибке работы финансовой подсистемы
<button class="close balance-alert-close" type="button" data-dismiss="alert">&times;</button>
</div>
</div>

