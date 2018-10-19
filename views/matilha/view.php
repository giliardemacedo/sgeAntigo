<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Matilha */

$this->title = $model->idmatilha;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Matilhas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matilha-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idmatilha], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idmatilha], [
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
            'idmatilha',
            'idalcateia',
            'idsecao',
            'nome',
        ],
    ]) ?>

</div>
