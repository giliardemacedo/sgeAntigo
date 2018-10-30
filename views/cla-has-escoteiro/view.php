<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ClaHasEscoteiro */

$this->title = $model->cla_idcla;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cla Has Escoteiros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cla-has-escoteiro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'cla_idcla' => $model->cla_idcla, 'cla_secao_idsecao' => $model->cla_secao_idsecao, 'escoteiro_idescoteiro' => $model->escoteiro_idescoteiro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'cla_idcla' => $model->cla_idcla, 'cla_secao_idsecao' => $model->cla_secao_idsecao, 'escoteiro_idescoteiro' => $model->escoteiro_idescoteiro], [
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
            'cla_idcla',
            'cla_secao_idsecao',
            'escoteiro_idescoteiro',
        ],
    ]) ?>

</div>
