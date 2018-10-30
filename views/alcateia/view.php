<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Alcateia */

$this->title = $model->idalcateia;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alcateias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alcateia-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idalcateia' => $model->idalcateia, 'idsecao' => $model->idsecao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idalcateia' => $model->idalcateia, 'idsecao' => $model->idsecao], [
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
            'idalcateia',
            'nome',
            'idsecao',
        ],
    ]) ?>

</div>
