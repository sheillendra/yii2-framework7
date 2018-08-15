<?php

/**
 * 
 * 
 */

namespace backend\themes\fw7\assets;

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
        '\backend\themes\fw7\assets\AppAsset'
    ];

}
