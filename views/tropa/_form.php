<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
<<<<<<< HEAD
use kartik\select2\Select2;
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

/* @var $this yii\web\View */
/* @var $model app\models\Tropa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tropa-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'idsecao')->
    widget(Select2::classname(), [
    'data' => $arraySecao,
    'options' => ['placeholder' => Yii::t('app','Selecione uma secao ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>

=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
