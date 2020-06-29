@extends('layouts.custom')

@section('title', 'Контакты компании Прораб70')
@section('description', 'Как с нами связаться. Тел: 89528052426')
@section('keywords', '')
@section('canonical', 'https://prorab70.ru/kontakty')
@section('og:title', 'Контакты компании Прораб70')
@section('og:description', 'Как с нами связаться. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/kontakty')
@section('twitter:title', 'Контакты компании Прораб70')
@section('twitter:description', 'Как с нами связаться. Тел: 89528052426')


@section('content')



    @component('components.breadcrumb')
        @slot('title') Контакты @endslot


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Контакты @endslot
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

