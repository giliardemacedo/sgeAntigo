<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tropa */

$this->title = Yii::t('app', 'Update Tropa: ' . $model->idtropa, [
    'nameAttribute' => '' . $model->idtropa,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tropas'), 'url' => ['index']];
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => $model->idtropa, 'url' => ['view', 'idtropa' => $model->idtropa, 'secao_idsecao' => $model->secao_idsecao]];
=======
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => $model->idtropa, 'url' => ['view', 'idtropa' => $model->idtropa, 'idsecao' => $model->idsecao]];
=======
$this->params['breadcrumbs'][] = ['label' => $model->idtropa, 'url' => ['view', 'id' => $model->idtropa]];
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tropa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
