<?php

namespace app\controllers;

use Yii;
use app\models\Alcateia;
use app\models\AlcateiaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AlcateiaController implements the CRUD actions for Alcateia model.
 */
class AlcateiaController extends Controller
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
     * Lists all Alcateia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlcateiaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Alcateia model.
     * @param integer $idalcateia
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idalcateia, $idsecao)
    {
        return $this->render('view', [
            'model' => $this->findModel($idalcateia, $idsecao),
        ]);
    }

    /**
     * Creates a new Alcateia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Alcateia();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idalcateia' => $model->idalcateia, 'idsecao' => $model->idsecao]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Alcateia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idalcateia
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idalcateia, $idsecao)
    {
        $model = $this->findModel($idalcateia, $idsecao);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idalcateia' => $model->idalcateia, 'idsecao' => $model->idsecao]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Alcateia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idalcateia
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idalcateia, $idsecao)
    {
        $this->findModel($idalcateia, $idsecao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Alcateia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idalcateia
     * @param integer $idsecao
     * @return Alcateia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idalcateia, $idsecao)
    {
        if (($model = Alcateia::findOne(['idalcateia' => $idalcateia, 'idsecao' => $idsecao])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
