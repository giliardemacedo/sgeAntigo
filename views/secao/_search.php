<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SecaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="secao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idsecao') ?>

<<<<<<< HEAD
=======
    <?= $form->field($model, 'idgrupo') ?>

>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'tipo') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'grupo_idgrupo') ?>

=======
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
