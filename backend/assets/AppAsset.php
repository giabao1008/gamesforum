<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = 'http://gamesforum.vn/backend/web';
    public $css = [
        'css/admin.css',
        'css/font-awesome.min.css',
    ];
    public $js = [
        'js/admin.js',
        'js/html5shiv.min.js',
        'js/intro.min.js',
        'js/respond.min.js',
        'js/jquery.backstretch.js',
        'js/jquery.backstretch.min.js',
        'js/placeholder.js',
        'js/scripts.js'

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
