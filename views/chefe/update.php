<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chefe */

$this->title = Yii::t('app', 'Update Chefe: ' . $model->idchefe, [
    'nameAttribute' => '' . $model->idchefe,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cheves'), 'url' => ['index']];
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => $model->idchefe, 'url' => ['view', 'idchefe' => $model->idchefe, 'idescoteiro' => $model->idescoteiro]];
=======
$this->params['breadcrumbs'][] = ['label' => $model->idchefe, 'url' => ['view', 'id' => $model->idchefe]];
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="chefe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
