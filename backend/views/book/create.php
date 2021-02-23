<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Book */

$this->title = 'Adicionar Livros';
?>
<div class="book-create">
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
