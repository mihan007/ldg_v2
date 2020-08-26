@extends('layouts.app')
@section('content')
    <main class="page-wrapper">
        @include('includes.finance-settings')
        @include('includes.finance-table', ['role'=>'lidogenerator'])
    </main>
@stop
