<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use backend\themes\fw7\assets\AppAsset;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">
    <head>
        <meta charset="<?php echo Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="theme-color" content="#2196f3">
        <meta http-equiv="Content-Security-Policy" content="default-src * 'self' 'unsafe-inline' 'unsafe-eval' data: gap:">
        <?php echo Html::csrfMetaTags() ?>
        <title><?php echo $this->title ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div id="app">
            <div class="statusbar"></div>
            <?php echo $this->render('_left') ?>
            <?php echo $this->render('_right') ?>
            <div class="view view-main view-init ios-edges" data-url="/">
                <?php echo $content ?>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php
$this->registerJsVar('envDetail', YII_ENV_DETAIL);
$this->endPage();
