<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Escoteiro */

$this->title = Yii::t('app', 'Create Escoteiro');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Escoteiros'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escoteiro-create">

    <h1><?= Html::encode($this->title) ?></h1>

<<<<<<< HEAD
    <?= $this->render('_form', [
        'model' => $model,
        'arraySecao' => $arraySecao,
=======
<<<<<<< HEAD
	<?= $this->render('_form', [
    	'arraySecao' => $arraySecao,
        'model' => $model,
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        'arrayContato' => $arrayContato,
        'arrayEndereco' => $arrayEndereco,
    ]) ?>

</div>
<<<<<<< HEAD
=======
=======
    <?= $this->render('_form', [
    	'arrayGrupo' => $arrayGrupo,
    	'ramos'=>$ramos,
    	'tropas' => $tropas,
    	'patrulhas'=>$patrulhas,
        'model' => $model,
    ]) ?>

</div>
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
