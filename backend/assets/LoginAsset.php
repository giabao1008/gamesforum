<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = 'http://gamesforum.vn/backend/web';
    public $css = [
        'css/form-elements.css',
        'css/style.css',

    ];
    public $js = [
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
