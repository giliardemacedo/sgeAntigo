<?php

namespace app\controllers;

use Yii;
use app\models\Endereco;
use app\models\EnderecoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EnderecoController implements the CRUD actions for Endereco model.
 */
class EnderecoController extends Controller
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
     * Lists all Endereco models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EnderecoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Endereco model.
     * @param integer $idendereco
     * @param integer $idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idendereco, $idescoteiro)
    {
        return $this->render('view', [
            'model' => $this->findModel($idendereco, $idescoteiro),
        ]);
    }

    /**
     * Creates a new Endereco model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Endereco();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idendereco' => $model->idendereco, 'idescoteiro' => $model->idescoteiro]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Endereco model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idendereco
     * @param integer $idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idendereco, $idescoteiro)
    {
        $model = $this->findModel($idendereco, $idescoteiro);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idendereco' => $model->idendereco, 'idescoteiro' => $model->idescoteiro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Endereco model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idendereco
     * @param integer $idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idendereco, $idescoteiro)
    {
        $this->findModel($idendereco, $idescoteiro)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Endereco model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idendereco
     * @param integer $idescoteiro
     * @return Endereco the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idendereco, $idescoteiro)
    {
        if (($model = Endereco::findOne(['idendereco' => $idendereco, 'idescoteiro' => $idescoteiro])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
