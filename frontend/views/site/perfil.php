<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $user common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="jumbotron" style="padding: 20px">
    <h2>Meu Perfil</h2>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="user-form">

            <?php $form = ActiveForm::begin(); ?>

            <div class="form-group row">
                <div class="col-md-6">
                    <?= $form->field($user, 'nome')->textInput() ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($user, 'sobrenome')->textInput() ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <?= $form->field($user, 'email')->textInput() ?>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <?= $form->field($user, 'data_nascimento')->widget(DatePicker::class, [
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
                <?= Html::submitButton($user->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
