<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel console\models\contacts\SearchContacts */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contacts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contacts', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            'email:email',
            'subject',

            ['attribute' =>  'is_read',
                'headerOptions' => [
                    'style' => 'width: 150px; text-align: center'
                ],
                'contentOptions' => [
                    'style' => 'width: 150px; text-align: center'],
                'content' => function ($model) {
                    if ($model->is_read == 0) return '<span class="label label-default"> Chưa đọc </span>';
                    else  return '<span class="label label-success"> Đã đọc </span>';
                }
            ],
            ['class' => 'yii\grid\ActionColumn',
                'template'=> '{view} {delete}'

            ],
        ],
    ]); ?>
</div>
