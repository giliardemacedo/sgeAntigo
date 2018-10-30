<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EscoteiroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escoteiro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idescoteiro') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'nascimento') ?>

    <?= $form->field($model, 'cpf') ?>

    <?= $form->field($model, 'rg') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'registro_ueb') ?>

    <?php // echo $form->field($model, 'estado') ?>

    <?php // echo $form->field($model, 'encargo_patrulha') ?>

    <?php // echo $form->field($model, 'chefe') ?>

    <?php // echo $form->field($model, 'categoria_chefe') ?>

    <?php // echo $form->field($model, 'endereco_idendereco') ?>

    <?php // echo $form->field($model, 'contato_idcontato') ?>
=======
<<<<<<< HEAD
    <?= $form->field($model, 'idsecao') ?>

    <?= $form->field($model, 'idcontato') ?>

    <?= $form->field($model, 'idendereco') ?>

    <?= $form->field($model, 'nome') ?>
=======
    <?= $form->field($model, 'idgrupo') ?>

    <?= $form->field($model, 'idramo') ?>

    <?= $form->field($model, 'idtropa') ?>

    <?= $form->field($model, 'idpatrulha') ?>

    <?php // echo $form->field($model, 'nome') ?>
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

    <?php // echo $form->field($model, 'nascimento') ?>

    <?php // echo $form->field($model, 'cpf') ?>

    <?php // echo $form->field($model, 'rg') ?>

    <?php // echo $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'registroueb') ?>

    <?php // echo $form->field($model, 'estado') ?>
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
