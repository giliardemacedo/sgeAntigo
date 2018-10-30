<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Atividade */

$this->title = $model->idatividade;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Atividades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atividade-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idatividade], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idatividade], [
=======
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->idatividade], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->idatividade], [
=======
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'idatividade' => $model->idatividade, 'idramo' => $model->idramo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'idatividade' => $model->idatividade, 'idramo' => $model->idramo], [
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
            'idatividade',
<<<<<<< HEAD
=======
<<<<<<< HEAD
            'idarea_atuacao',
            'idsecao',
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            'nome',
            'descricao',
            'material',
            'tempoduracao',
            'localaplicacao',
<<<<<<< HEAD
            'area_atuacao_idarea_atuacao',
            'secao_idsecao',
=======
=======
            'idramo',
            'nomeatividade',
            'descricao',
            'material',
            'tempoduracao',
            'localapropriadoaplicacao',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ],
    ]) ?>

</div>
