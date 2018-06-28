<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Xin chào <?= $user->username ?>,

Click vào link sau để truy cập tới trang lấy lại mật khẩu:

<?= $resetLink ?>
