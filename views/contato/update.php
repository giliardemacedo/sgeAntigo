<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contato */

$this->title = Yii::t('app', 'Update Contato: ' . $model->idcontato, [
    'nameAttribute' => '' . $model->idcontato,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contatos'), 'url' => ['index']];
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => $model->idcontato, 'url' => ['view', 'id' => $model->idcontato]];
=======
$this->params['breadcrumbs'][] = ['label' => $model->idcontato, 'url' => ['view', 'idcontato' => $model->idcontato, 'idescoteiro' => $model->idescoteiro]];
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="contato-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
