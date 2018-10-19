<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

<<<<<<< HEAD
=======

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
/* @var $this yii\web\View */
/* @var $model app\models\Patrulha */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patrulha-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'idtropa')->
    widget(Select2::classname(), [
    'data' => $arrayTropa,
    'options' => ['placeholder' => Yii::t('app','Selecione uma tropa ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>

    <?= $form->field($model, 'idsecao')->
    widget(Select2::classname(), [
    'data' => $arraySecao,
    'options' => ['placeholder' => Yii::t('app','Selecione uma secao ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>


    <?= $form->field($model, 'idsecao')->textInput() ?>
=======
    <?= $form->field($model, 'idtropa')->widget(Select2::classname(), [
    'data' => $data,
    'options' => ['placeholder' => Yii::t('app','Selecione o Nome da Tropa ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
	]); ?>
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cores')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gritodeguerra')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
