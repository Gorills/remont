@extends('layouts.custom')


@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', '')
@section('twitter:title', '')

@section('content')




    @component('components.breadcrumb')
        @slot('title') Ремонт квартир @endslot


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Страница в разработке @endslot
    @endcomponent



<div class="error">
    <div class="container">
        <div class="error__inner">
            <h1 class="error__title">Страница находится в разработке, зайдите позже!</h1>


        </div>
    </div>
</div>


    

@endsection
