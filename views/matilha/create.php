<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Matilha */

$this->title = Yii::t('app', 'Create Matilha');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Matilhas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matilha-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
<<<<<<< HEAD
        'arraySecao' => $arraySecao,
        'arrayAlcateia' => $arrayAlcateia,
=======
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    ]) ?>

</div>
