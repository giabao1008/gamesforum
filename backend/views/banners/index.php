<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel console\models\banners\SearchBanners */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Banners';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="banners-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Banners', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'image',
                'format' => 'raw',
                'contentOptions' => [' style ' => 'height: 80px'],
                'value' => function($model){
                    return '<img class="img-small" src="http://gamesforum.vn/backend/web/uploads/'.$model->image.'">';
                }
            ],
            ['attribute' => 'status',
                'headerOptions' => [
                'style' => 'width: 150px; text-align: center'
                ],
            'contentOptions' => [
                'style' => 'width: 150px; text-align: center'],
                'content' => function ($model) {
                    if ($model->status == 0) return '<span class="label label-danger"> Ẩn </span>'; else
                        if ($model->status == 1) return '<span class="label label-success"> Hiện </span>'; else
                            '<span class="label label-default"> Đã xóa </span>';
                }
            ],
            'create_at:dateTime',
            //'create_by',
            //'update_at',
            //'update_by',
            ['class' => 'yii\grid\CheckboxColumn'],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php
  //  echo LinkPager::widget([  'pagination' => 2,  ]);
    ?>
</div>
