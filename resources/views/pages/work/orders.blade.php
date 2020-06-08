@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        <div class="row">
            <div class="col-md-12 offset-block">
            </div>
            <div class="col-md-12 settings-wrapper directory-buttons">
                <div class="col-md-2 text-uppercase">
                    <a>Crm</a>
                    <a>Финансы</a>
                </div>
                <div class="col-md-2">
                    <p class="">Баланс 2000 p</p>
                </div>
            </div>
            <div class="col-md-12">
                <div>
                    <select class="custom-select index-select ">
                        <option selected>Все заявки</option>
                        <option value="1">Целевые заявки</option>
                        <option value="2">Нецелевые заявки</option>
                        <option value="3">На модерации</option>
                    </select>

                    <div id="reportrange" class=" date-range text-center mb-1" tabindex="0">
                        <i class="fa fa-calendar"></i>&nbsp;
                        <span></span> <i class="fa fa-caret-down"></i>
                    </div>
                </div>

                <div>
                    <button type="button" class="btn btn-light show-toast">Описание заявки</button>
                    <div class="toast crm-button" id="myToast">
                        <div class="toast-header">
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">
                            </button>
                        </div>
                        <div class="toast-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Semper viverra nam libero justo laoreet sit
                                amet. Id aliquet lectus proin nibh nisl condimentum. Aliquam sem fringilla ut morbi
                                tincidunt augue interdum. Integer vitae justo eget magna fermentum iaculis eu.</p>
                            <p>Максимальный срок согласования заявки 7 дней</p>
                        </div>
                    </div>

                    <a >CRM клиента</a>

                    <form class="search-form col-md-2">
                        <div class="input-group">
                            <input type="text" class="form-control search-form-input" placeholder="Поиск">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-secondary button-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>










            <div class="col-md-12 table-wrapper" id="header"></div>
        </div>
    </main>
@stop
