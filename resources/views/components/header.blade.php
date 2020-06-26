<div class="toggle-menu">
    <div class="toggle-section">
        <a href="#" class="menu-btn">
            <span></span>
        </a>
    </div>
</div>
<div class="header__closer"></div>



<header class="header {{ $header }}">

    <div class="header__top {{ $headertop ?? '' }}">
        <div class="container">
            <div class="header__contacts">
                <div class="header__contacts-icon">
                    <div class="header__contacts-wrap">
                        <i class="fas fa-phone"></i>
                        <a href="#" class="header__contacts-link">8 (952) 898 46-01</a>
                    </div>
                    <div class="header__contacts-wrap">
                        <i class="far fa-envelope"></i>
                        <a href="#" class="header__contacts-link">mail@mail.ru</a>
                    </div>
                </div>
                <a href="#" class="header__btn show_popup">Заказать звонок</a>
            </div>
        </div>
    </div>

    <div class="container">



        <div class="header__inner">
            <img src="{{ URL::asset('images/logo.png') }}" alt="" class="header__logo">
            <nav class="header__nav">
                <ul class="header__list">
                    <li class="header__item"><a href="{{ url('/') }}" class="header__link">Главная</a></li>

                    <li class="header__item header__item--dropdown" itemprop="itemListElement"><a href="#" class="header__link header__link-drop">Услуги</a><i class="header__icon fas fa-sort-down"></i></li>
                        <ul class="header__dropdown">
                            <li class="header__dropdown-item"><a href="{{ url('/pages') }}" class="header__dropdown-link">Ремонт квартир</a></li>
                            <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Ремонт Офисов</a></li>
{{--                            <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Отделка полов</a></li>--}}
{{--                            <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Отделка потолка</a></li>--}}
{{--                            <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Отделка стен</a></li>--}}
{{--                            <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Отделка балконов</a></li>--}}
{{--                            <li class="header__dropdown-item"><a href="#" class="header__dropdown-link">Отделка санузлов</a></li>--}}
                        </ul>
                    <li class="header__item"><a href="#" class="header__link">Портфолио</a></li>
                    <li class="header__item"><a href="#" class="header__link">О нас</a></li>
                    <li class="header__item"><a href="#" class="header__link">Блог</a></li>
                    <li class="header__item"><a href="#" class="header__link">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
@component('components.popup')

@endcomponent
