<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = 'http://gamesforum.vn/';
    public $css = [
        'css/site.css',
        'css/flexslider.css',
        'css/popup-box.css',
        'css/style.css',
    ];
    public $js = [
        'js/bootstrap.js',
        'js/responsiveslides.min.js',
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
   public $jsOptions = ['position' => \yii\web\View::POS_END];

}
