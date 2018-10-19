<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tropa */

$this->title = Yii::t('app', 'Update Tropa: ' . $model->idtropa, [
    'nameAttribute' => '' . $model->idtropa,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tropas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtropa, 'url' => ['view', 'idtropa' => $model->idtropa, 'idsecao' => $model->idsecao]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tropa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
