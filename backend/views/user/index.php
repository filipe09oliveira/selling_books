<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\grid\ActionColumn;
use common\models\User;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
?>
<div class="user-index">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>
                <?= Html::a('Adicionar Clientes', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
        </div>


        <div class="panel-body">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    'nome',
                    'sobrenome',
                    'email',
                    'data_nascimento',
                    [
                        'attribute' => 'status',
                        'value' => function (User $model){
                            return User::listStatus()[$model->status];
                        },
                        'filter' => User::listStatus()
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
