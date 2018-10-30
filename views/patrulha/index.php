<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PatrulhaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Patrulhas');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patrulha-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Patrulha'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idpatrulha',
<<<<<<< HEAD
            'nome',
            'grito_guerra',
            'tropa_idtropa',
            'tropa_secao_idsecao',
=======
            'idtropa',
<<<<<<< HEAD
            'idsecao',
            'nome',
            'cores',
            //'gritodeguerra',
=======
            'nome',
            'cores',
            'gritodeguerra',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
