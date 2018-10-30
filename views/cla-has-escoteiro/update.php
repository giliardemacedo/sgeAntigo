<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ClaHasEscoteiro */

$this->title = Yii::t('app', 'Update Cla Has Escoteiro: ' . $model->cla_idcla, [
    'nameAttribute' => '' . $model->cla_idcla,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cla Has Escoteiros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cla_idcla, 'url' => ['view', 'cla_idcla' => $model->cla_idcla, 'cla_secao_idsecao' => $model->cla_secao_idsecao, 'escoteiro_idescoteiro' => $model->escoteiro_idescoteiro]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cla-has-escoteiro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
