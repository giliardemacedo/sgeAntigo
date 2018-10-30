<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cla */

$this->title = $model->idcla;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cla-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idcla' => $model->idcla, 'secao_idsecao' => $model->secao_idsecao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idcla' => $model->idcla, 'secao_idsecao' => $model->secao_idsecao], [
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idcla' => $model->idcla, 'idsecao' => $model->idsecao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idcla' => $model->idcla, 'idsecao' => $model->idsecao], [
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
            'idcla',
<<<<<<< HEAD
            'nome',
            'secao_idsecao',
=======
            'idsecao',
            'nome',
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ],
    ]) ?>

</div>
