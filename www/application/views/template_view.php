<!doctype html>
<html lang="ru">
<head>
    <title> Приложение гостиницы </title>

    <link rel="shortcut icon" href="images/star.png"/>
    <link rel="stylesheet" href="css/css.css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic"
          type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="navigation-top">
        <div class="shell clearfix">
            <a href="/signup" class="mailing-list">Зарегистрироваться</a>
            <a href="/signin" id="borderfreecom" class="right" target="_blank">Войти</a>
        </div>
    </div>

    <div class="header">
        <div class="shell clearfix">
            <div class="navigation">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/rooms">Комнаты<i></i></a></li>
                    <li><a href="/services">Услуги<i></i></a></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="main">
        <div class="flexslider slideshow">
            <ul class="slides">
                <li>
                    <div class="sl-hold">
                        <div class="slide-info">
                            <div class="slide-info-head">
                                <h2></br>Golden Apple</h2>
                            </div>
                            <div class="slide-info-box">
                                <p>Роскошь уникальна как и каждый наш гость</p>
                            </div>
                        </div>
                    </div>
                    <img src="images/hotels_index.jpg" alt="" draggable="false">
                </li>
            </ul>

            <div class="slideshow-navigation">
                <div class="left-side"></div>
                <div class="right-side"></div>
                <div class="sl-hold">
                    <ul class="clearfix">
                        <li><strong class="slideshow-nav1"><img src="images/ico1.png" alt=""/> <span>******* <br/>******</span></strong>
                        </li>
                        <li><strong class="slideshow-nav2"><img src="images/ico1.png" alt=""/> <span>********<br/> ******</span></strong>
                        </li>
                        <li><strong class="slideshow-nav3"><img src="images/ico1.png" alt=""/> <span>*******<br/>*******</span></strong>
                        </li>
                        <li><strong class="slideshow-nav4"><img src="images/ico1.png" alt=""/> <span>*******<br/>*******</span></strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-title">
            <div class="shell">
                <h2>Результаты выбора</h2>
                <i class="section-title-arrow"></i>
            </div>
        </div>
        <div id="content">
            <div class="box">


                <?php include 'application/views/' . $content_view; ?>


            </div>
        </div>

        <div class="footer">
            <div class="shell clearfix">
                <p class="copy">Because you’re worth it</p>
            </div>
        </div>
    </div>

</body>
</html>