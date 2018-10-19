<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Chefe */

$this->title = Yii::t('app', 'Create Chefe');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cheves'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chefe-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
