<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modelsFlorDeLisHasEscoteiroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="flor-de-lis-has-escoteiro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'flor_de_lis_idflor_de_lis') ?>

    <?= $form->field($model, 'flor_de_lis_secao_idsecao') ?>

    <?= $form->field($model, 'escoteiro_idescoteiro') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
