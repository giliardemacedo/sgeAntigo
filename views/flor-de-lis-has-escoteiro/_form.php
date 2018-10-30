<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FlorDeLisHasEscoteiro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flor-de-lis-has-escoteiro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'flor_de_lis_idflor_de_lis')->textInput() ?>

    <?= $form->field($model, 'flor_de_lis_secao_idsecao')->textInput() ?>

    <?= $form->field($model, 'escoteiro_idescoteiro')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
