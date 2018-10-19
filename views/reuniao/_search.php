<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReuniaoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reuniao-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idreuniao') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'idgrupo') ?>

=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <?= $form->field($model, 'data') ?>

    <?= $form->field($model, 'pauta') ?>

<<<<<<< HEAD
=======
    <?= $form->field($model, 'reuniaocol') ?>

>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
