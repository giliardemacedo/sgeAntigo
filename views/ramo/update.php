<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ramo */

$this->title = Yii::t('app', 'Update Ramo: ' . $model->idramo, [
    'nameAttribute' => '' . $model->idramo,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ramos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idramo, 'url' => ['view', 'id' => $model->idramo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="ramo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
