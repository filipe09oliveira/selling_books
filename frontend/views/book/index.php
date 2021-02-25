<?php

use yii\helpers\Html;

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
<div class="jumbotron" style="padding: 20px">
    <h2>Nossos Livros</h2>
</div>
<div class="book-index col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            Filtros
        </div>
        <div class="panel-body">
            <?php echo $this->render('_search', ['model' => $searchModel]); ?>
        </div>
    </div>
</div>

<div class="book-index col-md-9">
    <div class="panel panel-default">
        <div class="panel-body">
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
