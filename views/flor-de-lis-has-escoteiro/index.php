<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modelsFlorDeLisHasEscoteiroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Flor De Lis Has Escoteiros');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flor-de-lis-has-escoteiro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Flor De Lis Has Escoteiro'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'flor_de_lis_idflor_de_lis',
            'flor_de_lis_secao_idsecao',
            'escoteiro_idescoteiro',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
