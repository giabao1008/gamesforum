<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model console\models\games\GameType */

$this->title = 'Create Game Type';
$this->params['breadcrumbs'][] = ['label' => 'Game Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="game-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
