<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/site.css?').date('l jS \of F Y h:i:s A') }}">

    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">


    <script src="https://kit.fontawesome.com/0af96d350a.js" crossorigin="anonymous"></script>

    <title></title>
    <meta name="description" content=""/>
    <meta name="keywords" content="" />
    <link rel="canonical" href=""/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta name="theme-color" content="#ff6801">
    <meta property="og:site_name" content="beton70.com" />
    <meta property="og:image" content="" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:description" content="" />

</head>
<body>


@component('components.header')
    @slot('header') header--pages @endslot

@endcomponent



    @component('components.breadcrumb')
        @slot('title') Ремонт квартир @endslot


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Страница в разработке @endslot
    @endcomponent




@component('components.footer')

@endcomponent

@component('components.schema')

@endcomponent


<style src="{{ URL::asset('js/app.js') }}"></style>
<script src="{{ URL::asset('js/site.js') }} "></script>


</body>
</html>
