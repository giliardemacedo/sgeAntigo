<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FlorDeLisHasEscoteiro */

$this->title = $model->flor_de_lis_idflor_de_lis;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flor De Lis Has Escoteiros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flor-de-lis-has-escoteiro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'flor_de_lis_idflor_de_lis' => $model->flor_de_lis_idflor_de_lis, 'flor_de_lis_secao_idsecao' => $model->flor_de_lis_secao_idsecao, 'escoteiro_idescoteiro' => $model->escoteiro_idescoteiro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'flor_de_lis_idflor_de_lis' => $model->flor_de_lis_idflor_de_lis, 'flor_de_lis_secao_idsecao' => $model->flor_de_lis_secao_idsecao, 'escoteiro_idescoteiro' => $model->escoteiro_idescoteiro], [
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
            'flor_de_lis_idflor_de_lis',
            'flor_de_lis_secao_idsecao',
            'escoteiro_idescoteiro',
        ],
    ]) ?>

</div>
