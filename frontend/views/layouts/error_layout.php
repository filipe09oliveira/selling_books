<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAssetErro;
use frontend\assets\AppAssetLogin;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

\frontend\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta lang="pt-br">
    <meta name="geo.region" content="Brasil">
    <meta name="keywords" content="vagas,emprego,estagio,job,busca emprego,sosvagas,sos">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">

    <div class="container container-max">
        <?= $content ?>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
