<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $model app\models\AtividadeSearch */
=======
<<<<<<< HEAD
/* @var $model app\models\AtividadeAtuacaoSearch */
=======
/* @var $model app\models\AtividadeSearch */
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atividade-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idatividade') ?>

<<<<<<< HEAD
=======
<<<<<<< HEAD
    <?= $form->field($model, 'idarea_atuacao') ?>

    <?= $form->field($model, 'idsecao') ?>

>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'descricao') ?>

<<<<<<< HEAD
    <?= $form->field($model, 'material') ?>

    <?= $form->field($model, 'tempoduracao') ?>

    <?php // echo $form->field($model, 'localaplicacao') ?>

    <?php // echo $form->field($model, 'area_atuacao_idarea_atuacao') ?>

    <?php // echo $form->field($model, 'secao_idsecao') ?>
=======
    <?php // echo $form->field($model, 'material') ?>

    <?php // echo $form->field($model, 'tempoduracao') ?>

    <?php // echo $form->field($model, 'localaplicacao') ?>
=======
    <?= $form->field($model, 'idramo') ?>

    <?= $form->field($model, 'nomeatividade') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'material') ?>

    <?php // echo $form->field($model, 'tempoduracao') ?>

    <?php // echo $form->field($model, 'localapropriadoaplicacao') ?>
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
