<?php

namespace app\controllers;

use Yii;
use app\models\FlorDeLisHasEscoteiro;
use app\modelsFlorDeLisHasEscoteiroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * FlorDeLisHasEscoteiroController implements the CRUD actions for FlorDeLisHasEscoteiro model.
 */
class FlorDeLisHasEscoteiroController extends Controller
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
     * Lists all FlorDeLisHasEscoteiro models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new modelsFlorDeLisHasEscoteiroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FlorDeLisHasEscoteiro model.
     * @param integer $flor_de_lis_idflor_de_lis
     * @param integer $flor_de_lis_secao_idsecao
     * @param integer $escoteiro_idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($flor_de_lis_idflor_de_lis, $flor_de_lis_secao_idsecao, $escoteiro_idescoteiro)
    {
        return $this->render('view', [
            'model' => $this->findModel($flor_de_lis_idflor_de_lis, $flor_de_lis_secao_idsecao, $escoteiro_idescoteiro),
        ]);
    }

    /**
     * Creates a new FlorDeLisHasEscoteiro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FlorDeLisHasEscoteiro();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'flor_de_lis_idflor_de_lis' => $model->flor_de_lis_idflor_de_lis, 'flor_de_lis_secao_idsecao' => $model->flor_de_lis_secao_idsecao, 'escoteiro_idescoteiro' => $model->escoteiro_idescoteiro]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FlorDeLisHasEscoteiro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $flor_de_lis_idflor_de_lis
     * @param integer $flor_de_lis_secao_idsecao
     * @param integer $escoteiro_idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($flor_de_lis_idflor_de_lis, $flor_de_lis_secao_idsecao, $escoteiro_idescoteiro)
    {
        $model = $this->findModel($flor_de_lis_idflor_de_lis, $flor_de_lis_secao_idsecao, $escoteiro_idescoteiro);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'flor_de_lis_idflor_de_lis' => $model->flor_de_lis_idflor_de_lis, 'flor_de_lis_secao_idsecao' => $model->flor_de_lis_secao_idsecao, 'escoteiro_idescoteiro' => $model->escoteiro_idescoteiro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FlorDeLisHasEscoteiro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $flor_de_lis_idflor_de_lis
     * @param integer $flor_de_lis_secao_idsecao
     * @param integer $escoteiro_idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($flor_de_lis_idflor_de_lis, $flor_de_lis_secao_idsecao, $escoteiro_idescoteiro)
    {
        $this->findModel($flor_de_lis_idflor_de_lis, $flor_de_lis_secao_idsecao, $escoteiro_idescoteiro)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FlorDeLisHasEscoteiro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $flor_de_lis_idflor_de_lis
     * @param integer $flor_de_lis_secao_idsecao
     * @param integer $escoteiro_idescoteiro
     * @return FlorDeLisHasEscoteiro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($flor_de_lis_idflor_de_lis, $flor_de_lis_secao_idsecao, $escoteiro_idescoteiro)
    {
        if (($model = FlorDeLisHasEscoteiro::findOne(['flor_de_lis_idflor_de_lis' => $flor_de_lis_idflor_de_lis, 'flor_de_lis_secao_idsecao' => $flor_de_lis_secao_idsecao, 'escoteiro_idescoteiro' => $escoteiro_idescoteiro])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
