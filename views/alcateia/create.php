<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Alcateia */

$this->title = Yii::t('app', 'Create Alcateia');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Alcateias'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="alcateia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
<<<<<<< HEAD
        'arraySecao' =>$arraySecao,
=======
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    ]) ?>

</div>
