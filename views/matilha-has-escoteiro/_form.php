<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MatilhaHasEscoteiro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matilha-has-escoteiro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matilha_idmatilha')->textInput() ?>

    <?= $form->field($model, 'escoteiro_idescoteiro')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
