<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Book;

/* @var $this yii\web\View */
/* @var $model frontend\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="form-group row">
        <div class="col-md-6">
            <?= $form->field($model, 'nome') ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'autor') ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'status')->dropDownList(Book::listStatus(), ['prompt' => 'SELECIONE']) ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Filtrar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpar', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
