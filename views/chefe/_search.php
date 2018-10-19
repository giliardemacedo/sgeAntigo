<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChefeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chefe-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idchefe') ?>

<<<<<<< HEAD
=======
    <?= $form->field($model, 'idadm') ?>

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <?= $form->field($model, 'idescoteiro') ?>

    <?= $form->field($model, 'categoria') ?>

<<<<<<< HEAD
=======
    <?= $form->field($model, 'caixa_idcaixa') ?>

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
