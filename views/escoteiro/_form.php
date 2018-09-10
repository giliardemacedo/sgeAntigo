<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Escoteiro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escoteiro-form">

    <?php $form = ActiveForm::begin(); ?>




    <?= $form->field($model, 'grupo')->
    widget(Select2::classname(), [
    'data' => $arrayGrupo,
    'options' => ['placeholder' => Yii::t('app','Selecione o Seu Grupo ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>



<?= $form->field($model, 'idramo')->
    widget(Select2::classname(), [
    'data' => $ramos,
    'options' => ['placeholder' => Yii::t('app','Selecione o Seu Grupo ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>


    <?= $form->field($model, 'idtropa')->
    widget(Select2::classname(), [
    'data' => $tropas,
    'options' => ['placeholder' => Yii::t('app','Selecione o Seu Grupo ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>

    <?= $form->field($model, 'idpatrulha')->
    widget(Select2::classname(), [
    'data' => $patrulhas,
    'options' => ['placeholder' => Yii::t('app','Selecione o Seu Grupo ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>


    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nascimento')->textInput() ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registroueb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
