<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContatoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contato-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcontato') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'numero_telefone') ?>
=======
<<<<<<< HEAD
=======
    <?= $form->field($model, 'idescoteiro') ?>

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <?= $form->field($model, 'numerotelefone') ?>
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    <?= $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
