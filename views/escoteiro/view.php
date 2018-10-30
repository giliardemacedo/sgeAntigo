<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Escoteiro */

$this->title = $model->idescoteiro;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Escoteiros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escoteiro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idescoteiro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idescoteiro], [
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
            'idescoteiro',
            'nome',
            'nascimento',
            'cpf',
            'rg',
            'sexo',
            'registro_ueb',
            'estado',
            'encargo_patrulha',
            'chefe',
            'categoria_chefe',
            'endereco_idendereco',
            'contato_idcontato',
        ],
    ]) ?>

</div>
