<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FlorDeLisHasEscoteiro */

$this->title = Yii::t('app', 'Create Flor De Lis Has Escoteiro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Flor De Lis Has Escoteiros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="flor-de-lis-has-escoteiro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
