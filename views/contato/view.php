<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contato */

$this->title = $model->idcontato;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contatos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contato-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idcontato], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idcontato], [
=======
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idcontato], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idcontato], [
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idcontato' => $model->idcontato, 'idescoteiro' => $model->idescoteiro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idcontato' => $model->idcontato, 'idescoteiro' => $model->idescoteiro], [
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
            'idcontato',
<<<<<<< HEAD
            'numero_telefone',
=======
<<<<<<< HEAD
=======
            'idescoteiro',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'numerotelefone',
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            'email:email',
        ],
    ]) ?>

</div>
