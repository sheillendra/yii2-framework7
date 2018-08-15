<?php

/**
 * 
 * 
 */

namespace backend\themes\fw7\assets;

use yii\web\AssetBundle;

class ProductAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'fw7/css/product.css',
    ];
    public $js = [
        'fw7/js/product.js',
    ];
    public $depends = [
        '\backend\themes\fw7\assets\AppAsset'
    ];

}
