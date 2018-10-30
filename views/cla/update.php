<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cla */

$this->title = Yii::t('app', 'Update Cla: ' . $model->idcla, [
    'nameAttribute' => '' . $model->idcla,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Clas'), 'url' => ['index']];
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => $model->idcla, 'url' => ['view', 'idcla' => $model->idcla, 'secao_idsecao' => $model->secao_idsecao]];
=======
$this->params['breadcrumbs'][] = ['label' => $model->idcla, 'url' => ['view', 'idcla' => $model->idcla, 'idsecao' => $model->idsecao]];
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="cla-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
