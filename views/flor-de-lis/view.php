<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\FlorDeLis */

$this->title = $model->idflor_de_lis;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flor De Lis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flor-de-lis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idflor_de_lis' => $model->idflor_de_lis, 'secao_idsecao' => $model->secao_idsecao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idflor_de_lis' => $model->idflor_de_lis, 'secao_idsecao' => $model->secao_idsecao], [
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
            'idflor_de_lis',
            'nome',
            'secao_idsecao',
        ],
    ]) ?>

</div>
