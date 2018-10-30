<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tropa */

$this->title = Yii::t('app', 'Create Tropa');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tropas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tropa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
<<<<<<< HEAD
        'arraySecao' => $arraySecao,
=======
<<<<<<< HEAD
        'arraySecao' => $arraySecao
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    ]) ?>

</div>
