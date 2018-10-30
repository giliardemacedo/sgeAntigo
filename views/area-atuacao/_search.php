<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AreaAtuacaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="area-atuacao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    <?= $form->field($model, 'idarea_atuacao') ?>

    <?= $form->field($model, 'nome') ?>

<<<<<<< HEAD
=======
=======
    <?= $form->field($model, 'idareaatuacao') ?>

    <?= $form->field($model, 'idatividade') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'quantidade') ?>

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
