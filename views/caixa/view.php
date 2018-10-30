<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Caixa */

$this->title = $model->idcaixa;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Caixas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="caixa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idcaixa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idcaixa], [
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
            'idcaixa',
<<<<<<< HEAD
=======
<<<<<<< HEAD
            'idgrupo',
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            'valor',
            'data',
            'responsavel',
            'descricao',
            'comprovante',
<<<<<<< HEAD
            'grupo_idgrupo',
=======
=======
            'valor',
            'responsavel',
            'descricao',
            'data',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ],
    ]) ?>

</div>
