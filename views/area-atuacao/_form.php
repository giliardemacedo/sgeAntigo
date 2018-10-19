<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AreaAtuacao */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="area-atuacao-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

=======
    <?= $form->field($model, 'idatividade')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantidade')->textInput() ?>

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
