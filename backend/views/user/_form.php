<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use common\models\User;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group row">
        <div class="col-md-6">
            <?= $form->field($model, 'nome')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'sobrenome')->textInput() ?>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <?= $form->field($model, 'data_nascimento')->widget(DatePicker::class, [
                'type' => DatePicker::TYPE_COMPONENT_PREPEND,
                'readonly' => false,
                'language' => 'pt-BR',
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'dd/mm/yyyy',
                ]
            ]) ?>
        </div>

        <div class="col-md-6">
            <?= $model->isNewRecord ? '' : $form->field($model, 'status')->widget(Select2::class, [
                'language' => Yii::$app->language,
                'data' => User::listStatus(),
                'theme' => Select2::THEME_BOOTSTRAP,
                'options' => ['placeholder' => 'Selecione um status'],
                'pluginOptions' => [
                    'allowClear' => true,
                ],

            ]) ?>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <?= $form->field($model, 'email')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $model->isNewRecord ? $form->field($model, 'password_hash')->passwordInput() : '' ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
