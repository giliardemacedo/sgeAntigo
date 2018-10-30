<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EscoteiroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escoteiro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idescoteiro') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'nascimento') ?>

    <?= $form->field($model, 'cpf') ?>

    <?= $form->field($model, 'rg') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'registro_ueb') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'encargo_patrulha') ?>

    <?php // echo $form->field($model, 'chefe') ?>

    <?php // echo $form->field($model, 'categoria_chefe') ?>

    <?php // echo $form->field($model, 'endereco_idendereco') ?>

    <?php // echo $form->field($model, 'contato_idcontato') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
