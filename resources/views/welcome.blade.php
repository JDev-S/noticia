<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive bootstrap landing template">
    <meta name="author" content="Themeswale">

    <link rel="shortcut icon" href="images\favicon.ico">

    <title>Ablogia - Responsive Blog Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="\css\bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link href="\css\owl-carousel.css" rel="stylesheet">

    <!-- Icon CSS -->
    <link href="\css\materialdesignicons.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="\css\style.css" rel="stylesheet">

</head>

<body>

    <div class="logo-box">
        <a href="/">
            <img src="\images\logo.png" alt="logo" height="64">
        </a>
    </div>

    <!-- Navigation Bar-->
    <header id="topnav">

        <div class="container">
            <a href="/" class="logo-mobile">
                <img src="\images\logo.png" alt="logo">
            </a>
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">

                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li>
                        <a href="/">Inicio</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#">Tipos de noticias</a>
                        <span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li>
                                <a href="/clasico">Noticia normal</a>
                            </li>
                            <li>
                                <a href="/video">Noticia con video</a>
                            </li>
                            <li>
                                <a href="/audio">Noticia con audio</a>
                            </li>
                            <!--<li>
                                <a href="/galeria">Noticia con galeria</a>
                            </li>-->
                            <li>
                                <a href="/frase">Noticia con frase</a>
                            </li>
                            <li>
                                <a href="/link">Noticia con link</a>
                            </li>
                            <!--<li>
                                <a href="404.html">Error 404</a>
                            </li>-->
                        </ul>
                    </li>

                    <li>
                        <a href="/">Estilo de vida</a>
                    </li>
                    <li>
                        <a href="/">Viajes</a>
                    </li>
                    <li>
                        <a href="/">Música</a>
                    </li>
                    <li>
                        <a href="/acerca_de">Acerca de</a>
                    </li>
                    <li>
                        <a href="/contacto">Contacto</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="toggle-search" data-target="#search-wrap"><i class="mdi mdi-magnify noti-icon"></i></a>
                    </li>
                </ul>
                <!-- End navigation menu-->
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->

   @yield('contenido')

    <footer>
        <!-- instagram -->
        <div class="instagram-footer">
            <ul class="instagram-footer">
                <li>
                    <a href="#"><img src="images\instagram\1.jpg" alt=""> </a>
                </li>
                <li>
                    <a href="#"><img src="images\instagram\2.jpg" alt=""> </a>
                </li>
                <li>
                    <a href="#"><img src="images\instagram\3.jpg" alt=""> </a>
                </li>
                <li>
                    <a href="#"><img src="images\instagram\4.jpg" alt=""> </a>
                </li>
                <li>
                    <a href="#"><img src="images\instagram\5.jpg" alt=""> </a>
                </li>
                <li>
                    <a href="#"><img src="images\instagram\6.jpg" alt=""> </a>
                </li>
            </ul>
        </div>
        <!-- end instagram -->

        <!-- copy-wrapper -->
        <div class="copy-wrapper">
            <div class="container">
                <p class="copyright">©2020. Desarrollado por <a href="http://jdevs.com.mx/">JDev-S</a>.</p>
                <ul class="socials right-socials">
                    <li><a href="http://facebook.com"><i class="mdi mdi-facebook"></i></a></li>
                    <li><a href="http://twitter.com"><i class="mdi mdi-twitter"></i></a></li>
                    <li><a href="http://instagram.com"><i class="mdi mdi-instagram"></i></a></li>
                    <li><a href="http://pinterest.com"><i class="mdi mdi-pinterest"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- end copy-wrapper -->
    </footer>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js\jquery.min.js"></script>
    <script src="js\popper.min.js"></script>
    <script src="js\bootstrap.min.js"></script>
    <script src="js\owl.carousel.min.js"></script>
    <!--common script for all pages-->
    <script src="js\jquery.app.js"></script>

</body>
</html>