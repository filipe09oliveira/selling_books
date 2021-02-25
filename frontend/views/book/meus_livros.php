<?php

use yii\bootstrap\Html;

/* @var $meusLivros \common\models\ClientBook */

$this->title = 'Meus livros';
?>
<div class="jumbotron" style="padding: 20px">
    <h2>Meus Livros</h2>
</div>
<?php if (empty($meuLivro)) { ?>
    <div class="alert alert-warning" role="alert">Você tem nenhum livro comprado !</div>
<?php } else { ?>
<div class="class-client-book-index">
    <div class="panel panel-default">
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
                            <div class="media">
                                <div class="media-left">
                                    <img src="/imagens/book2.jpg" class="media-object" style="width:100px">
                                </div>
                                <div class="media-body" style="padding: 20px">
                                    <h4 class="media-heading">
                                        <strong>
                                            <?= Html::a($meuLivro->book->nome, ['livros-venda', 'id' => $meuLivro->book->id], [
                                                'class' => 'show-modal',
                                            ]) ?>
                                        </strong></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</div>
