<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
<<<<<<< HEAD
/* @var $searchModel app\models\AtividadeSearch */
=======
<<<<<<< HEAD
/* @var $searchModel app\models\AtividadeAtuacaoSearch */
=======
/* @var $searchModel app\models\AtividadeSearch */
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Atividades');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atividade-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Atividade'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idatividade',
<<<<<<< HEAD
            'nome',
            'descricao',
            'material',
            'tempoduracao',
            //'localaplicacao',
            //'area_atuacao_idarea_atuacao',
            //'secao_idsecao',
=======
<<<<<<< HEAD
            'idarea_atuacao',
            'idsecao',
            'nome',
            'descricao',
            //'material',
            //'tempoduracao',
            //'localaplicacao',
=======
            'idramo',
            'nomeatividade',
            'descricao',
            'material',
            //'tempoduracao',
            //'localapropriadoaplicacao',
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
