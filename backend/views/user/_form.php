<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

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
            <?= $form->field($model, 'email')->textInput() ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'password_hash')->passwordInput() ?>
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
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
