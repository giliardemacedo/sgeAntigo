<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FlorDeLis */

$this->title = Yii::t('app', 'Create Flor De Lis');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flor De Lis'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flor-de-lis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'arraySecao' => $arraySecao,
    ]) ?>

</div>
