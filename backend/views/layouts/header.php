<?php

use yii\helpers\Html;

?>
<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://gamesforum.vn/backend/"><i class="fa fa-cogs"></i> Quản trị hệ thống</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <?php if (Yii::$app->user->isGuest) {
                    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                } else {
                    echo ' <a href="#" class="dropdown-toggle" data-toggle="dropdown">' . Yii::$app->user->identity->username . ' <b class="caret"></b></a>';
                    echo ' <ul class="dropdown-menu"> ';
                    echo '<li>' . Html::a('Đăng xuất',
                            ['site/logout'],
                            ['class' => 'logout', 'data-method' => 'post']) . '</li>  </ul>';
                } ?>


            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>