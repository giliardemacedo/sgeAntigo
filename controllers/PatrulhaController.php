<?php

namespace app\controllers;

use Yii;
use app\models\Patrulha;
use app\models\PatrulhaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

<<<<<<< HEAD
use yii\helpers\ArrayHelper;
use app\models\Secao;
use app\models\Tropa;
=======

use yii\helpers\ArrayHelper;
use app\models\Tropa;
<<<<<<< HEAD
use app\models\Secao;
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
/**
 * PatrulhaController implements the CRUD actions for Patrulha model.
 */
class PatrulhaController extends Controller
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
     * Lists all Patrulha models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PatrulhaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Patrulha model.
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
     * @param integer $idpatrulha
     * @param integer $idtropa
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idpatrulha, $idtropa)
    {
        return $this->render('view', [
            'model' => $this->findModel($idpatrulha, $idtropa),
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ]);
    }

    /**
     * Creates a new Patrulha model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Patrulha();

<<<<<<< HEAD
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idpatrulha]);
        }

        $arraySecao = ArrayHelper::map(Secao::find()->all(), 'idsecao','nome');
        $arrayTropa = ArrayHelper::map(Tropa::find()->all(), 'idtropa','nome');

        return $this->render('create', [
            'model' => $model,
            'arraySecao' => $arraySecao,
            'arrayTropa' => $arrayTropa,
=======
        try {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
<<<<<<< HEAD
                return $this->redirect(['view', 
                    'id' => $model->idpatrulha,
                    'idtropa' =>$model->idtropa,
                    'idsecao'=>$model->idsecao
                ]);
            }
            
        } catch (\yii\db\IntegrityException $e) {
            
        }

        $arrayTropa = ArrayHelper::map(Tropa::find()->all(), 'idtropa', 'nome');
        $arraySecao = ArrayHelper::map(Secao::find()->all(), 'idsecao','nome');

        return $this->render('create', [
            'model' => $model,
            'arrayTropa' => $arrayTropa,
            'arraySecao' => $arraySecao    
=======
                return $this->redirect(['view', 'idpatrulha' => $model->idpatrulha, 'idtropa' => $model->idtropa]);
            }
        } catch (\yii\db\IntegrityException $e) {
            
        }
        $data = ArrayHelper::map(Tropa::find()->all(),'idtropa','nome');

        return $this->render('create', [
            'data' => $data,
            'model' => $model,
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ]);
    }

    /**
     * Updates an existing Patrulha model.
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
            return $this->redirect(['view', 'id' => $model->idpatrulha]);
<<<<<<< HEAD
=======
=======
     * @param integer $idpatrulha
     * @param integer $idtropa
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idpatrulha, $idtropa)
    {
        $model = $this->findModel($idpatrulha, $idtropa);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idpatrulha' => $model->idpatrulha, 'idtropa' => $model->idtropa]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Patrulha model.
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
     * @param integer $idpatrulha
     * @param integer $idtropa
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idpatrulha, $idtropa)
    {
        $this->findModel($idpatrulha, $idtropa)->delete();
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

        return $this->redirect(['index']);
    }

    /**
     * Finds the Patrulha model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
     * @param integer $id
     * @return Patrulha the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Patrulha::findOne($id)) !== null) {
<<<<<<< HEAD
=======
=======
     * @param integer $idpatrulha
     * @param integer $idtropa
     * @return Patrulha the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idpatrulha, $idtropa)
    {
        if (($model = Patrulha::findOne(['idpatrulha' => $idpatrulha, 'idtropa' => $idtropa])) !== null) {
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
