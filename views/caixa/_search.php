<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CaixaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="caixa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idcaixa') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'idgrupo') ?>

    <?= $form->field($model, 'valor') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'responsavel') ?>

    <?php // echo $form->field($model, 'descricao') ?>

    <?php // echo $form->field($model, 'comprovante') ?>
=======
    <?= $form->field($model, 'valor') ?>

    <?= $form->field($model, 'responsavel') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'data') ?>
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
