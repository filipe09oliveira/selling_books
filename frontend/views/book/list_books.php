<?php

use yii\helpers\Html;

/**
 * @var $model \common\models\Book
 */

?>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-body">
            <strong>
                <?= Html::a($model->nome, ['livros-venda', 'id' => $model->id], [
                    'class' => 'show-modal',
                    'title' => 'Clique para detalhar',
                    'data-target' => '#modal',
                ]) ?>
            </strong>
        </div>
        <div class="panel-footer">
            <div class="row">
                <div class="row">
                    <div class="col-md-6 border-right text-center small">
                        <strong class="text-muted small font-weight-bold"><strong>Autor: </strong></strong>
                        <div class="text-overflow">
                        <span class="small">
                            <?= $model->autor ?>
                        </span>
                        </div>
                    </div>

                    <div class="col-md-6 border-right text-center small">
                        <strong class="text-muted small font-weight-bold">Status do Produto: </strong>
                        <div class="text-overflow">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

