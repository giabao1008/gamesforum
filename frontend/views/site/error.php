<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $code int */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
$code = $exception->statusCode;
//var_dump($exception->statusCode);die();
?>
<?php
if($exception->statusCode == '404') {
?>
<div class="site-error">
    <div class="container">
        <div class="text-center">
            <figure>
                <img src="http://gamesforum.vn/backend/web/uploads/404.png" alt="" style="width:550px">
            </figure>
        </div>
        <div class="alert alert-danger text-center col-md-12">
            Không tìm thấy trang bạn muốn truy cập vào. Vui lòng quay lại.
            <div class="clearfix text-right col-md-12"> _-Administrator-_</div>
        </div>

    </div>
</div>
<?php } elseif ($exception->statusCode == 403){?>
    <div class="site-error">
        <div class="container">
            <div class="text-center">
                <figure>
                    <img src="http://gamesforum.vn/backend/web/uploads/404.png" alt="" style="width:550px">
                </figure>
            </div>
            <div class="alert alert-danger text-center col-md-12">
               Bạn không được cấp quyền truy cập vào trang này hoặc chưa đăng nhập. Vui lòng quay lại sau.
                <div class="clearfix text-right col-md-12"> _-Administrator-_</div>
            </div>

        </div>
    </div>

<?php } ?>
