<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Reuniao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reuniao-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'pauta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'grupo_idgrupo')->textInput() ?>
=======
<<<<<<< HEAD
    <?= $form->field($model, 'idgrupo')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'pauta')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'pauta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'reuniaocol')->textInput(['maxlength' => true]) ?>
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
