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
            <a href="http://shop.borderfree.com/email-signup" class="mailing-list">Зарегаться</a>
            <a href="/login" id="borderfreecom" class="right" target="_blank" >Войти</a>
        </div><!-- /.shell -->
    </div><!-- /.navigation-top -->

    <div class="header">
        <div class="shell clearfix">
            <div class="navigation">
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/rooms" >Комнаты<i></i></a></li>
                    <li><a href="/services" >Услуги<i></i></a></li>
                </ul>
            </div><!-- /.navigation -->
        </div><!-- /.shell -->
    </div><!-- /.header -->


    <div class="main">

        <div class="flexslider slideshow">
            <ul class="slides">
                <li>
                    <div class="sl-hold">
                        <div class="slide-info">
                            <div class="slide-info-head">
                                <h2></br>Golden Apple</h2>
                            </div><!-- /.slide-info-head -->

                            <div class="slide-info-box">
                                <p>Роскошь униеальна, как и каждый наш гость</p>
                            </div><!-- /.slide-info-box -->
                        </div><!-- /.slide-info -->
                    </div><!-- /.sl-hold -->

                    <img src="images/hotels_index.jpg" alt="" draggable="false">
                </li>
            </ul>

            <div class="slideshow-navigation">
                <div class="left-side"></div><!-- /.left-side -->
                <div class="right-side"></div><!-- /.right-side -->
                <div class="sl-hold">
                    <ul class="clearfix">
                        <li><strong class="slideshow-nav1"><img src="images/ico1.png" alt="" /> <span>******* <br />******</span></strong></li>
                        <li><strong class="slideshow-nav2"><img src="images/ico1.png" alt="" /> <span>********<br /> ******</span></strong></li>
                        <li><strong class="slideshow-nav3"><img src="images/ico1.png" alt="" /> <span>*******<br />*******</span></strong></li>
                        <li><strong class="slideshow-nav4"><img src="images/ico1.png" alt="" /> <span>*******<br />*******</span></strong></li>
                    </ul>
                </div>
            </div><!-- /.slideshow-navigation -->
        </div><!-- /.slideshow -->

        <div class="section-title">
            <div class="shell">
                <h2>Результаты выбора</h2>

                <i class="section-title-arrow"></i>
            </div><!-- /.shell -->
        </div><!-- /.section-title -->
        <div id="content">
            <div class="box">
                <?php include 'application/views/'.$content_view; ?>
                <!--
                <h2>Welcome to Accumen</h2>
                <img class="alignleft" src="images/pic01.jpg" width="200" height="180" alt="" />
                <p>
                    This is <strong>Accumen</strong>, a free, fully standards-compliant CSS template by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>. The images used in this template are from <a href="http://fotogrph.com/">Fotogrph</a>. This free template is released under a <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attributions 3.0</a> license, so you are pretty much free to do whatever you want with it (even use it commercially) provided you keep the footer credits intact. Aside from that, have fun with it :)
                </p>
                -->
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