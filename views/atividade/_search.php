<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AtividadeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atividade-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idatividade') ?>

    <?= $form->field($model, 'idramo') ?>

    <?= $form->field($model, 'nomeatividade') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'material') ?>

    <?php // echo $form->field($model, 'tempoduracao') ?>

    <?php // echo $form->field($model, 'localapropriadoaplicacao') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
