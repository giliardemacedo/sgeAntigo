<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AreaAtuacao */

$this->title = Yii::t('app', 'Update Area Atuacao: ' . $model->idareaatuacao, [
    'nameAttribute' => '' . $model->idareaatuacao,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Area Atuacaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idareaatuacao, 'url' => ['view', 'idareaatuacao' => $model->idareaatuacao, 'idatividade' => $model->idatividade]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="area-atuacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
