<?php

/**
 * 
 * 
 */

namespace sheillendra\fw7\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/fw7/app.css',
    ];
    public $js = [
        'js/fw7/routes.js',
        'js/fw7/app.js',
    ];

    public $depends = [
        '\sheillendra\fw7\assets\Fw7Asset'
    ];
}
