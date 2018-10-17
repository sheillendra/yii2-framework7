<?php

/**
 * 
 * 
 */

namespace sheillendra\fw7\assets;

use yii\web\AssetBundle;

class DashboardAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fw7/css/dashboard.css',
    ];
    public $js = [
        'fw7/js/dashboard.js',
    ];
    public $depends = [
        '\sheillendra\fw7\assets\C3Asset',
        '\sheillendra\fw7\assets\AppAsset'
    ];

}
