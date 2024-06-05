<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('storage/img/png/logo-no-background.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>


    <style>
    * {

    padding: 0px;
    margin: 0px auto;
    font-family: 'Sedgwick Ave Display', cursive;
    color: rgb(186, 186, 186);
    text-shadow: black 1px 0 3px,
    black -1px 0 3px,
    black 0px 1px 3px,
    black 0px -1px 3px;
}
a{
    text-decoration: none;

}


body {
top: 0 !important;
background-color: rgb(227, 227, 227);
}

.skiptranslate {
    display: none;
    height: 0;
}

.language__img {
    cursor: pointer;
}


    header {
    background-color: rgb(50, 50, 50);

}

.logo {
    width: 40%;
}

.menu-content {
    max-height: 0;
    overflow: hidden;
    font-family: 'Oswald', sans-serif;

}

li a:hover {
    color: red;
    background-color: rgb(30, 30, 30);
}

.menu-content li {

    width: 16.6%;

}

input:checked~label {

    background-image: url(/menu-png/cross.png);

}

input:checked~.menu-content {

    max-height: 100%;
}

.collapsible-menu {

    border-bottom: 3px solid black;

}

.collapsible-menu ul {
    border-top: 3px solid black;
    display: flex;
    list-style-type: none;
    padding: 0;

}

.collapsible-menu a {
    display: block;
    color: rgb(186, 186, 186);
    text-decoration: none;
}


.collapsible-menu label {

    font-size: 20px;
    margin: 1px;
    display: block;
    cursor: pointer;
    background: url(/menu-png/menu-bar.png) no-repeat center;
    background-size: 30px 80%;
    background-position: 0;
    width: 90px;


    padding: 5px
}

.collapsible-menu label:hover {
    color: red;

}

input#menu {
    display: none;
}

input:checked+label {
    background-image: url(/menu-png/cross.png);
}

section h4 {
    font-weight: bolder;
    /* text-shadow: none; */
}

section h3{
    font-weight: bolder;
    text-shadow: none;
}

.card-title{
    text-shadow: none;
}


section h2{
    font-weight: bolder;
    text-shadow: none;
}


section h1{
    font-weight: bolder;
    text-shadow: none;
}


section h5{
    font-weight: bolder;
    text-shadow: none;
}


section h6{
    font-weight: bolder;
    text-shadow: none;
}


section p{
    font-weight: 900;
    text-shadow: none;
    color:rgb(100, 100, 100);
}

footer {
    width: 100%;
    background-color: rgb(50, 50, 50);
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    padding: 10px 0;


}

.menu-footer {
    max-height: 100%;
    text-align: center;
    margin: 0 15px;


}

.menu-footer a {
    font-size: 15px;
    text-decoration: none;
    color: rgb(186, 186, 186);

}

.menu-footer Label {

    font-size: 30px;
}

.menu-footer ul {
    list-style-type: none;
    padding: 0px;

}

.Payment-method-footer {

    margin: 10px;

}

.Connection-method-footer img {
    width: 10%;
}

.Payment-method-footer img {
    width: 15%;
}

.footer-column {
    display: flex;
    width: 33%;
    align-items: center;
    justify-content: center;

}

.footer-column.two {


    padding-top: 20px;
    flex-direction: column;
    justify-content: space-between;
}




/* стили для кнопки up */
.btn-up {
    position: fixed;
    background-color: grey;
    left: 20px;
    bottom: 20px;
    border-radius: 30px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.3s ease-in-out;
    width: 50px;
    height: 50px;
    opacity: 1;
}

.btn-up::before {
    content: "";
    width: 40px;
    height: 40px;
    background-size: 100% 100%;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23fff' viewBox='0 0 16 16'%3E%3Cpath fill-rule='evenodd' d='M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z'/%3E%3C/svg%3E");
}

.btn-up_hide {
    display: none;
}

.btn-up_hiding {
    opacity: 0;
}

@media (hover: hover) and (pointer: fine) {
    .btn-up:hover {
        background-color: grey;
    }
}



</style>
</head>
<body>
<header>


<div align="center">
    <img class="logo" src=" {{asset('storage/img/png/logo-no-background.png')}} " alt="logo">
</div>
<div class="collapsible-menu" align="center">
    <input type="checkbox" id="menu">
    <label for="menu" align="right">Меню</label>
    <div class="menu-content">
        <ul>
            <li><a href="/">Каталог</a></li>

            <li><a href="/WaitingList">Лист ожидания</a></li>
            <li><a href="/Basket">Корзина</a></li>

            <li><a href="/Help">Помощь</a></li>
        </ul>
    </div>
</div>
</header>

@if(session('succes')=== 1)
<div class ="alert alert-succes alert-disamissible fade show m-2" role="alert">
    <h5 class="alert-heading">Успешно</h5>
    <p>Операция пройдена успешно</p>
</div>
@elseif(session('succes')=== 0)
<div class="alert alert-danger" role="alert">
 <h5 class="alert-heading">Ошибка</h5>
    <p>Что то пошло не так</p>
</div>
@endif

<section class="content">
@yield('content')
</section>
<footer>

    <div class="footer-column one">
        <div class="menu-footer">
            <ul>
                <Label>Меню</Label>

                <li><a href="каталог.html">Каталог</a></li>
                <li><a href="избранные.html">Избранные</a></li>
                <li><a href="корзина.html">Корзина</a></li>
                <li><a href="помощь.html">Помощь</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-column two">
        <div class="Connection-method-footer" align="center">
            <h5>Мы в соц. Сетях</h5>
            <img src="{{asset('storage/img/icons8/icons8-telegram-app-48.png')}}" alt="telegram">
            <img src="{{asset('storage/img/icons8/icons8-facebook-новый-48.png')}}" alt="facebook">
            <img src="{{asset('storage/img/icons8/icons8-vk-в-круге-48.png')}}" alt="vk">
            <img src="{{asset('storage/img/icons8/icons8-whatsapp-48.png')}}" alt="whatsapp">
            <img src="{{asset('storage/img/icons8/icons8-youtube-48.png')}}" alt="youtube">
            <img src="{{asset('storage/img/icons8/icons8-твиттер-48.png')}}" alt="твиттер">
            <h5>Иконки от <a target="_blank" href="https://icons8.com">Icons8</a></h5>

        </div>
        <div>
            <h5>© Чистоедов Алексей Александрович, 2024</h5>
        </div>
    </div>
    <div class="footer-column three">

        <div class="Payment-method-footer" align="center">
            <h5>Способы оплаты:</h5>
            <img src="{{asset('storage/img/Payment-method-png/Discover.png')}}" alt="Discover">
            <img src="{{asset('storage/img/Payment-method-png/Maestro.png')}}" alt="Maestro">
            <img src="{{asset('storage/img/Payment-method-png/MasterCard.png')}}" alt="MasterCard">
            <img src="{{asset('storage/img/Payment-method-png/PayPal.png')}}" alt="PayPal">
            <img src="{{asset('storage/img/Payment-method-png/Qiwi.png')}}" alt="Qiwi">
            <img src="{{asset('storage/img/Payment-method-png/Sberbank-online.png')}}" alt="Sberbank-online">
            <img src="{{asset('storage/img/Payment-method-png/Visa.png')}}" alt="Visa">
            <img src="{{asset('storage/img/Payment-method-png/WebMoney.png')}}" alt="WebMoney">
            <img src="{{asset('storage/img/Payment-method-png/Yandex.png')}}" alt="Yandex">
            <img src="{{asset('storage/img/Payment-method-png/American Express.png')}}" alt="American Express">
        </div>
    </div>


</footer>
{{-- кнопка up --}}
<div class="btn-up btn-up_hide"></div>
<script>
const btnUp = {
    el: document.querySelector('.btn-up'),
    scrolling: false,
    show() {
        if (this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
            this.el.classList.remove('btn-up_hide');
            this.el.classList.add('btn-up_hiding');
            window.setTimeout(() => {
                this.el.classList.remove('btn-up_hiding');
            }, 300);
        }
    },
    hide() {
        if (!this.el.classList.contains('btn-up_hide') && !this.el.classList.contains('btn-up_hiding')) {
            this.el.classList.add('btn-up_hiding');
            window.setTimeout(() => {
                this.el.classList.add('btn-up_hide');
                this.el.classList.remove('btn-up_hiding');
            }, 300);
        }
    },
    addEventListener() {
        // при прокрутке окна (window)
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY || document.documentElement.scrollTop;
            if (this.scrolling && scrollY > 0) {
                return;
            }
            this.scrolling = false;
            // если пользователь прокрутил страницу более чем на 200px
            if (scrollY > 400) {
                // сделаем кнопку .btn-up видимой
                this.show();
            } else {
                // иначе скроем кнопку .btn-up
                this.hide();
            }
        });
        // при нажатии на кнопку .btn-up
        document.querySelector('.btn-up').onclick = () => {
            this.scrolling = true;
            this.hide();
            // переместиться в верхнюю часть страницы
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: 'smooth'
            });
        }
    }
}

btnUp.addEventListener();

// код для слайдера на главной странице
$('.carousel .carousel-item').each(function () {
var minPerSlide = 3;
var next = $(this).next();
if (!next.length) {
next = $(this).siblings(':first');
}
next.children(':first-child').clone().appendTo($(this));

for (var i = 0; i < minPerSlide; i++) {
    next=next.next();
    if (!next.length) {
        next=$(this).siblings(':first');
    }
     next.children(':first-child').clone().appendTo($(this)); }

    });



</script>


<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
<script src="//translate.google.com/translate_a/element.js?cb=TranslateInit"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>
