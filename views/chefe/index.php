<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChefeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Cheves');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chefe-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Chefe'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idchefe',
<<<<<<< HEAD
            'idescoteiro',
            'categoria',
=======
            'idadm',
            'idescoteiro',
            'categoria',
            'caixa_idcaixa',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
