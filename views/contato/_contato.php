<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contato */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="contato-form">

<<<<<<< HEAD
    <?= $form->field($model, 'numero_telefone')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'numerotelefone')->textInput(['maxlength' => true]) ?>
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    
</div>
