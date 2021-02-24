<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Book */

$this->title = $model->nome;
\yii\web\YiiAsset::register($this);
?>
<div class="panel panel-default" style="margin-top: 80px">
    <ul class="list-group">
        <li class="list-group-item">
                <span class="badge" style="background-color: white; margin-top: 30px">
                    <?php if ($model->status == \common\models\Book::AVENDA) { ?>
                        <?= Html::a('<i class="glyphicon glyphicon-shopping-cart"></i>'. ' Comprar', ['comprar', 'book_id' => $model->id], [
                            'class' => 'btn btn-default btn-success',
                            'data' => [
                                'confirm' => 'Tem certeza que deseja comprar o livro ' . $model->nome . '?',
                                'method' => 'post',
                            ]
                        ]); ?>
                    <?php } ?>
                </span>
            <div>
                <label>Livro:</label>
                <?= $model->nome ?>
            </div>
            <hr>
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
                    <strong class="text-muted small font-weight-bold">Autor: </strong>
                    <div class="text-overflow">
                        <span class="small">
                            <?= $model->autor ?>
                        </span>
                    </div>
                </div>

                <div class="col-md-2 border-right text-center small">
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
