<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">
    <br>
    <br>
    <div class="alert alert-danger" style="text-align: center">
        <h3>NÃO ENCONTRADO </h3>
        <p>A PÁGINA QUE VOCÊ TENTOU ACESSAR NÃO EXISTE.</p>
        <hr>
        <?= Html::a(''. 'Voltar', ['/'], ['class' => 'btn btn-primary btn-sm']) ?>
    </div>
</div>

