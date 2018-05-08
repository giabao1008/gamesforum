<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model console\models\games\GameType */

$this->title = 'Update Game Type: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Game Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="game-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
