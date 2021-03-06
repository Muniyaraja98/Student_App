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
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    // public $sourcePath = '@bower/';
    // public $css = ['admin-lte/dist/css/adminlte.css'];
    // public $js = ['admin-lte/dist/js/adminlte/app.js'];
    // public $depends = [
    //     'yii\web\YiiAsset',
    //     'yii\bootstrap\BootstrapAsset',
    //     'yii\bootstrap\BootstrapPluginAsset',
    // ];
}
