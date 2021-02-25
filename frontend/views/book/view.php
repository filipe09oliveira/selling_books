<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Book */

$this->title = $model->nome;
\yii\web\YiiAsset::register($this);

?>
<div class="jumbotron" style="padding: 20px">
    <h2><?= $model->nome ?></h2>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="media">
            <div class="media-left">
                <img src="/imagens/book2.jpg" class="media-object" style="width:250px">
                <br>
                <?php if (empty($model->clientBook)) { ?>
                    <?php if ($model->status == \common\models\Book::AVENDA && !Yii::$app->user->isGuest) { ?>
                        <?= Html::a('<i class="glyphicon glyphicon-shopping-cart"></i>' . ' Comprar', ['comprar', 'book_id' => $model->id], [
                            'class' => 'btn btn-default btn-success btn-blok',
                            'data' => [
                                'confirm' => 'Tem certeza que deseja comprar o livro ' . $model->nome . '?',
                                'method' => 'post',
                            ]
                        ]); ?>
                    <?php } else { ?>
                        <?= Html::a('<i class="glyphicon glyphicon-shopping-cart"></i>' . ' Comprar', ['/login'], [
                            'class' => 'btn btn-default btn-success btn-blok',
                        ]); ?>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="media-body" style="padding: 20px; text-align: justify">
                <h4 class="media-heading">Resumo</h4>
                <p><?= $model->resumo ?></p>
            </div>
        </div>
    </div>
    <div class="panel-footer ">
        <div class="row">
            <div class="row">
                <div class="col-md-4 border-right text-center small">
                    <strong class="text-muted small font-weight-bold">Edição: </strong>
                    <div class="text-overflow">
                        <span class="small">
                            <?= $model->edicao ?>
                        </span>
                    </div>
                </div>

                <div class="col-md-4 border-right text-center small">
                    <strong class="text-muted small font-weight-bold">Autor: </strong>
                    <div class="text-overflow">
                        <span class="small">
                            <?= $model->autor ?>
                        </span>
                    </div>
                </div>

                <div class="col-md-4 border-right text-center small">
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