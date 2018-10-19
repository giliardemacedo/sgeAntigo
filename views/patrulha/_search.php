<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PatrulhaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patrulha-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idpatrulha') ?>

    <?= $form->field($model, 'idtropa') ?>

    <?= $form->field($model, 'idsecao') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'cores') ?>

    <?php // echo $form->field($model, 'gritodeguerra') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
