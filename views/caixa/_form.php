<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Caixa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caixa-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'idgrupo')->textInput() ?>

    <?= $form->field($model, 'valor')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

=======
    <?= $form->field($model, 'valor')->textInput() ?>

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <?= $form->field($model, 'responsavel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

<<<<<<< HEAD
    <?= $form->field($model, 'comprovante')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'data')->textInput() ?>
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
