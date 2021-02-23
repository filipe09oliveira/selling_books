<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;

/**
 * @var $model \common\models\Book
 */

?>

<div class="panel panel-default">
    <ul class="list-group">
        <li class="list-group-item">
                <span class="badge" style="background-color: white; margin-top: 30px">
                    <?= Html::a('<i class="glyphicon glyphicon-eye-open"></i>', ['view', 'id' => $model->id], [
                        'class' => 'btn btn-default btn-primary show-modal',
                        'data-target' => '#modal',
                        'data-header' => 'Informações do Livro'
                    ]) ?>

                    <?php if ($model->status == \common\models\Book::AVENDA) { ?>
                        <?= Html::a('<i class="glyphicon glyphicon-piggy-bank"></i>', ['comprar', 'book_id' => $model->id], [
                            'class' => 'btn btn-default btn-success',
                        ]); ?>
                    <?php } ?>
                </span>
            <div>
                <label>Livro:</label>
                <?= $model->nome ?>
            </div>
            <div>
                <label>Resumo</label>
                <div style="max-width: 850px">
                    <?= $model->resumo ?>
                </div>

            </div>
        </li>
    </ul>
    <div class="panel-footer ">
        <div class="row">
            <div class="row">
                <div class="col-md-2 border-right text-center small">
                    <strong class="text-muted small font-weight-bold">Edição: </strong>
                    <div class="text-overflow">
                        <span class="small">
                            <?= $model->edicao ?>
                        </span>
                    </div>
                </div>
                <div class="col-md-2 border-right text-center small">
                    <strong class="text-muted small font-weight-bold">Vendido: </strong>
                    <div class="text-overflow">
                        <span class="small">
                            <?php if ($model->status == \common\models\Book::AVENDA) { ?>
                                <span class="badge" style="background-color: #4cae4c">
                                    A venda
                                </span>
                            <?php } else { ?>
                                <span class="badge" style="background-color: red">
                                    Sem estoque
                                </span>
                            <?php } ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

