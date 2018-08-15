<?php

/**
 * 
 * 
 */

namespace backend\themes\fw7\assets;

use yii\web\AssetBundle;

class Fw7Asset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fw7/framework7-2.2.1/dist/css/framework7.min.css',
    ];
    public $js = [
        'fw7/framework7-2.2.1/dist/js/framework7.min.js',
    ];
//    public $depends = [
//        
//    ];

}
