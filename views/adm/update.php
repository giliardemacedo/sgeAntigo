<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Adm */

$this->title = Yii::t('app', 'Update Adm: ' . $model->idadm, [
    'nameAttribute' => '' . $model->idadm,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Adms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idadm, 'url' => ['view', 'id' => $model->idadm]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="adm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
