<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use common\models\LoginForm;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$model = new LoginForm();
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">  <h1><?= Html::encode($this->title) ?></h1></h5>
                    <p class="text-center">Please fill out the following fields to login:</p>
            </div>
            <div class="modal-body">
                    <div class="row">
                        <?php $form = ActiveForm::begin(['action' => ['site/login'],'method' => 'post','id' => 'login-form']); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        <div class="col-md-12">
                            <div class="col-md-6" style="color:#999;margin:1em 0">
                                <?= Html::a('Quên mật khẩu ?', ['site/request-password-reset']) ?>.
                            </div>
                            <div class="col-md-6 text-right" style="color:#999;margin:1em 0">
                                Hoặc <a href="site/signup"> Đăng ký</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
            </div>
        </div>
    </div>
</div>
