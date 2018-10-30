<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Flordelis */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flordelis-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'idsecao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
