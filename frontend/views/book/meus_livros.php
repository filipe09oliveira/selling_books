<?php

use yii\bootstrap\Html;

/* @var $meusLivros \common\models\ClientBook */

$this->title = 'Meus livros';
?>

<div class="class-client-book-index">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3><?= Html::encode($this->title) ?></h3>
        </div>
        <div class="panel-body">
            <?php foreach ($meusLivros as $meuLivro) { ?>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge" style="background-color: white; margin-top: 30px">
                        <?= Html::a('<i class="glyphicon glyphicon-trash"></i>', ['retirar', 'book_id' => $meuLivro->book->id], [
                            'class' => 'btn btn-default btn-danger',
                            'data' => [
                                'confirm' => 'Tem certeza que deseja retirar o livro ' . $meuLivro->book->nome . '?',
                                'method' => 'post',
                            ]
                        ]); ?>
                </span>
                    <div>
                        <label>Livro:</label>
                        <?= $meuLivro->book->nome ?>
                    </div>
                    <div>
                        <label>Resumo</label>
                        <div style="max-width: 850px">
                            <?= $meuLivro->book->resumo ?>
                        </div>

                    </div>
                </li>
            </ul>
            <?php } ?>
        </div>
    </div>
</div>
