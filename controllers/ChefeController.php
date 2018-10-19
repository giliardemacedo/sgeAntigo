<?php

namespace app\controllers;

use Yii;
use app\models\Chefe;
use app\models\ChefeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChefeController implements the CRUD actions for Chefe model.
 */
class ChefeController extends Controller
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
     * Lists all Chefe models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChefeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chefe model.
     * @param integer $idchefe
     * @param integer $idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idchefe, $idescoteiro)
    {
        return $this->render('view', [
            'model' => $this->findModel($idchefe, $idescoteiro),
        ]);
    }

    /**
     * Creates a new Chefe model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Chefe();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idchefe' => $model->idchefe, 'idescoteiro' => $model->idescoteiro]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Chefe model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idchefe
     * @param integer $idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idchefe, $idescoteiro)
    {
        $model = $this->findModel($idchefe, $idescoteiro);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idchefe' => $model->idchefe, 'idescoteiro' => $model->idescoteiro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Chefe model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idchefe
     * @param integer $idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idchefe, $idescoteiro)
    {
        $this->findModel($idchefe, $idescoteiro)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Chefe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idchefe
     * @param integer $idescoteiro
     * @return Chefe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idchefe, $idescoteiro)
    {
        if (($model = Chefe::findOne(['idchefe' => $idchefe, 'idescoteiro' => $idescoteiro])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
