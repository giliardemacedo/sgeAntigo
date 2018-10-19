<?php

namespace app\controllers;

use Yii;
use app\models\Cla;
use app\models\ClaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClaController implements the CRUD actions for Cla model.
 */
class ClaController extends Controller
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
     * Lists all Cla models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cla model.
     * @param integer $idcla
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idcla, $idsecao)
    {
        return $this->render('view', [
            'model' => $this->findModel($idcla, $idsecao),
        ]);
    }

    /**
     * Creates a new Cla model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cla();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idcla' => $model->idcla, 'idsecao' => $model->idsecao]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Cla model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idcla
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idcla, $idsecao)
    {
        $model = $this->findModel($idcla, $idsecao);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idcla' => $model->idcla, 'idsecao' => $model->idsecao]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Cla model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idcla
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idcla, $idsecao)
    {
        $this->findModel($idcla, $idsecao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cla model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idcla
     * @param integer $idsecao
     * @return Cla the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idcla, $idsecao)
    {
        if (($model = Cla::findOne(['idcla' => $idcla, 'idsecao' => $idsecao])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
