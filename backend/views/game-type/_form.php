<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model console\models\games\GameType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="game-type-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'type')->dropDownList(
        [
            0=> 'Offline',
            1=> 'Online'
        ]
        ,[
            'prompt' => 'Chọn thể loại'
        ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>