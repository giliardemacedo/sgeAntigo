<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ramo */

$this->title = Yii::t('app', 'Create Ramo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Ramos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ramo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
