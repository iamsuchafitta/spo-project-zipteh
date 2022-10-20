


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"-->
    <!--          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/77e56ed4a8.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <title>ЗИПТЕХ-СЕРВИС</title>
</head>
<body>

<header class="d-block">
    <div class="container">
        <div class="d-flex gap-3">
            <div class="col d-flex flex-shrink-1 gap-3 align-items-start">
                <div class="text-end">
                    <img src="assets/images/logo-zip.png">
                    <!--                    <p>Работаем с 2007 г.</p>-->
                    <p><?php
                        $year = 2007;
                        echo "Работаем с $year"
                        ?></p>
                </div>
                <img src="assets/images/post3.png">
            </div>
            <div class="col d-flex flex-column text-center">
                <a class="my_btn text-nowrap" href="#">ЗАКАЗАТЬ ЗАПЧАСТЬ</a>
                <a class="my_btn text-nowrap" href="#">ЗАКАЗАТЬ РЕМОНТ</a>
                <a class="my_btn text-nowrap" href="#">ОНЛАЙН СИСТЕМА</a>
            </div>
            <div class="col d-flex flex-column gap-3">
                <div class="d-flex justify-content-evenly">
                    <a class="round_btn">
                        <img src="assets/images/vk.svg">
                    </a>
                    <?php if (true) { ?>
                        <a class="round_btn">
                            <img src="assets/images/twitter.svg">
                        </a>
                    <?php } ?>
                    <a class="round_btn">
                        <img src="assets/images/facebook.svg">
                    </a>
                    <a class="round_btn">
                        <img src="assets/images/instagram.svg">
                    </a>
                </div>
                <a class="btn__connect text-nowrap" href="#">НАПИСАТЬ РУКОВОДСТВУ</a>
            </div>


            <div class="d-flex flex-column gap-3">
                <div class="contact_box d-flex justify-content-end gap-2 align-items-start py-1 px-3">
                    <span class="fs-7 text-end">Центральный офис продаж</span>
                    <img src="assets/images/phone.png" width="25px">
                    <div class="d-flex flex-column align-items-end">
                        <a href="tel:8(800)200-99-38">8(800)200-99-38</a>
                        <a href="tel:+7(495)663-99-38">+7(495)663-99-38</a>
                        <a href="mailto:zakaz@zipteh.ru">zakaz@zipteh.ru</a>
                    </div>
                </div>
                <div class="contact_box d-flex justify-content-end gap-2 align-items-start py-1 px-3">
                    <span class="fs-7 text-end">Офис продаж ТРАКТ 32 км МКАД</span>
                    <img src="assets/images/phone.png" width="25px">
                    <div class="d-flex flex-column align-items-end">
                        <a href="tel:+7(495)798-99-38">+7(495)798-99-38</a>
                        <a href="mailto:sales@zipteh.ru">sales@zipteh.ru</a>
                    </div>
                </div>
                <div class="contact_box d-flex justify-content-end gap-2 align-items-start py-1 px-3">
                    <span class="fs-7 text-end">Офис в г. Краснодар</span>
                    <img src="assets/images/phone.png" width="25px">
                    <div class="d-flex flex-column align-items-end">
                        <a href="tel:+7(861)944-99-38">+7(861)944-99-38</a>
                        <a href="mailto:zakaz@costex.com.ru">zakaz@costex.com.ru</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</header>

<nav class="menu_bar mb-3 text-center align-items-center justify-content-center">
    <ul class="container  ms-5  d-flex justify-content-center align-items-center">
        <li><a href="#">МЫ ДИЛЕРЫ</a>
            <ul>
                <li><a href="/">ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР CTP</a></li>
                <li><a href="/">ОФИЦИАЛЬНЫЙ ДИЛЕР AMMANN</a></li>
                <li><a href="/">ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР CGR GHINASSI</a></li>
                <li><a href="/">ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР G.A. RICAMBI</a></li>
                <li><a href="/">ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР USCO ITR</a></li>
                <li><a href="/">ОФИЦИАЛЬНЫЙ ПРЕДСТАВИТЕЛЬ EURORICAMBI</a></li>
            </ul>
        </li>
        <li><a href="#">О КОМПАНИИ</a>
            <ul>
                <li><a href="/">СЕРТИФИКАТЫ КАЧЕСТВА</a></li>
                <li><a href="/">ВАКАНСИИ</a></li>
                <li><a href="/">ВИДЕО О КОМПАНИИ</a></li>
                <li><a href="/">ПРЕЗЕНТАЦИЯ</a></li>
                <li><a href="/">КОМПАНИИ</a></li>
            </ul>
        </li>
        <li><a href="#">ЗАПЧАСТИ</a>
            <ul>
                <li><a href="/">ПРОИЗВОДИТЕЛИ</a></li>
                <li><a href="/">КАТАЛОГ ЗАПЧАСТЕЙ CAT И KOMATSU</a></li>
                <li><a href="/">КАТАЛОГ ЗАПЧАСТЕЙ CTP</a></li>
                <li><a href="/">ЗАПЧАСТИ AMMANN</a></li>
                <li><a href="/">ЗАПАСНЫЕ ЧАСТИ АБЗ AMMANN</a></li>
                <li><a href="/">ГИДРАВЛИЧЕСКИЕ НАСОСЫ</a></li>
            </ul>
        </li>
        <li><a href="#">РЕМОНТ/СЕРВИС</a></li>
        <li><a href="#">СПЕЦПРЕДЛОЖЕНИЯ</a></li>
        <li><a href="#">ГАРАНТИЯ</a></li>
        <li><a href="#">ДОСТАВКА</a></li>
        <li><a href="#">ТЕНДЕР</a></li>
        <li><a href="#">ОПЛАТА</a></li>
        <li><a href="#">НОВОСТИ</a></li>
        <li><a href="#">КОНТАКТЫ</a>
            <ul>
                <li><a href="#">НАШИ СОТРУДНИКИ</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div class="container d-flex gap-5">

    <div class="flex-grow-1 d-flex flex-column gap-3 w-75">
        <div class="path">
            Главная / Товары / Каталог / Обойма 6D1734
        </div>
        <div class="d-flex gap-3">
            <div class="product__img">
                <img class="border border-{#e1e1e1} border-1" src="assets/images/placeholder.png">
            </div>

            <div class="product_info">
                <h5 class="product__title">
                    Обойма
                </h5>
                <div class="product__code fs-6">
                    <strong>Артикул:</strong>
                    <span>6D1734</span>
                </div>
                <div class="product__manufacturer fs-6">
                    <strong>Производитель:</strong>
                    <span>CGR</span>
                </div>
                <div class="product__applicability fs-6">
                    <strong>Применяемость:</strong>
                    <span>CAT</span>
                </div>
                <div class="product__replacement fs-6">
                    <strong>Замены:</strong>
                </div>
                <input class="w-25 text-center" type="number" step="1" min="1" max="" value="1" title="Кол-во" size="4"
                       pattern="^[0-9]*$">
                <a class="my_btn text-nowrap" href="#">В КОРЗИНУ</a>
                <div class="stock col-13">
                    <i class="fa fa-check-square-o">
                        В наличии
                    </i>
                    <div class="link-delivery">
                        <a href="/delivery/">Информация о доставке</a>
                    </div>
                </div>
            </div>
        </div>

        <h2>Похожие товары</h2>
        <div class="d-grid grid-cols-3 gap-3 justify-content-evenly">
            <div class='d-flex flex-column justify-content-between text-center border border-2 border-dark hover-border-yellow transition-200 p-3'>
                <img src="assets/images/1-250x250.jpg" width="250px">
                <strong>2131370</strong>
                <p>Втулка крепления моста фронтального погрузчика CAT 962G</p>
                <a class="my_btn text-nowrap" href="#">ДОБАВИТЬ В КОРЗИНУ</a>
            </div>
            <div class='d-flex flex-column justify-content-between text-center border border-2 border-dark hover-border-yellow transition-200 p-3'>
                <img src="assets/images/2-250x250.jpg" width="250px">
                <strong>3857276</strong>
                <p>Гильза цилиндра</p>
                <a class="my_btn text-nowrap" href="#">ДОБАВИТЬ В КОРЗИНУ</a>
            </div>
            <div class='d-flex flex-column justify-content-between text-center border border-2 border-dark hover-border-yellow transition-200 p-3'>
                <img src="assets/images/3-250x250.jpg" width="250px">
                <strong>1865663</strong>
                <p>Палец</p>
                <a class="my_btn text-nowrap" href="#">ДОБАВИТЬ В КОРЗИНУ</a>
            </div>
            <div class='d-flex flex-column justify-content-between text-center border border-2 border-dark hover-border-yellow transition-200 p-3'>
                <img src="assets/images/4-250x250.jpg" width="250px">
                <strong>9R0366</strong>
                <p>Шайба различного применения сталь</p>
                <a class="my_btn text-nowrap" href="#">ДОБАВИТЬ В КОРЗИНУ</a>
            </div>
            <div class='d-flex flex-column justify-content-between text-center border border-2 border-dark hover-border-yellow transition-200 p-3'>
                <img src="assets/images/placeholder.png" width="250px">
                <strong>9C0093</strong>
                <p>Палец крепления рычага ковша фронтального погрузчика САТ 950B сталь</p>
                <a class="my_btn text-nowrap" href="#">ДОБАВИТЬ В КОРЗИНУ</a>
            </div>
            <div class='d-flex flex-column justify-content-between text-center border border-2 border-dark hover-border-yellow transition-200 p-3'>
                <img src="assets/images/placeholder.png" width="250px">
                <strong>9T8676</strong>
                <p> Втулка крепления гидроцилиндра рычага ковша фронтального погрузчика САТ 966F сталь</p>
                <a class="my_btn text-nowrap" href="#">ДОБАВИТЬ В КОРЗИНУ</a>
            </div>
        </div>
    </div>


    <div class="w-285">
        <h3 class="border-bottom border-warning border-3">
            Найти товары
        </h3>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Поиск по товарам..." aria-label="Username"
                   aria-describedby="basic-addon1">
            <span class="input-group-text" id="basic-addon1">🔍</span>
        </div>
        <h4 class="border-bottom border-warning border-3">
            Новости
        </h4>
        <div class="news-cards fs-6">
            <div class="card-1 border-bottom border-{#e1e1e1} border-1">
                <a class="text-decoration-none" href="/news/">Новая партия моторного масла Caterpillar уже у
                    нас!</a>
                <p class="fw-lighter">1 месяц назад</p>
            </div>
            <div class="card-2 border-bottom border-{#e1e1e1} border-1">
                <a class="text-decoration-none" href="/news/">Заходите к нам в группу ВК</a>
                <p class="fw-lighter">3 месяца назад</p>
            </div>
            <div class="card-3 border-bottom border-{#e1e1e1} border-1">
                <a class="text-decoration-none" href="/news/">Итоги выставки CTT EXPO 2022</a>
                <p class="fw-lighter">4 месяца назад</p>
            </div>
            <div class="card-4 border-bottom border-{#e1e1e1} border-1">
                <a class="text-decoration-none" href="/news/">Редуктора хода для экскаваторов Caterpillar</a>
                <p class="fw-lighter">5 месяцев назад</p>
            </div>
            <div class="card-5 border-bottom border-{#e1e1e1} border-1">
                <a class="text-decoration-none" href="/news/">Пополнение склада коронками и редукторами.</a>
                <p class="fw-lighter">5 месяцев назад</p>
            </div>
            <div class="card-6 border-bottom border-{#e1e1e1} border-1">
                <a class="text-decoration-none" href="/news/">Поздравление с Днём Победы!</a>
                <p class="fw-lighter">5 месяцев назад</p>
            </div>
            <div class="card-7 border-bottom border-{#e1e1e1} border-1">
                <a class="text-decoration-none" href="/news/">Долгожданное поступление запчастей CTP на
                    склад.</a>
                <p class="fw-lighter">6 месяцев назад</p>
            </div>
            <div class="card-8 border-bottom border-{#e1e1e1} border-1">
                <a class="text-decoration-none" href="/news/">Поздравление с Днём Защитника Отечества!</a>
                <p class="fw-lighter">8 месяцев назад</p>
            </div>
            <div class="card-9 border-bottom border-{#e1e1e1} border-1">
                <a class="text-decoration-none" href="/news/">График работы “ЗИПТЕХ-СЕРВИС” в Новогодние
                    праздники</a>
                <p class="fw-lighter">10 месяцев назад</p>
            </div>
            <div class="card-10 border-bottom border-{#e1e1e1} border-1">
                <a class="text-decoration-none" href="/news/">Итоги выставки ЮГАГРО 2021!</a>
                <p class="fw-lighter">10 месяцев назад</p>
            </div>
        </div>
    </div>

</div>

<div class="footer b-color mt-sm-4">

    <div class="footer-header container d-flex py-sm-4">
        <div class="footer-logo">
            <img src="assets/images/logo-zip.png">
        </div>
        <nav class="menu_bar_footer mb-3 ms-5">
            <ul class="container d-flex fw-semibold justify-content-center align-items-center">
                <li><a href="#">МЫ ДИЛЕРЫ</a></li>
                <li><a href="#">О КОМПАНИИ</a></li>
                <li><a href="#">ЗАПЧАСТИ</a></li>
                <li><a href="#">РЕМОНТ/СЕРВИС</a></li>
                <li><a href="#">СПЕЦПРЕДЛОЖЕНИЯ</a></li>
                <li><a href="#">ГАРАНТИЯ</a></li>
                <li><a href="#">ДОСТАВКА</a></li>
                <li><a href="#">ТЕНДЕР</a></li>
                <li><a href="#">ОПЛАТА</a></li>
                <li><a href="#">НОВОСТИ</a></li>
                <li><a href="#">КОНТАКТЫ</a></li>
            </ul>
        </nav>
    </div>

    <div class="map_container px-md-5">
        <div class="footer-map d-flex">
            <img src="assets/images/map.png">
            <div class="footer-city px-sm-5">
                <h4 class="border-bottom border-dark border-1 fs-5">
                    Наши филиалы
                </h4>
                <ul>
                    <li>
                        <i class="fa-sharp fa-solid fa-location-dot">
                            Москва
                        </i>
                    </li>
                    <li>
                        <i class="fa-sharp fa-solid fa-location-dot">
                            Санкт-Петербург
                        </i>
                    </li>
                    <li>
                        <i class="fa-sharp fa-solid fa-location-dot">
                            Архангельск
                        </i>
                    </li>
                    <li>
                        <i class="fa-sharp fa-solid fa-location-dot">
                            Белгород
                        </i>
                    </li>
                    <li>
                        <i class="fa-sharp fa-solid fa-location-dot">
                            Волгоград
                        </i>
                    </li>
                    <li>
                        <i class="fa-sharp fa-solid fa-location-dot">
                            Воронеж
                        </i>
                    </li>
                    <li>
                        <i class="fa-sharp fa-solid fa-location-dot">
                            Екатеринбург
                        </i>
                    </li>
                    <li>
                        <i class="fa-sharp fa-solid fa-location-dot">
                            Казань
                        </i>
                    </li>
                    <li>
                        <i class="fa-sharp fa-solid fa-location-dot">
                            Калининград
                        </i>
                    </li>
                </ul>
                <a class="my_btn text-nowrap mt-md-2" href="#">ВСЕ ФИЛИАЛЫ</a>
            </div>
            <div class="footer_contact d-flex flex-column mb-3 ps-5 text-end">
                <a class="text-dark text-decoration-none fs-4" href="tel:+7(495)663-99-38">+7(495)663-99-38</a>
                <a class="text-dark text-decoration-none fs-5" href="mailto:zakaz@zipteh.ru">zakaz@zipteh.ru</a>
                <a class="text-dark text-decoration-none fs-5" href="mailto:sales@zipteh.ru">sales@zipteh.ru</a>
            </div>
        </div>
        <div class="mt-sm-4 text-center">
            © 2007–2021 ООО «ЗИПТЕХ-СЕРВИС». Все права защищены. Копирование информации с сайта возможно только с
            письменного разрешения правообладателя сайта.
        </div>
        <div class="text-center px-5 mx-sm-5">
            Данный интернет-сайт носит исключительно информационный характер и
            ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 (2) Гражданского
            кодекса РФ. zipteh.ru © 2007-2021
            *Данный объект интеллектуальной собственности принадлежит компании, входящей в группу компаний Caterpillar.
            Caterpillar не финансирует, не разрешает и не поддерживает деятельность данного Веб-сайта.
        </div>
    </div>

</div>

</body>
</html>