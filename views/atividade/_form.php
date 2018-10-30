<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Atividade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atividade-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
=======
<<<<<<< HEAD
    <?= $form->field($model, 'idarea_atuacao')->textInput() ?>

    <?= $form->field($model, 'idsecao')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'idramo')->textInput() ?>

    <?= $form->field($model, 'nomeatividade')->textInput(['maxlength' => true]) ?>
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    <?= $form->field($model, 'descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material')->textInput(['maxlength' => true]) ?>

<<<<<<< HEAD
    <?= $form->field($model, 'tempoduracao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'localaplicacao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area_atuacao_idarea_atuacao')->textInput() ?>

    <?= $form->field($model, 'secao_idsecao')->textInput() ?>
=======
    <?= $form->field($model, 'tempoduracao')->textInput() ?>

<<<<<<< HEAD
    <?= $form->field($model, 'localaplicacao')->textInput(['maxlength' => true]) ?>
=======
    <?= $form->field($model, 'localapropriadoaplicacao')->textInput(['maxlength' => true]) ?>
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
