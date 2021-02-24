<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\SignupForm */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use kartik\date\DatePicker;

$this->title = 'Cadastrar';
?>
<div class="site-signup">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <div class="panel-body">
            <div class="form-group row">
                <div class="col-md-6">
                    <?= $form->field($model, 'nome')->textInput(['autofocus' => true]) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model, 'sobrenome')->textInput(['autofocus' => true]) ?>
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

            <div class="form-group row">
                <div class="col-md-6">
                    <?= $form->field($model, 'email')->textInput() ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <?= $form->field($model, 'password')->passwordInput()->label('Senha') ?>
                </div>
            </div>

            <div class="form-group">
                <?= Html::submitButton('Cadastrar', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
