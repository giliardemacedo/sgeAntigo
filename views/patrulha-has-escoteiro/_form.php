<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PatrulhaHasEscoteiro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patrulha-has-escoteiro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patrulha_idpatrulha')->textInput() ?>

    <?= $form->field($model, 'escoteiro_idescoteiro')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
