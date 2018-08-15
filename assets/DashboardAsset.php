<?php

/**
 * 
 * 
 */

namespace backend\themes\fw7\assets;

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
        '\backend\themes\fw7\assets\C3Asset',
        '\backend\themes\fw7\assets\AppAsset'
    ];

}
