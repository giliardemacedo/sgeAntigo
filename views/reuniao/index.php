<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ReuniaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Reuniaos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reuniao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Reuniao'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idreuniao',
<<<<<<< HEAD
            'idgrupo',
            'data',
            'pauta',
=======
            'data',
            'pauta:ntext',
            'reuniaocol',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
