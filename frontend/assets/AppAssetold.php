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
        // 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
        'chart.js/Chart.min.css'
    ];
    public $js = [
      'chart.js/Chart.bundle.min.js'
    ];
    public $depends = [
        'dmstr\adminlte\web\AdminLteAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset'

    ];
}
