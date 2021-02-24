<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = 'Update User: ' . $model->nome;
?>
<div class="user-update">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>

        <div class="panel-body">
            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
        </div>

    </div>
</div>
