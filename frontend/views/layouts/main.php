<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/main/fav.png" type="image/gif" sizes="64x64">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= $this->title . ' — ' . Yii::$app->name ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<?= $this->render('/site/nav') ?>

<?= $content ?>

<?= $this->render('/site/footer') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
