<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel console\models\games\SearchGameType */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Game Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="game-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Game Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',

            [
                'attribute' => 'logo',
                'format' => 'raw',
                'contentOptions' => [' style ' => 'height: 80px'],
                'value' => function($model){
                    return '<img class="img-small" src="http://gamesforum.vn/backend/web/uploads/'.$model->logo.'">';
                }
            ],
            [
                'attribute' => 'type',
                'content' => function ($model) {
                    if ($model->type == 1) return '<span class="label label-success"> Game Online </span>'; else
                        if ($model->type == 0) return '<span class="label label-default"> Game Offline </span>';
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
