<div class="row">
    <div class="col-md-12 offset-block">
    </div>
    <div class="col-md-12 settings-wrapper border-bottom font-weight-bold">
        <div>
            <a class="directory-button @if($step=='workspace') active @endif" href="{{ route('settings.workspace') }}">1. Рабочая область</a>
            <a class="directory-button @if($step==2) active @endif" href="#">2. Источник заявок</a>
            <a class="directory-button @if($step==3) active @endif" href="#">3. Реклама</a>
            <a class="directory-button @if($step==4) active @endif" href="#">4. Интеграция CRM</a>
        </div>
        <div>
            <select class="custom-select settings-select-item">
                <option selected>Менеджер</option>
                <option value="1">Айгуль Шайкенова</option>
                <option value="2">Имя 2</option>
                <option value="3">Имя 3</option>
                <option value="4">Имя 4</option>
                <option value="5">Имя 5</option>
                <option value="6">Имя 6</option>
            </select>
        </div>
    </div>
</div>
