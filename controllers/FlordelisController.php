<?php

namespace app\controllers;

use Yii;
use app\models\Flordelis;
use app\models\FlordelisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FlordelisController implements the CRUD actions for Flordelis model.
 */
class FlordelisController extends Controller
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
     * Lists all Flordelis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FlordelisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Flordelis model.
     * @param integer $idflordelis
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idflordelis, $idsecao)
    {
        return $this->render('view', [
            'model' => $this->findModel($idflordelis, $idsecao),
        ]);
    }

    /**
     * Creates a new Flordelis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Flordelis();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idflordelis' => $model->idflordelis, 'idsecao' => $model->idsecao]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Flordelis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idflordelis
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idflordelis, $idsecao)
    {
        $model = $this->findModel($idflordelis, $idsecao);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idflordelis' => $model->idflordelis, 'idsecao' => $model->idsecao]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Flordelis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idflordelis
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idflordelis, $idsecao)
    {
        $this->findModel($idflordelis, $idsecao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Flordelis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idflordelis
     * @param integer $idsecao
     * @return Flordelis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idflordelis, $idsecao)
    {
        if (($model = Flordelis::findOne(['idflordelis' => $idflordelis, 'idsecao' => $idsecao])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
