<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chefe */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chefe-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
=======
    <?= $form->field($model, 'idadm')->textInput(['maxlength' => true]) ?>

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <?= $form->field($model, 'idescoteiro')->textInput() ?>

    <?= $form->field($model, 'categoria')->textInput(['maxlength' => true]) ?>

<<<<<<< HEAD
=======
    <?= $form->field($model, 'caixa_idcaixa')->textInput() ?>

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
