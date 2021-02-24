<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Book */

$this->title = $model->nome;
\yii\web\YiiAsset::register($this);
?>
<div class="book-view">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2>Detalhes do livro: <?= Html::encode($this->title) ?></h2>
        </div>

        <div class="panel-body">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'nome',
                    'resumo',
                    'autor',
                    'edicao',
                ],
            ]) ?>
        </div>
    </div>
</div>
