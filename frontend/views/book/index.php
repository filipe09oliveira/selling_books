<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Livros a venda';
?>

<?php
$funcionarioSearch = Yii::$app->request->get('FuncionarioSearch');
$funcionarioSearchCount = count(isset($funcionarioSearch) ? $funcionarioSearch : []);

$this->registerJs("
    $('#extended-search-lnk').on('click', function(e){
        e.preventDefault();
        $('#extended-search').toggle();
    })
");
?>

<div class="book-index">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3><?= Html::encode($this->title) ?></h3>
            <?= Html::a('<i
                                class="fas fa-filter fa-lg"></i>   ' . 'Filtro', ['#'], [
                'class' => 'btn btn-primary btn-laranja btn-sm',
                'id' => 'extended-search-lnk',
                'helper-id' => 'filtro',
            ]) ?>
        </div>
        <div class="panel-body">
            <div id="extended-search" style="display: none;">
                <?php echo $this->render('_search', ['model' => $searchModel]); ?>
            </div>
            <?= \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => 'list_books',
                'layout' => "{items}\n{pager}"
            ])
            ?>
        </div>
    </div>
</div>

<?php
$funcionarioSearch = Yii::$app->request->get('FuncionarioSearch');
$funcionarioCount = count(isset($funcionarioSearch) ? $funcionarioSearch : []);
if ($funcionarioCount > 0) {
    $this->registerJs('
    $("#extended-search").toggle();;
');
}
?>
