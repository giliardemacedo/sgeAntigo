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
=======
<<<<<<< HEAD
    <?= $form->field($model, 'idgrupo') ?>

>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    <?= $form->field($model, 'valor') ?>

    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'responsavel') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'descricao') ?>

    <?php // echo $form->field($model, 'comprovante') ?>

    <?php // echo $form->field($model, 'grupo_idgrupo') ?>
=======
    <?php // echo $form->field($model, 'descricao') ?>

    <?php // echo $form->field($model, 'comprovante') ?>
=======
    <?= $form->field($model, 'valor') ?>

    <?= $form->field($model, 'responsavel') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'data') ?>
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
