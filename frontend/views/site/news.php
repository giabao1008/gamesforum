<?php

use console\models\articles\Articles;

$art = Articles::find()->orderBy(['create_at' => SORT_DESC])->one();
$art_2 = Articles::find()->all();
//$a = Yii::$app->formatter->asDate($art->create_at);
?>
<div class="events-w3layouts">
    <h2>Tin tức</h2>
        <a href="article/<?= $art->slug ?>">
            <div class="col-md-7 events-left-agile-agileits-w3layouts" style="background: url('../../backend/web/uploads/<?= $art->image  ?>') no-repeat ">
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
        <?php foreach ($art_2 as $item) {?>
        <a href="article/view?slug=<?= $item->slug ?>">
            <div class="events-right-top" style="background: url('../../backend/web/uploads/<?= $item->image  ?>') no-repeat ">
                <div class="events-text-w3-agile events-text2">
                    <h4><?= Yii::$app->formatter->asDate($item->create_at); ?></h4>
                    <p><?= $item->title ?></p>
                    <ul>
                        <li>by <?= $item->create_by ?></li>
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

        <?php $i=0; foreach ( $art_2 as  $value){ ?>
        <div class="blog<?= $i++?>-w3ls">
            <div class="col-md-4 blog-image-w3l">
                <a href="article/view?slug=<?= $value->slug ?>"><img src="http://gamesforum.vn/backend/web/uploads/<?= $value->image ?>" alt="<?= $value->title?> "/></a>
            </div>
            <div class="col-md-8 blog-text-w3ls">
                <a href="article/view?slug=<?= $value->slug ?>"><h4><?= $value->title?></h4></a>
                <div class="item_info">
                    <ul>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i><?= $value->create_by?></a></li>
                        <li><i class="glyphicon glyphicon-calendar"></i><?= Yii::$app->formatter->asDate($value->create_at); ?></li>
                        <li><a href="#"><i class="glyphicon glyphicon-eye-open"></i><?= $value->views_count ?></a></li>
                    </ul>
                </div>
                <p><?=$value->desc ?></p>
                <a href="article/view?slug=<?= $value->slug ?>" class="blog-read">Read More</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php } ?>
    </div>
</div>

