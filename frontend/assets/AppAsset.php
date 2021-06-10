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
        'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800',
        'https://fonts.googleapis.com/css?family=Shadows+Into+Light',
        'https://fonts.googleapis.com/css?family=Roboto:400,700,300',

        'https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap&subset=latin-ext',
        'https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet',

        '/css/main/all.min.css',
        '/css/main/aos.css',
        '/css/main/bootstrap.min.css',
        '/css/main/select2.min.css',
        '/css/main/owl.carousel.min.css',
        '/css/main/style.css',
        '/css/main/color-1.css',
        '/fonts/fontawesome/pro.min.css',
    ];
    public $js = [
        '/js/main/jquery-3.4.1.min.js',
        '/js/main/select2.min.js',
        '/js/main/bootstrap.min.js',
        '/js/main/owl.carousel.min.js',
        '/js/main/aos.js',
        '/js/main/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
