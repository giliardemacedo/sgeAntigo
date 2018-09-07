<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chefe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chefe-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idadm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idescoteiro')->textInput() ?>

    <?= $form->field($model, 'categoria')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'caixa_idcaixa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
