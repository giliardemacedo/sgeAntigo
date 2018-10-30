<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Flordelis */

$this->title = Yii::t('app', 'Update Flordelis: ' . $model->idflordelis, [
    'nameAttribute' => '' . $model->idflordelis,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flordelis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idflordelis, 'url' => ['view', 'idflordelis' => $model->idflordelis, 'idsecao' => $model->idsecao]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="flordelis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
