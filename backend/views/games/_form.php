<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use console\models\games\GameType;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model console\models\games\Games */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="games-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]) ?>

    <?= $form->field($model, 'game_type')->dropDownList(
            ArrayHelper::map(GameType::find()->all(),'id','name'),[
                    'prompt' => 'Loại game'
    ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'require')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'is_Hot')->dropDownList(
        [
            0=> 'Không',
            1=> 'Hot'
        ]
        ,[
            'prompt' => 'Game Hot ?'
        ]
    ) ?>

    <?= $form->field($model, 'status')->dropDownList(
        [
            0=> 'Ẩn',
            1=> 'Kích hoạt'
        ]
        ,[
            'prompt' => 'Trạng thái'
        ]
    ) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
