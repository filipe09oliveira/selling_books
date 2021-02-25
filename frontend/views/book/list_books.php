<?php

use yii\helpers\Html;

/**
 * @var $model \common\models\Book
 */

?>
<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="text-center">
                <img src="imagens/book2.jpg" class="img-rounded" style="width:150px">
            </div>

            <br>

            <strong>
                <?= Html::a($model->nome, ['livros-venda', 'id' => $model->id], [
                    'class' => 'show-modal',
                    'title' => 'Clique para detalhar',
                    'data-target' => '#modal',
                ]) ?>
            </strong>

            <div>
                <strong class="text-muted small font-weight-bold"><strong><?= $model->autor ?></strong></strong>
            </div>

            <br>

            <span class="small">
                <?php if ($model->status == \common\models\Book::AVENDA) { ?>
                    <span class="badge" style="background-color: #4cae4c">
                                    Disponível
                    </span>
                <?php } else { ?>
                    <span class="badge" style="background-color: red">
                        Sem estoque
                    </span>
                <?php } ?>
            </span>

            <br><br>

            <div>
                <?= Html::a('SAIBA MAIS', ['book/livros-venda', 'id' => $model->id], [
                    'class' => 'btn btn-default btn-block',
                    'id' => 'extended-search-lnk',
                    'helper-id' => 'filtro',
                ]) ?>
            </div>

        </div>
    </div>
</div>

