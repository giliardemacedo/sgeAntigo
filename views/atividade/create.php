<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Atividade */

$this->title = Yii::t('app', 'Create Atividade');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Atividades'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atividade-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
