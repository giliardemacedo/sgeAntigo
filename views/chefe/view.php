<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Chefe */

$this->title = $model->idchefe;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cheves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chefe-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idchefe' => $model->idchefe, 'idescoteiro' => $model->idescoteiro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idchefe' => $model->idchefe, 'idescoteiro' => $model->idescoteiro], [
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idchefe], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idchefe], [
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
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
        ],
    ]) ?>

</div>
