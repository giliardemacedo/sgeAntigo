<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
<<<<<<< HEAD

=======
<<<<<<< HEAD
use kartik\select2\Select2;

=======


use kartik\select2\Select2;
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
/* @var $this yii\web\View */
/* @var $model app\models\Escoteiro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="escoteiro-form">

    <?php $form = ActiveForm::begin(); ?>

<<<<<<< HEAD
=======
<<<<<<< HEAD
    <?= $form->field($model, 'idsecao')->
    widget(Select2::classname(), [
    'data' => $arraySecao,
    'options' => ['placeholder' => Yii::t('app','Selecione uma secao ...')],
=======



    <?= $form->field($model, 'grupo')->
    widget(Select2::classname(), [
    'data' => $arrayGrupo,
    'options' => ['placeholder' => Yii::t('app','Selecione o Seu Grupo ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>



<?= $form->field($model, 'idramo')->
    widget(Select2::classname(), [
    'data' => $ramos,
    'options' => ['placeholder' => Yii::t('app','Selecione o Seu Grupo ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>


    <?= $form->field($model, 'idtropa')->
    widget(Select2::classname(), [
    'data' => $tropas,
    'options' => ['placeholder' => Yii::t('app','Selecione o Seu Grupo ...')],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>

<<<<<<< HEAD
=======
    <?= $form->field($model, 'idpatrulha')->
    widget(Select2::classname(), [
    'data' => $patrulhas,
    'options' => ['placeholder' => Yii::t('app','Selecione o Seu Grupo ...')],
    'pluginOptions' => [
        'allowClear' => true
    ],
    ]);?>


>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nascimento')->textInput() ?>

    <?= $form->field($model, 'cpf')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rg')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sexo')->textInput(['maxlength' => true]) ?>

<<<<<<< HEAD
    <?= $form->field($model, 'registro_ueb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'encargo_patrulha')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chefe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'categoria_chefe')->textInput(['maxlength' => true]) ?>

=======
    <?= $form->field($model, 'registroueb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado')->textInput() ?>

<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    <?= yii\base\View::render('@app/views/contato/_contato.php', ['model' => $arrayContato, 'form' => $form]) ?>

    <?= yii\base\View::render('@app/views/endereco/_endereco.php', ['model' => $arrayEndereco, 'form' => $form]) ?>

<<<<<<< HEAD
=======
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
