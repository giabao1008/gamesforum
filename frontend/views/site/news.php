<?php

use console\models\articles\Articles;

$art = Articles::find()->orderBy(['create_at' => SORT_DESC])->one();
$art_2 = Articles::find()->where(['<>','id' , $art->id ])->all();
//$a = Yii::$app->formatter->asDate($art->create_at);
?>
<div class="events-w3layouts">
    <h2>News</h2>
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
        <?php foreach ( $art_2 as $key => $value){ ?>
        <div class="blog<?=$key+1?>-w3ls">
            <div class="col-md-4 blog-image-w3l">
                <a href="article/view?slug=<?= $art_2->slug ?>"><img src="http://gamesforum.vn/backend/web/uploads/<?= $art_2->image ?>" alt="<?= $art_2->title?> "/></a>
            </div>
            <div class="col-md-8 blog-text-w3ls">
                <a href="article/view?slug=<?= $art_2->slug ?>"><h4><?= $art_2->title?></h4></a>
                <div class="item_info">
                    <ul>
                        <li><a href="#"><i class="glyphicon glyphicon-user"></i><?= $art_2->create_by?></a></li>
                        <li><i class="glyphicon glyphicon-calendar"></i><?=Yii::$app->formatter->asDate($art_2->create_at); ?></li>
                        <li><a href="#"><i class="glyphicon glyphicon-eye-open"></i><?= $art_2->view_count?></a></li>
                    </ul>
                </div>
                <p><?=$art_2->desc ?></p>
                <a href="article/view?slug=<?= $art_2->slug ?>" class="blog-read">Read More</a>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php } ?>
    </div>
</div>

