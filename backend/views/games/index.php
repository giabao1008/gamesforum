<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel console\models\games\SearchGames */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Trò chơi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="games-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Games', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //  'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //  'id',

            'name',
//            'download',
            [
                'attribute' => 'logo',
                'format' => 'raw',
                'contentOptions' => [' style ' => 'height: 80px'],
                'value' => function ($model) {
                    return '<img class="img-small" src="http://gamesforum.vn/backend/web/uploads/' . $model->logo . '">';
                }
            ],
            [
                'attribute' => 'game_type',
                'format' => 'raw',
                'contentOptions' => [' style ' => 'height: 80px'],
                'value' => function ($model) {
                    return $model->gameType->name;
                }
            ],
            //'description',
            //'author',
            //'require',
            //'views_count',
            //'is_Hot',
            'create_at:dateTime',
            //'update_at',
            ['attribute' => 'status',
                'content' => function ($model) {
                    if ($model->status == 0) return '<span class="label label-default">  Disable </span>';
                    else  return '<span class="label label-success"> Enable  </span>';
                },
            ],
            //'create_by',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

<!--// Duyệt bài-->

