<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Clas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cla-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Cla'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idcla',
<<<<<<< HEAD
            'nome',
            'secao_idsecao',
=======
            'idsecao',
            'nome',
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
