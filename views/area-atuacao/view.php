<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AreaAtuacao */

<<<<<<< HEAD
$this->title = $model->idarea_atuacao;
=======
$this->title = $model->idareaatuacao;
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Area Atuacaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="area-atuacao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idarea_atuacao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idarea_atuacao], [
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idareaatuacao' => $model->idareaatuacao, 'idatividade' => $model->idatividade], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idareaatuacao' => $model->idareaatuacao, 'idatividade' => $model->idatividade], [
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
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
<<<<<<< HEAD
            'idarea_atuacao',
            'nome',
=======
            'idareaatuacao',
            'idatividade',
            'nome',
            'quantidade',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ],
    ]) ?>

</div>
