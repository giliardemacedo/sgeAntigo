<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Escoteiro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escoteiro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nascimento')->textInput() ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registro_ueb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'encargo_patrulha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chefe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria_chefe')->textInput(['maxlength' => true]) ?>

    <?= yii\base\View::render('@app/views/contato/_contato.php', ['model' => $arrayContato, 'form' => $form]) ?>

    <?= yii\base\View::render('@app/views/endereco/_endereco.php', ['model' => $arrayEndereco, 'form' => $form]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
