<?php

namespace app\controllers;

use Yii;
use app\models\Escoteiro;
use app\models\EscoteiroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
<<<<<<< HEAD

use yii\helpers\ArrayHelper;
use app\models\Secao;
use app\models\Contato;
use app\models\Endereco;
=======
<<<<<<< HEAD
use yii\helpers\ArrayHelper;

use app\models\Secao;
use app\models\Contato;
use app\models\Endereco;
=======


use yii\helpers\ArrayHelper;
use app\models\Grupo;
use app\models\Ramo;
use app\models\Tropa;
use app\models\Patrulha;
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
/**
 * EscoteiroController implements the CRUD actions for Escoteiro model.
 */
class EscoteiroController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Escoteiro models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EscoteiroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Escoteiro model.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
<<<<<<< HEAD
=======
=======
     * @param integer $idescoteiro
     * @param integer $idgrupo
     * @param integer $idramo
     * @param integer $idtropa
     * @param integer $idpatrulha
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idescoteiro, $idgrupo, $idramo, $idtropa, $idpatrulha)
    {
        return $this->render('view', [
            'model' => $this->findModel($idescoteiro, $idgrupo, $idramo, $idtropa, $idpatrulha),
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ]);
    }

    /**
     * Creates a new Escoteiro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
        //Isso nos assegura que se um dos modelos não for salvo o outro também não será e dessa
        //forma, será dado um ROLLBACK.
        //$transaction = \Yii::$app->db->beginTransaction();

>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        $model = new Escoteiro();
        $arrayContato = new Contato();
        $arrayEndereco = new Endereco();


<<<<<<< HEAD
        if ($model->load(Yii::$app->request->post()) && $arrayEndereco->load(Yii::$app->request->post()) &&$arrayContato->load(Yii::$app->request->post())) 
        {
            if($arrayContato->save() && $arrayEndereco->save())
            {
                $model->contato_idcontato = $arrayContato->idcontato;
                $model->endereco_idendereco= $arrayEndereco->idendereco;
                if($model->save())
                {
                    return $this->redirect(['view', 
                        'id' => $model->idescoteiro,
                    ]);           
                }
            }
        }
        
        $arraySecao = ArrayHelper::map(Secao::find()->all(), 'idsecao','nome');

=======
        try {
            /*
            $post = Yii::$app->request->post();

            if($model->load($post) && $model->valiedate())
            {
                if($arrayContato->load($post) && $model->valiedate())
                {
                    $transaction->commit();
                }
            }
            */

            if($model->load(Yii::$app->request->post()) && $arrayEndereco->load(Yii::$app->request->post()) &&$arrayContato->load(Yii::$app->request->post()))
            {
                if($arrayContato->save() && $arrayEndereco->save())
                {
                    $model->idcontato = $arrayContato->idcontato;
                    $model->idendereco= $arrayEndereco->idendereco;
                    if($model->save())
                    {
                    return $this->redirect(['view', 
                        'id' => $model->idescoteiro,
                    ]);
                            
                    }
                }


=======
        $model = new Escoteiro();

        try {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idescoteiro' => $model->idescoteiro, 'idgrupo' => $model->idgrupo, 'idramo' => $model->idramo, 'idtropa' => $model->idtropa, 'idpatrulha' => $model->idpatrulha]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            }
            
        } catch (\yii\db\IntegrityException $e) {
            
        }
<<<<<<< HEAD
        /*
        }catch (Exception $e) {
            $transaction->rollBack();
        }
        */

        $arraySecao = ArrayHelper::map(Secao::find()->all(), 'idsecao','nome');
        //$arrayContato = ArrayHelper::map(Contato::find()->all(), 'idcontato', 'numerotelefone', 'email');
        //$arrayContato = ArrayHelper::map(Secao::find()->all(), 'idcontato','nome');
     
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        return $this->render('create', [
            'model' => $model,
            'arraySecao' => $arraySecao,
            'arrayContato' => $arrayContato,
<<<<<<< HEAD
            'arrayEndereco' => $arrayEndereco,
        ]);
=======
            'arrayEndereco' => $arrayEndereco

        ]);
=======

        //actionCreate
        //$data = ArrayHelper::map(Grupo::find()->all(),'idgrupo','nome','numeral');
        $arrayGrupo = ArrayHelper::map(Grupo::find()->all(), 'idgrupo', 'nome');   
        $arrayRamo = ArrayHelper::map(Ramo::find()->all(), 'idramo', 'nome');    
        $arrayTropa = ArrayHelper::map(Tropa::find()->all(), 'idtropa', 'nome'); 
        $arrayPatrulha = ArrayHelper::map(Patrulha::find()->all(), 'idpatrulha', 'nome');   
             
        //$data = ArrayHelper::map(Escoteiro::find()->all(), 'idescoteiro', 'idgrupo', 'nome', 'idramo', 'idtropa');


        return $this->render('create', ['arrayGrupo'=>$arrayGrupo,'model' => $model, 'ramos'=>$arrayRamo, 'tropas'=>$arrayTropa,'patrulhas'=>$arrayPatrulha ]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
    }

    /**
     * Updates an existing Escoteiro model.
     * If update is successful, the browser will be redirected to the 'view' page.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idescoteiro]);
<<<<<<< HEAD
=======
=======
     * @param integer $idescoteiro
     * @param integer $idgrupo
     * @param integer $idramo
     * @param integer $idtropa
     * @param integer $idpatrulha
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idescoteiro, $idgrupo, $idramo, $idtropa, $idpatrulha)
    {
        $model = $this->findModel($idescoteiro, $idgrupo, $idramo, $idtropa, $idpatrulha);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idescoteiro' => $model->idescoteiro, 'idgrupo' => $model->idgrupo, 'idramo' => $model->idramo, 'idtropa' => $model->idtropa, 'idpatrulha' => $model->idpatrulha]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Escoteiro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
<<<<<<< HEAD
=======
=======
     * @param integer $idescoteiro
     * @param integer $idgrupo
     * @param integer $idramo
     * @param integer $idtropa
     * @param integer $idpatrulha
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idescoteiro, $idgrupo, $idramo, $idtropa, $idpatrulha)
    {
        $this->findModel($idescoteiro, $idgrupo, $idramo, $idtropa, $idpatrulha)->delete();
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

        return $this->redirect(['index']);
    }

    /**
     * Finds the Escoteiro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
     * @param integer $id
     * @return Escoteiro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Escoteiro::findOne($id)) !== null) {
<<<<<<< HEAD
=======
=======
     * @param integer $idescoteiro
     * @param integer $idgrupo
     * @param integer $idramo
     * @param integer $idtropa
     * @param integer $idpatrulha
     * @return Escoteiro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idescoteiro, $idgrupo, $idramo, $idtropa, $idpatrulha)
    {
        if (($model = Escoteiro::findOne(['idescoteiro' => $idescoteiro, 'idgrupo' => $idgrupo, 'idramo' => $idramo, 'idtropa' => $idtropa, 'idpatrulha' => $idpatrulha])) !== null) {
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
