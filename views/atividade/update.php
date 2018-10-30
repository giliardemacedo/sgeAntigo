<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atividade */

$this->title = Yii::t('app', 'Update Atividade: ' . $model->idatividade, [
    'nameAttribute' => '' . $model->idatividade,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Atividades'), 'url' => ['index']];
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => $model->idatividade, 'url' => ['view', 'id' => $model->idatividade]];
=======
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => $model->idatividade, 'url' => ['view', 'id' => $model->idatividade]];
=======
$this->params['breadcrumbs'][] = ['label' => $model->idatividade, 'url' => ['view', 'idatividade' => $model->idatividade, 'idramo' => $model->idramo]];
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="atividade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
