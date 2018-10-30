<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Escoteiro */

$this->title = $model->idescoteiro;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Escoteiros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escoteiro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idescoteiro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idescoteiro], [
=======
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idescoteiro], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idescoteiro], [
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idescoteiro' => $model->idescoteiro, 'idgrupo' => $model->idgrupo, 'idramo' => $model->idramo, 'idtropa' => $model->idtropa, 'idpatrulha' => $model->idpatrulha], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idescoteiro' => $model->idescoteiro, 'idgrupo' => $model->idgrupo, 'idramo' => $model->idramo, 'idtropa' => $model->idtropa, 'idpatrulha' => $model->idpatrulha], [
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
            'idescoteiro',
<<<<<<< HEAD
=======
<<<<<<< HEAD
            'idsecao',
            'idcontato',
            'idendereco',
=======
            'idgrupo',
            'idramo',
            'idtropa',
            'idpatrulha',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            'nome',
            'nascimento',
            'cpf',
            'rg',
            'sexo',
<<<<<<< HEAD
            'registro_ueb',
            'estado',
            'encargo_patrulha',
            'chefe',
            'categoria_chefe',
            'endereco_idendereco',
            'contato_idcontato',
=======
            'registroueb',
            'estado',
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ],
    ]) ?>

</div>
