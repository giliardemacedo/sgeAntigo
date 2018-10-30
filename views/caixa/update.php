<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Caixa */

$this->title = Yii::t('app', 'Update Caixa: ' . $model->idcaixa, [
    'nameAttribute' => '' . $model->idcaixa,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Caixas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idcaixa, 'url' => ['view', 'id' => $model->idcaixa]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="caixa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
