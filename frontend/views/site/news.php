<?php

use console\models\articles\Articles;

//$newsLastes = Articles::find()->orderBy(['create_at'  => SORT_DESC] )->limit(1)->all();
$art = Articles::find()->orderBy(['create_at' => SORT_DESC])->one();
$art_2 = Articles::find()->where(['<>','id' , $art->id ])->all();
$a = Yii::$app->formatter->asDate($art->create_at);
var_dump($a);
?>
<div class="events-w3layouts">
    <h2>News</h2>
        <a href="article/view?slug=<?= $art->slug ?>">
            <div class="col-md-7 events-left-agile-agileits-w3layouts">
                <div class="events-text-w3-agile events-text1">
                    <h4> <?= Yii::$app->formatter->asDatetime($art->create_at,'php:H:m - D:m:Y'); ?></h4>
                    <p><?= $art->title ?></p>
                    <ul>
                        <li>by <?= $art->create_by ?></li>
                    </ul>
                </div>
            </div>
        </a>
    <div class="col-md-5 events-right-agile">
        <?php foreach ($art_2 as $items) {?>
        <a href="article/view?slug=<?= $items->slug ?>">
            <div class="events-right-top">
                <div class="events-text-w3-agile events-text2">
                    <h4><?= Yii::$app->formatter->asDate($items->create_at); ?></h4>
                    <p><?= $items->title?></p>
                    <ul>
                        <li>by <?= $items->create_by?></li>
                    </ul>
                </div>
            </div>
        </a>
     <?php } ?>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>

<div class="events-section2-agileinfo">
    <div class="container">
        <div class="blog1-w3ls">
            <div class="col-md-4 blog-image-w3l">
                <a href="single.html"><img src="images/ng1.jpg" alt=" "/></a>
            </div>
            <div class="col-md-8 blog-text-w3ls">
                <a href="single.html"><h4>Quisque in lectus erat</h4></a>
                <div class="item_info">
                    <ul>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a></li>
                        <li><i class="glyphicon glyphicon-calendar"></i>14.May.2017</li>
                        <li><a href="#"><i class="glyphicon glyphicon-comment"></i>20 Comments</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-heart"></i>300 Likes</a></li>
                    </ul>
                </div>
                <p>Aliquam suscipit neque massa, eu maximus felis gravida vel. Vestibulum lacinia risus risus, ut
                    iaculis felis fermentum id. Cras at vulputate velit, vitae vestibulum augue. Etiam lorem nunc,
                    mattis ac dignissim sit amet, varius et ex. Phasellus eleifend nibh justo, pulvinar cursus sapien
                    commodo non.</p>
                <a href="single.html" class="blog-read">Read More</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="blog2-w3ls">
            <div class="col-md-4 blog-image-w3l">
                <a href="single.html"><img src="images/ng2.jpg" alt=" "/></a>
            </div>
            <div class="col-md-8 blog-text-w3ls">
                <a href="single.html"><h4>In finibus vel metus</h4></a>
                <div class="item_info">
                    <ul>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a></li>
                        <li><i class="glyphicon glyphicon-calendar"></i>17.Aug.2017</li>
                        <li><a href="#"><i class="glyphicon glyphicon-comment"></i>20 Comments</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-heart"></i>300 Likes</a></li>
                    </ul>
                </div>
                <p>Aliquam suscipit neque massa, eu maximus felis gravida vel. Vestibulum lacinia risus risus, ut
                    iaculis felis fermentum id. Cras at vulputate velit, vitae vestibulum augue. Etiam lorem nunc,
                    mattis ac dignissim sit amet, varius et ex. Phasellus eleifend nibh justo, pulvinar cursus sapien
                    commodo non.</p>
                <a href="single.html" class="blog-read">Read More</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="blog3-w3ls">
            <div class="col-md-4 blog-image-w3l">
                <a href="single.html"><img src="images/ng3.jpg" alt=" "/></a>
            </div>
            <div class="col-md-8 blog-text-w3ls">
                <a href="single.html"><h4>Nam eget ligula eu</h4></a>
                <div class="item_info">
                    <ul>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i>Admin</a></li>
                        <li><i class="glyphicon glyphicon-calendar"></i>24.Aug.2015</li>
                        <li><a href="#"><i class="glyphicon glyphicon-comment"></i>20 Comments</a></li>
                        <li><a href="#"><i class="glyphicon glyphicon-heart"></i>300 Likes</a></li>
                    </ul>
                </div>
                <p>Aliquam suscipit neque massa, eu maximus felis gravida vel. Vestibulum lacinia risus risus, ut
                    iaculis felis fermentum id. Cras at vulputate velit, vitae vestibulum augue. Etiam lorem nunc,
                    mattis ac dignissim sit amet, varius et ex. Phasellus eleifend nibh justo, pulvinar cursus sapien
                    commodo non.</p>
                <a href="single.html" class="blog-read">Read More</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

