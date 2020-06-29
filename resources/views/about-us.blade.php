@extends('layouts.custom')

@section('title', 'Отделка квартир под ключ в Томске. Ремонт квартир Томск')
@section('description', 'Все виды отделочных работ, ремонт квартир в Томске под ключ. Тел: 89528052426')
@section('keywords', 'отделка квартир, ремонт квартир, ремонт квартиры под ключ, томск')
@section('canonical', 'https://prorab70.ru/remont-kvartir')
@section('og:title', 'Отделка квартир под ключ в Томске. Ремонт квартир Томск')
@section('og:description', 'Все виды отделочных работ, ремонт квартир в Томске под ключ. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/remont-kvartir')
@section('twitter:title', 'Отделка квартир под ключ в Томске. Ремонт квартир Томск')
@section('twitter:description', 'Все виды отделочных работ, ремонт квартир в Томске под ключ. Тел: 89528052426')


@section('content')



    @component('components.breadcrumb')
        @slot('title') О компании @endslot


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') О компании @endslot
        @slot('img') {{ URL::asset('images/bg-breadcrumbs.jpg') }} @endslot
    @endcomponent




    <div class="error">
        <div class="container">
            <div class="error__inner">
                <h1 class="error__title">Страница находится в разработке, зайдите позже!</h1>


            </div>
        </div>
    </div>





@endsection

