<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Patrulha */

$this->title = $model->idpatrulha;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Patrulhas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patrulha-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idpatrulha], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idpatrulha], [
=======
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idpatrulha], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idpatrulha], [
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idpatrulha' => $model->idpatrulha, 'idtropa' => $model->idtropa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idpatrulha' => $model->idpatrulha, 'idtropa' => $model->idtropa], [
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
            'idpatrulha',
<<<<<<< HEAD
            'nome',
            'grito_guerra',
            'tropa_idtropa',
            'tropa_secao_idsecao',
=======
            'idtropa',
<<<<<<< HEAD
            'idsecao',
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'nome',
            'cores',
            'gritodeguerra',
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ],
    ]) ?>

</div>
