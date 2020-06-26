<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer__column">

                <a href="#" class="footer__logo-link">
                    <img src="{{ URL::asset('images/logo2.png') }}" alt="логотип" class="footer__logo">
                </a>

                <p class="footer__text-left">
                    We are an industry-leading flooring products and services provider.
                    Let’s make your floor look spectacular!
                </p>

                <div class="footer__contacts-wrapper">
                    <i class="icon fa fa-phone"></i>
                    <a href="#" class="footer__contacts-link">+1 323-913-4688</a>
                </div>
                <div class="footer__contacts-wrapper">
                    <i class="icon fa fa-clock-o"></i>
                    <p class="footer__contacts-text">Mon-Sat: 07:00AM - 05:00PM</p>
                </div>
                <div class="footer__contacts-wrapper">
                    <i class="icon fa fa-location-arrow"></i>
                    <a href="#" class="footer__contacts-link">4730 Crystal Springs Dr, Los Angeles, CA 90027</a>
                </div>

            </div>
            <div class="footer__column">
                <p class="footer__title">Оставить заявку</p>
                <p class="footer__subtitle">Оставьте Ваш номер телефлна и мы Вам перезвоним</p>
                <form action="#">
                    <input type="tel" class="footer__input" placeholder="+7 999 999 99-99">
                    <button class="footer__btn">Отправить</button>
                </form>

                <div class="footer__follow">
                    <p class="footer__follow-text">Мы в соцсетях:</p>

                    <a href="#" class="footer__follow-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="footer__follow-link"><i class="fab fa-vk"></i></a>
                    <a href="#" class="footer__follow-link"><i class="fab fa-facebook-f"></i></a>




                </div>


            </div>
            <div class="footer__column footer__column-menu">
                <p class="footer__title">Меню</p>
                <div class="footer__link-wrapper">
                    <div>
                        <a href="{{ url('/') }}" class="footer__menu-link">Главная</a>
                    </div>
                    <div>
                        <a href="{{ url('/remont-kvartir') }}" class="footer__menu-link">Ремонт квартир</a>
                    </div>
                    <div>
                        <a href="#" class="footer__menu-link">Отделка полов</a>
                    </div>
                    <div>
                        <a href="#" class="footer__menu-link">Отделка стен</a>
                    </div>
                    <div>
                        <a href="#" class="footer__menu-link">Отделка потолков</a>
                    </div>
                    <div>
                        <a href="#" class="footer__menu-link">Ремонт коммерческих помещений</a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</footer>

<div class="razrab">
    <div class="container">
        <div class="razrab__inner">
            <p class="razrab__text"><a href="https://gagarin-digital.ru/" class="razrab__link">Разработка сайта: </a><b>Gagarin-digital.ru</b></p>

        </div>
    </div>
</div>
