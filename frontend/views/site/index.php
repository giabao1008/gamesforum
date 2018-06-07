<?php

/* @var $this yii\web\View */
$defaultUrl = 'http://gamesforum.vn/backend/web/uploads/';
$this->title = 'Games Forum - Game zone for Gamer';
?>

<!-- trend -->
<div class="trend-w3layouts">
    <div class="container">
        <h2>Thể loại games</h2>
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
        <h3>Dịch vụ</h3>
        <div class="col-md-3 service-grid-agileits service-grid-agileits-top">
            <span class="glyphicon glyphicon-sort-by-attributes" aria-hidden="true"></span>
            <h4>Tốc độ</h4>
            <p>Tốc độ tải game vượt trội so với các trang khác</p>

        </div>
        <div class="col-md-3 service-grid-agileits">
            <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
            <h4>Tự do</h4>
            <p>Tự do download , chia sẻ game tới cộng đồng mạng</p>

        </div>
        <div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
            <span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
            <h4>Tức thời</h4>
            <p>Các tin tức mới nhất về game được cập nhật thường xuyên và nhanh chóng</p>

        </div>
        <div class="col-md-3 service-grid-agileits service-grid-agileits-bottom">
            <span class="glyphicon glyphicon-object-align-right" aria-hidden="true"></span>
            <h4>Lưu trữ</h4>
            <p>Là nơi lưu trữ các thể loại game, games được ưa chuộng nhất .</p>
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
                                <h3>Nơi tin tức về các loại game được chia sẻ miễn phí và công khai</h3>
                                <p>Nhanh chóng, miễn phí, tiện lợi là phương châm của chúng tôi</p>
                                <a href="/news" class="learn">Tìm hiểu thêm</a>
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
