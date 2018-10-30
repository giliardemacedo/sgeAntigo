<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
/* @var $this yii\web\View */
/* @var $model app\models\Matilha */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matilha-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alcateia_idsecao')->
        widget(Select2::classname(), [
            'data' => $arraySecao,
            'options' => ['placeholder' => Yii::t('app','Selecione a Seção ...')],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'alcateia_idalcateia')->
        widget(Select2::classname(), [
            'data' => $arrayAlcateia,
            'options' => ['placeholder' => Yii::t('app','Selecione a Alcateia ...')],
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]);
    ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cores')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
