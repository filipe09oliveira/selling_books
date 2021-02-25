<?php

use kartik\grid\ActionColumn;
use kartik\grid\GridView;
use yii\helpers\Html;
use common\models\Book;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Livros';
?>
<div class="book-index">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Adicionar livro', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
        </div>


        <div class="panel-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    'nome',
                    'autor',
                    'edicao',
                    [
                        'attribute' => 'status',
                        'value' => function (Book $model){
                            return Book::listStatus()[$model->status];
                        },
                        'filter' => Book::listStatus()
                    ],

                    [
                        'class' => ActionColumn::class,
                        'width' => '90px',
                        'visibleButtons' => [
                            'view' => false,
                        ],
                        'buttons' => [
                            'update' => function ($url, $model) {
                                return Html::a('<i class="glyphicon glyphicon-pencil"></i>', ['update', 'id' => $model->id], [
                                    'class' => 'btn btn-primary btn-sm',
                                ]);
                            },
                            'delete' => function ($url, $model) {
                                return Html::a('<i class="glyphicon glyphicon-remove"></i>', ['delete', 'id' => $model->id], [
                                    'class' => 'btn btn-danger btn-sm',
                                    'data' => [
                                        'confirm' => 'Tem certeza que deseja excluir ' . $model->nome . '?',
                                        'method' => 'post',
                                    ]
                                ]);
                            },
                        ],
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>