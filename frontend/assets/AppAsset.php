<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/flexslider.css',
        'css/popup-box.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.min.js',
        'js/bootstrap.js',
        'js/jquery.flexisel.js',
        'js/jquery.flexslider.js',
        'js/jquery.magnific-popup.js',
        'js/modernizr.custom.53451.js',
        'js/responsiveslides.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
