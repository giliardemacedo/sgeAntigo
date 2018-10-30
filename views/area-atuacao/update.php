<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AreaAtuacao */

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
$this->title = Yii::t('app', 'Update Area Atuacao: ' . $model->idarea_atuacao, [
    'nameAttribute' => '' . $model->idarea_atuacao,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Area Atuacaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idarea_atuacao, 'url' => ['view', 'id' => $model->idarea_atuacao]];
<<<<<<< HEAD
=======
=======
$this->title = Yii::t('app', 'Update Area Atuacao: ' . $model->idareaatuacao, [
    'nameAttribute' => '' . $model->idareaatuacao,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Area Atuacaos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idareaatuacao, 'url' => ['view', 'idareaatuacao' => $model->idareaatuacao, 'idatividade' => $model->idatividade]];
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="area-atuacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
