<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FlorDeLis */

$this->title = Yii::t('app', 'Update Flor De Lis: ' . $model->idflor_de_lis, [
    'nameAttribute' => '' . $model->idflor_de_lis,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flor De Lis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idflor_de_lis, 'url' => ['view', 'idflor_de_lis' => $model->idflor_de_lis, 'secao_idsecao' => $model->secao_idsecao]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="flor-de-lis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
