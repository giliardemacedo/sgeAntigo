<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Matilha */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matilha-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idalcateia')->textInput() ?>

    <?= $form->field($model, 'idsecao')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
