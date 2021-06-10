<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';

?>
<body>
<!-- Header 01 ================================================== -->
<header class="header_01 header_inner">
    <div class="header_btm">
        <h2>BEM VINDO DE VOLTA :)</h2>
    </div>
</header>


<!-- End Header 02
================================================== -->


<!-- Main
================================================== -->
<main>
    <div class="only-form-pages">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="only-form-box">
                        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                        <div class="com_class_form">
                            <div class="form-group">

                                <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

                            </div>
                            <div class="form-group">

                                <?= $form->field($model, 'password')->passwordInput() ?>

                            </div>


                            <div class="form-group">
                                <?= Html::submitButton('ENTRAR', ['class' => 'btn btn-primary btn-block', 'name' => 'login-button']) ?>
                            </div>
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'form-check-input']) ?>
                                </label>
                            </div>
                            <div>
                                <a class="lost_password" href="lost-password.html"> Esqueci minha senha </a>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                        <div class="social_login">
                            <p class="or_span"><span>or</span></p>
                            <button class="btn btn-facebook"><i class="fab fa-facebook-f"></i> Log In via Facebook
                            </button>
                            <button class="btn btn-google"><i class="fab fa-google-plus-g"></i> Register via Google+
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

