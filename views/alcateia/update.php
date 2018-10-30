<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alcateia */

$this->title = Yii::t('app', 'Update Alcateia: ' . $model->idalcateia, [
    'nameAttribute' => '' . $model->idalcateia,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alcateias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idalcateia, 'url' => ['view', 'idalcateia' => $model->idalcateia, 'idsecao' => $model->idsecao]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="alcateia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
