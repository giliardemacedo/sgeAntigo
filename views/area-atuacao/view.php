<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AreaAtuacao */

$this->title = $model->idareaatuacao;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Area Atuacaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-atuacao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idareaatuacao' => $model->idareaatuacao, 'idatividade' => $model->idatividade], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idareaatuacao' => $model->idareaatuacao, 'idatividade' => $model->idatividade], [
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
            'idareaatuacao',
            'idatividade',
            'nome',
            'quantidade',
        ],
    ]) ?>

</div>
