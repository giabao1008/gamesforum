<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use yii\captcha\CaptchaAction;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <div class="site-contact col-lg-offset-3 col-md-6">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
           Bạn có thắc mắc hoặc góp ý với website chúng tôi vui lòng điền vào form sau
        </p>

        <div class="row">
                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'subject') ?>

                <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Gửi yêu cầu', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
                <?php ActiveForm::end(); ?>
        </div>

    </div>
</div>
<div class="col-md-6"></div>