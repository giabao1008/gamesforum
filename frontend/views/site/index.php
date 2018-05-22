<?php

/* @var $this yii\web\View */
$defaultUrl = 'http://gamesforum.vn/backend/web/uploads/';
$this->title = 'Games Forum - Game zone for Gamer';
?>

<!-- trend -->
<div class="trend-w3layouts">
    <div class="container">
        <h2>Trending Games</h2>
        <?php if ($GameType) { ?>
        <ul id="flexiselDemo1">
        <?php foreach ($GameType as $item){  ?>
            <li>
                <div class="trend-grid">
                    <h4><?=$item->name ?></h4>
                    <img src="<?=$defaultUrl.$item->logo?>" alt=" " class="img-responsive" />
                </div>
            </li>
            <?php  } ?>
        </ul>
    <?php } ?>
        <script type="text/javascript">
            $(window).on('load', function(){
                $("#flexiselDemo1").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems:3
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 4
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<!-- //trend -->


<!-- services-->
<div class="services-agileits-w3layouts">
    <div class="container">
        <h3>Services</h3>
        <div class="col-md-3 service-grid-agileits service-grid-agileits-top">
            <span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
            <h4>Quis tortor</h4>
            <p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
            <a href="single.html">Read More</a>
        </div>
        <div class="col-md-3 service-grid-agileits">
            <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
            <h4>Eget arcu</h4>
            <p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
            <a href="single.html">Read More</a>
        </div>
        <div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
            <span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
            <h4>Risus porta</h4>
            <p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
            <a href="single.html">Read More</a>
        </div>
        <div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
            <span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span>
            <h4>Proin sapien</h4>
            <p>Curabitur suscipit porttitor aliquam. Etiam id placerat purus. Integer sodales elit eget arcu placerat.</p>
            <a href="single.html">Read More</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //services-->

<!-- new games -->
<div class="new-w3-agile">
    <div class="container">
        <h3>Game Mới</h3>
        <?php if ($gameNews && $gameNews != '') { ?>
        <?php foreach ( $gameNews as $itemNews){  ?>
        <div class="col-md-3 new-grid-w3l view view-eighth">
            <img src="<?=  $defaultUrl.$itemNews->logo  ?>" alt=" " />
            <div class="mask">
                <?php echo \yii\helpers\Html::a('<h4> Click here </h4>',['game/view','slug' => $itemNews->slug])  ?>
                <p>To read more about this</p>
            </div>
        </div>
            <?php }?>
        <?php }?>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //new games-->

<div class="services-bottom-w3-agileits">
    <div class="container">
        <div class="wthree_info">
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="wthree_info_grid">
                                <h3>Duis aute dolor reprehenderit</h3>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt officia.</p>
                                <a href="single.html" class="learn">Learn More</a>
                            </div>
                        </li>
                        <li>
                            <div class="wthree_info_grid">
                                <h3>Aliquip commodo consequat</h3>
                                <p>Curabitur lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                <a href="single.html" class="learn">Learn More</a>
                            </div>
                        </li>
                        <li>
                            <div class="wthree_info_grid">
                                <h3>Quis autem vel eum iure ea</h3>
                                <p>Phasellus ornare consectetur erat, eu vehicula orci finibus at.</p>
                                <a href="single.html" class="learn">Learn More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
            <!-- flexSlider -->

            <script defer src="js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(window).on('load', function(){
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- //flexSlider -->
        </div>
    </div>
</div>
