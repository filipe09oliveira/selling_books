<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';

?>
<div class="site-login">
    <div class="panel panel-default" style="width: 400px; margin-left:auto;margin-right:auto;">
        <div class="panel-heading">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>

        <div class="panel-body">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div style="color:#999;margin:1em 0">
                Se você esqueceu sua senha, pode <?= Html::a('redefini-la', ['site/request-password-reset']) ?>.
                <br>
                Precisa de um novo e-mail de
                verificação? <?= Html::a('Reenviar', ['site/resend-verification-email']) ?>
            </div>

            <div class="form-group">
                <?= Html::submitButton('ENTRAR', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
            </div>
        </div>
    </div>


    <?php ActiveForm::end(); ?>
</div>
