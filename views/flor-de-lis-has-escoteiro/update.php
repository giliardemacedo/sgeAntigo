<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FlorDeLisHasEscoteiro */

$this->title = Yii::t('app', 'Update Flor De Lis Has Escoteiro: ' . $model->flor_de_lis_idflor_de_lis, [
    'nameAttribute' => '' . $model->flor_de_lis_idflor_de_lis,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flor De Lis Has Escoteiros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->flor_de_lis_idflor_de_lis, 'url' => ['view', 'flor_de_lis_idflor_de_lis' => $model->flor_de_lis_idflor_de_lis, 'flor_de_lis_secao_idsecao' => $model->flor_de_lis_secao_idsecao, 'escoteiro_idescoteiro' => $model->escoteiro_idescoteiro]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="flor-de-lis-has-escoteiro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
