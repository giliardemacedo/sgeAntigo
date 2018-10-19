<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Endereco */

$this->title = Yii::t('app', 'Update Endereco: ' . $model->idendereco, [
    'nameAttribute' => '' . $model->idendereco,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Enderecos'), 'url' => ['index']];
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => $model->idendereco, 'url' => ['view', 'id' => $model->idendereco]];
=======
$this->params['breadcrumbs'][] = ['label' => $model->idendereco, 'url' => ['view', 'idendereco' => $model->idendereco, 'idescoteiro' => $model->idescoteiro]];
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="endereco-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
