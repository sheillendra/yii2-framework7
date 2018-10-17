<?php

/**
 * 
 * 
 */

namespace sheillendra\fw7\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fw7/css/login.css',
    ];
    public $js = [
        'fw7/js/login.js',
    ];
    public $depends = [
        '\sheillendra\fw7\assets\AppAsset'
    ];

}
