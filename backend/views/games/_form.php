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

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'require')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'views_count')->textInput() ?>

    <?= $form->field($model, 'is_Hot')->textInput() ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'create_by')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
