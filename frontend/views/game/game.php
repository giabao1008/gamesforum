<?php
$this->title = ($game) ? $game->name : 'Not found';
?>
<div class="blog">
    <div class="container">
        <div class="col-md-7 wthree_blog_left">
            <div class="wthree_blog_left_grid">
                <div class="wthree_blog_left_grid_slider">
                    <img src="http://gamesforum.vn/backend/web/uploads/<?= $game->logo ?>" alt=" "
                         class="img-responsive"/>
                </div>
                <h4>Games Forum</h4>
                <h3><?= $game->name ?></h3>
                <ul>
                    <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a
                                href="#"><?= $game->author ?></a><i>|</i></li>
                    <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span><a
                                href="#"><?= $game->views_count ?></a><i>|</i></li>
                    <li><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><?= $game->create_by ?></li>
                </ul>
                <?= $game->description ?>
            </div>
            <div class="agileits_share">
                <b style="font-size: 18px">Cấu hình đề nghị</b>
                <div class="require">
                    <?= $game->require ?>
                </div>
            </div>
            <div class="agileits_share">
                <b style="font-size: 18px">Tải về: </b> <br>
                <div class="download-link">
                    <?php if (yii::$app->user->isGuest) { ?>
                        <button type="button"> Vui lòng đăng nhập để thấy link download</button> <?php } else { ?>
                        Download <a class="btn btn-success" href="<?= $game->download ?>"> here</a>

                    <?php } ?>
                </div>
            </div>
            <div class="agileits_reply">
            </div>

        </div>
        <div class="col-md-5 wthree_blog_right">
            <!--            <div class="w3ls_search">-->
            <!--                <form action="#" method="post">-->
            <!--                    <input type="text" name="Search" placeholder="Search on our blog" required="">-->
            <!--                    <input type="submit" value=" ">-->
            <!--                </form>-->
            <!--            </div>-->
            <div class="w3l_categories">
                <h3>Bài viết</h3>
                <ul>
                    <?php foreach ($art as $art) { ?>
                        <li> <?php echo \yii\helpers\Html::a($art->title, ['article/view', 'slug' => $art->slug]) ?></li>
                    <?php } ?>
                </ul>
            </div>

            <div class="w3l_archives">
                <h3>Time line</h3>
                <ul>
                    <?php foreach ($article_Time as $article_Time) { ?>
                        <li><?= $article_Time->create_at ?></li>
                    <?php } ?>
                    <li>14 August 2017</li>
                    <li>23 August 2017</li>
                    <li>8 September 2017</li>
                    <li>18 September 2017</li>
                </ul>
            </div>
            <div class="w3agile_flickr_posts">
                <h3>Games liên quan</h3>
                <?php foreach ($same as $same) { ?>
                    <div class="w3agile_flickr_post_left">
                        <a href="single.html"><img src="http://gamesforum.vn/backend/web/uploads/<?= $same->logo; ?>"
                                                   alt=" " class="img-responsive"/></a>
                    </div>
                <?php } ?>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
