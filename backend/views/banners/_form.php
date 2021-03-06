<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model console\models\banners\Banners */
/* @var $form yii\widgets\ActiveForm */
$banners = new \console\models\banners\Banners();
?>

<div class="banners-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file')->fileInput() ?>

    <?= $form->field($model, 'status')->dropDownList(
        [
            0=> 'Ẩn',
            1=> 'Kích hoạt'
        ]
        ,[
            'prompt' => 'Chọn trạng thái'
        ]
    ) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>
