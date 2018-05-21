<?php
    use console\models\contacts\Contacts;
    $total = Contacts::find()->count();
?>
<div id="sidebar" role="navigation">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">
                <i class="fa fa-th"></i><span> Danh mục quản lý</span>
                <b class="fa fa-plus-sign visible-xs pull-right"></b>
            </h3>
        </div>
        <ul id="menu" class="list-group">
            <li class="list-group-item">
                <a href="http://gamesforum.vn/backend/games.html">
                    <i class="fa fa-gamepad" aria-hidden="true"></i> <span>Games</span>
                </a>
            </li>
            <li class="list-group-item">
                <a href="http://gamesforum.vn/backend/game-type.html">
                    <i class="fa fa-fire"></i><span>Loại game</span>
                </a>
            </li>
            <li class="list-group-item">
                <a href="http://gamesforum.vn/backend/contacts.html">
                    <i class="fa fa-envelope-o"></i> <span>Phản hồi<span class="badge pull-right"><?=  $total?></span></span>
                </a>
            </li>
            <li class="list-group-item">
                <a href="http://gamesforum.vn/backend/banners.html">
                    <i class="fa fa-picture-o"></i> <span>Banner</span>
                </a>
            </li>
            <li class="list-group-item">
                <a href="http://gamesforum.vn/backend/articles.html">
                    <i class="fa fa-file-text-o" aria-hidden="true"></i> <span>Bài viết</span>
                </a>
            </li>
            <li class="list-group-item">
                <a href="http://gamesforum.vn/backend/users.html">
                    <i class="fa fa-user"></i> <span>Tài khoản thường</span>
                </a>
            </li>
        </ul>
    </div>
</div>
