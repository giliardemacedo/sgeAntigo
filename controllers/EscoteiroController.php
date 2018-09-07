<?php

namespace app\controllers;

use Yii;
use app\models\Escoteiro;
use app\models\EscoteiroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
        ]);
    }

    /**
     * Creates a new Escoteiro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Escoteiro();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idescoteiro' => $model->idescoteiro, 'idgrupo' => $model->idgrupo, 'idramo' => $model->idramo, 'idtropa' => $model->idtropa, 'idpatrulha' => $model->idpatrulha]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Escoteiro model.
     * If update is successful, the browser will be redirected to the 'view' page.
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
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Escoteiro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
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

        return $this->redirect(['index']);
    }

    /**
     * Finds the Escoteiro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
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
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
