<?php if (Yii::$app->requestedRoute === 'site/index' || Yii::$app->requestedRoute === '' ) { ?>
    <div class="header">
        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/trang-chu"><h1>Games <img src="<?php @web ?>/images/c1.png" alt=" "/> Forum</h1></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hover-effect"><a href="/about-us">About</a></li>
                        <li class="hover-effect"><a href="/games">Games</a></li>
                        <li class="hover-effect"><a href="/news">News</a></li>
                        <li class="hover-effect"><a href="/contact">Contact</a></li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- //Navbar -->

    </div>

    <!-- Slider -->
    <div class="slider">
        <ul class="rslides" id="slider">
            <li>
                <img src="<?php @web ?>/images/banner3.jpg" alt=""/>
            </li>
            <li>
                <img src="<?php @web ?>/images/banner2.jpg" alt=""/>
            </li>
            <li>
                <img src="<?php @web ?>/images/banner1.jpg" alt=""/>
            </li>
        </ul>
    </div>
    <!-- //Slider -->

    <script defer="defer">
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 800,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
<?php } else { ?>
    <div class="sub-banner">
        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/trang-chu"><h1>Games <img src="<?php @web ?>/images/c1.png" alt=" "/> Zone</h1></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hover-effect"><a href="/about-us">About</a></li>
                        <li class="hover-effect"><a href="/games">Games</a></li>
                        <li class="hover-effect"><a href="/news">News</a></li>
                        <li class="hover-effect"><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
<?php } ?>
<!-- //Banner-Slider-JavaScript -->
<!-- //Header -->