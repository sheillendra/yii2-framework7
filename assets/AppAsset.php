<?php

/**
 * 
 * 
 */

namespace backend\themes\fw7\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fw7/css/app.css',
    ];
    public $js = [
        'fw7/js/routes.js',
        'fw7/js/app.js',
    ];

    public $depends = [
        '\backend\themes\fw7\assets\Fw7Asset'
    ];
}
