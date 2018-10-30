<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tropa */

$this->title = $model->idtropa;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tropas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tropa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idtropa' => $model->idtropa, 'secao_idsecao' => $model->secao_idsecao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idtropa' => $model->idtropa, 'secao_idsecao' => $model->secao_idsecao], [
=======
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idtropa' => $model->idtropa, 'idsecao' => $model->idsecao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idtropa' => $model->idtropa, 'idsecao' => $model->idsecao], [
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idtropa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idtropa], [
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
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
            'idtropa',
<<<<<<< HEAD
            'nome',
            'secao_idsecao',
=======
<<<<<<< HEAD
            'idsecao',
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'nome',
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ],
    ]) ?>

</div>
