<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlcateiaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alcateia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idalcateia') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'idsecao') ?>

=======
    <?= $form->field($model, 'idsecao') ?>

    <?= $form->field($model, 'nome') ?>

>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
