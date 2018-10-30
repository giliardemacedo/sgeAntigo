<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EscoteiroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Escoteiros');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="escoteiro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Escoteiro'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

<<<<<<< HEAD
            //'idescoteiro',
            'nome',
            'nascimento',
            'cpf',
            'rg',
            'sexo',
            'registro_ueb',
            //'estado',
            //'encargo_patrulha',
            //'chefe',
            //'categoria_chefe',
            //'endereco_idendereco',
            //'contato_idcontato',
=======
            'idescoteiro',
<<<<<<< HEAD
            'idsecao',
            'idcontato',
            'idendereco',
            'nome',
=======
            'idgrupo',
            'idramo',
            'idtropa',
            'idpatrulha',
            //'nome',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            //'nascimento',
            //'cpf',
            //'rg',
            //'sexo',
            //'registroueb',
            //'estado',
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
