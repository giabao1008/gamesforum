<?php
// Dùng để rewrite url =>   'url thay thế' => 'url được thay thế'
return [
    'trang-chu' => 'site/index',
    'about-us' => 'site/about',
    'games' => 'site/games',
    'news' => 'site/news',
    'contact' => 'site/contact',
    'login'=> 'site/login',
    'logout' => 'site/logout',
    'upload' => 'site/upload',
    'article/<slug:[a-zA-Z0-9-]+>/'=>'article/view',
    'game/<slug:[a-zA-Z0-9-]+>/'=>'game/view',
    'error-403.html' => 'site/login'
//    [
//        'class' => 'yii\rest\UrlRule',
//        'controller' => 'demo'
//    ]

];