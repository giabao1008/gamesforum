<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="top-content">
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Login to our site</h3>
                            <p>Enter your username and password to log on:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <?php $form = ActiveForm::begin(['id' => 'login-form', 'options' => ['class' => 'login-form']]); ?>
                        <div class="form-group">
                            <label class="sr-only" for="form-username">Username</label>
                            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'id' => 'form-username', 'class' => ['form-username form-control']]) ?>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Username</label>
                            <?= $form->field($model, 'password')->passwordInput(['id' => 'form-password', 'class' => ['form-password form-control']]) ?>
                        </div>
                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn ', 'name' => 'login-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>