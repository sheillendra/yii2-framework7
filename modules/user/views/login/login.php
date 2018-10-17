<?php
/* @var $this \yii\web\View */

use yii\helpers\Html;
use sheillendra\fw7\assets\LoginAsset;

LoginAsset::register($this);
$this->title = 'Login';
?>
<div class="view view-main view-init ios-edges" data-url="/">
    <div class="page no-navbar no-toolbar no-swipeback">
        <div class="page-content login-screen-content">
            <div class="login-screen-title"><img src="fw7/img/logo.png" width="80"/><div>Warehouse System</div></div>
            <?php echo Html::beginForm(['/user/login'], 'post', ['class' => 'form-ajax-submit']) ?>
            <div class="list">
                <ul>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-title item-label">Username</div>
                            <div class="item-input">
                                <input type="text" name="LoginForm[username]" placeholder="Your username">
                            </div>
                        </div>
                    </li>
                    <li class="item-content item-input">
                        <div class="item-inner">
                            <div class="item-title item-label">Password</div>
                            <div class="item-input">
                                <input type="password" name="LoginForm[password]" placeholder="Your password">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="block">
                <p class="row">
                    <button class="col button button-small button-round button-outline">Login</button>
                </p>
            </div>
            <?php echo Html::endForm() ?>
        </div>
    </div>
</div>