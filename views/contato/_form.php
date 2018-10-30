<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contato-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'numero_telefone')->textInput(['maxlength' => true]) ?>
=======
<<<<<<< HEAD
=======
    <?= $form->field($model, 'idescoteiro')->textInput() ?>

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <?= $form->field($model, 'numerotelefone')->textInput(['maxlength' => true]) ?>
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
