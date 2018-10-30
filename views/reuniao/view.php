<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reuniao */

$this->title = $model->idreuniao;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Reuniaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reuniao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idreuniao], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idreuniao], [
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
            'idreuniao',
<<<<<<< HEAD
            'data',
            'pauta',
            'grupo_idgrupo',
=======
<<<<<<< HEAD
            'idgrupo',
            'data',
            'pauta',
=======
            'data',
            'pauta:ntext',
            'reuniaocol',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ],
    ]) ?>

</div>
