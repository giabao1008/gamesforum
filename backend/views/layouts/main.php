<?php

/* @var $this \yii\web\View */

/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use backend\views\widgets\SidebarWiget;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php $baseUrl ?>/images/favicon.png" type="image/gif" sizes="16x16">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php include 'header.php' ?>
<div class="main">
    <?php if (Yii::$app->requestedRoute != 'site/login') { ?>
        <div class="col-xs-2">
            <?= SidebarWiget::widget(); ?>
        </div>
        <div class="col-xs-10">
            <?php echo $content; ?>
        </div>
    <?php } else { ?>
        <div class="col-md-12">
            <?php echo $content; ?>
        </div>
    <?php } ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
