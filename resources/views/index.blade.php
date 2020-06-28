@extends('layouts.custom')

@section('title', 'Ремонт квартир, офисов, отделка помещений под ключ в Томске')
@section('description', 'Заказать ремонт или отделку помещения под ключ в Томске, от квартиры до офиса. Тел: 89528052426')
@section('keywords', '')
@section('canonical', 'https://prorab70.ru/')
@section('og:title', 'Ремонт квартир, офисов, отделка помещений под ключ в Томске')
@section('og:description', 'Заказать ремонт или отделку помещения под ключ в Томске, от квартиры до офиса. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/')
@section('twitter:title', 'Ремонт квартир, офисов, отделка помещений под ключ в Томске')
@section('twitter:description', 'Заказать ремонт или отделку помещения под ключ в Томске, от квартиры до офиса. Тел: 89528052426')


@section('content')

    @component('components.owl')

    @endcomponent

    <div class="offer">
        <div class="container">
            <div class="offer__inner">

                <div class="title-wrapper">
                    <h2 class="title">Наши услуги</h2>
                </div>


                <div class="offer__row">

                    <a href="{{ url('/remont-kvartir') }}" class="offer__item offer__item--one">
                        <img src="{{ URL::asset('images/offer/1.jpg') }}" alt="ремонт квартир" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Отделка квартир</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="#" class="offer__item offer__item--two">
                        <img src="{{ URL::asset('images/offer/2.jpg') }}" alt="Отделка балконов" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Отделка балконов</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="#" class="offer__item offer__item--tree">
                        <img src="{{ URL::asset('images/offer/3.jpg') }}" alt="Отделка стен" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Отделка стен</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="#" class="offer__item offer__item--for">
                        <img src="{{ URL::asset('images/offer/4.jpg') }}" alt="Отделка потолков" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Отделка потолков</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="#" class="offer__item offer__item--five">
                        <img src="{{ URL::asset('images/offer/5.jpg') }}" alt="Отделка полов" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Отделка полов</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="#" class="offer__item offer__item--six">
                        <img src="{{ URL::asset('images/offer/6.jpg') }}" alt="Отделка санузлов" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Отделка санузлов</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                    <a href="#" class="offer__item offer__item--seven">
                        <img src="{{ URL::asset('images/offer/7.jpg') }}" alt="Ремонт офисов" class="offer__img">

                        <div class="offer__text-block">
                            <p class="offer__text">Отделка офисов</p>

                            <div class="offer__box-arrow">

                            </div>

                        </div>

                    </a>

                </div>



            </div>
        </div>
    </div>

    <div class="capture">
        <div class="container">
            <div class="capture__inner">
                <h2 class="capture__title">Оставьте заявку на бесплатный замер</h2>
                <p class="capture__text">
                    Оставьте свои контактные данные и мы свяжемся с Вами в кратчайшие сроки для расчета стоимости ремонта и составления подробной сметы.

                </p>

                <a href="#" class="capture__btn btn btn__dark show_popup">Оставить заявку</a>
            </div>
        </div>


        <img src="{{ URL::asset('images/bg-1.jpg') }}" alt="ремонт квартир томск" class="capture__img">
    </div>


    @component('components.how')
        @slot('title')

            <div class="title-wrapper">
                <h2 class="title">Как мы работаем</h2>
            </div>


        @endslot
    @endcomponent

    <div class="optimize">
        <div class="container">
            <div class="optimize__inner">
                <h2 class="title-2">Прораб70 Томск</h2>

                <p class="optimize__text">Мы занимаемся ремонтом уже более 15 лет и отремонтировали множество объектов в г.Томске. Все в нашей компании прошли путь от рядового отделочника
                    до прорабов и руководителей. Мы считаем это основным преимуществом нашей компании, потому что знаем как это - работать руками.

                </p>
                <p class="optimize__text">
                    Компания "Прораб70" была организована по причине недовольства работой руководящего звена во всех компаниях, в которых мы работали и с которыми сотрудничали
                    раньше. Видя все недостатки, мы решили сделать такую организацию, которая будет работать на клиента и учитывать все тонкости проведения ремонтных работ.

                </p>
                <p class="optimize__text">
                    Мы организуем ремонт квартир так, будто делаем это для себя, качественно и быстро, укладываясь в срок и соответствуя всем Вашим требованиям.
                    Отвечая на вопрос "Почему нужно выбрать именно Прораб70?", можем сказать:


                </p>

                <ul class="optimize__list">
                    <li class="optimize__item">Мы прошли путь от простого рабочего до прораба</li>
                    <li class="optimize__item">Мы знаем <b>КАК</b> нужно делать ремонт</li>
                    <li class="optimize__item">Опыт более 15 лет работы в отделке помещений</li>
                    <li class="optimize__item">Только опытные специалисты с большим стажем</li>


                </ul>



                <h3 class="optimize__title">Новое слово в ремонте квартир - Прораб70</h3>
                <p class="optimize__text">
                    Выбирая среди множества компаний на рынке, отдайте предпочтение тем, кто смыслит в ремонте и знает все тонкости отделки квартир. Большие и многочисленные
                    организации часто завышают цену, ведь им нужно арендовать офис, платить множеству людей, в том числе управляющему звену, которое чаще всего
                    не держало даже шпателя в своих руках.
                </p>
                <p class="optimize__text">
                    Мы работаем удаленно и выезжаем на объекты своих клиентов самостоятельно, тем самым экономим Ваши средства. Ведь в стоимость ремонта не заложены никакие расходы,
                    как у большинства больших организаций.

                </p>

                <div class="optimize__wrap">

                    <img class="optimize__img" src="{{ URL::asset('images/1.jpg') }}" alt="Отделка квартир в Томске">
                    <img class="optimize__img" src="{{ URL::asset('images/1.jpg') }}" alt="Отделка квартир в Томске">

                </div>
                <div class="optimize__btn">
                    <button class="btn btn__accent show_popup">Оставить заявку</button>
                </div>


            </div>
        </div>
    </div>


    <div class="review">
        <div class="container">
            <div class="review__inner">
                <div class="title-wrapper">
                    <h2 class="title">Отзывы</h2>
                </div>

                    <div class="review__wrap">

                        <div class="review__card">
                            <div class="review__front">

                                <div class="review__card-wrapper">

                                    <h3 class="review__card-title">Lorem ipsum dolor sit.</h3>

                                </div>
                                <p class="review__text">Nunquam captis finis. Ratione ires, tanquam altus spatii.
                                    Nocere una ducunt ad magnum clabulare. Superbus medicina recte gratias demissio est.
                                    Caniss peregrinatione, tanquam bassus cotta. Capios crescere in sala! Est regius omnia,
                                    cesaris. Indictio peregrinationess, tanquam salvus solem.</p>
                                <div class="review__card-client">
                                    <p class="review__name">Lorem ipsum dolor</p>
                                    <p class="review__status">Клиент</p>
                                </div>


                            </div>
                            <div class="review__back">

                                <img class="review__img" src="{{ URL::asset('images/card/1.jpg') }}" alt="">

                            </div>
                        </div>

                        <div class="review__card">
                            <div class="review__front">

                                <div class="review__card-wrapper">

                                    <h3 class="review__card-title">Lorem ipsum dolor sit.</h3>

                                </div>
                                <p class="review__text">Nunquam captis finis. Ratione ires, tanquam altus spatii.
                                    Nocere una ducunt ad magnum clabulare. Superbus medicina recte gratias demissio est.
                                    Caniss peregrinatione, tanquam bassus cotta. Capios crescere in sala! Est regius omnia,
                                    cesaris. Indictio peregrinationess, tanquam salvus solem.</p>
                                <div class="review__card-client">
                                    <p class="review__name">Lorem ipsum dolor</p>
                                    <p class="review__status">Клиент</p>
                                </div>


                            </div>
                            <div class="review__back">

                                <img class="review__img" src="{{ URL::asset('images/card/1.jpg') }}" alt="">

                            </div>
                        </div>

                        <div class="review__card">
                            <div class="review__front">

                                <div class="review__card-wrapper">

                                    <h3 class="review__card-title">Lorem ipsum dolor sit.</h3>

                                </div>
                                <p class="review__text">Nunquam captis finis. Ratione ires, tanquam altus spatii.
                                    Nocere una ducunt ad magnum clabulare. Superbus medicina recte gratias demissio est.
                                    Caniss peregrinatione, tanquam bassus cotta. Capios crescere in sala! Est regius omnia,
                                    cesaris. Indictio peregrinationess, tanquam salvus solem.</p>
                                <div class="review__card-client">
                                    <p class="review__name">Lorem ipsum dolor</p>
                                    <p class="review__status">Клиент</p>
                                </div>


                            </div>
                            <div class="review__back">

                                <img class="review__img" src="{{ URL::asset('images/card/1.jpg') }}" alt="">

                            </div>
                        </div>




                    </div>



                </div>
            </div>
        </div>
    </div>




@endsection