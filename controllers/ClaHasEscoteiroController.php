<?php

namespace app\controllers;

use Yii;
use app\models\ClaHasEscoteiro;
use app\models\ClaHasEscoteiroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClaHasEscoteiroController implements the CRUD actions for ClaHasEscoteiro model.
 */
class ClaHasEscoteiroController extends Controller
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
     * Lists all ClaHasEscoteiro models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClaHasEscoteiroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ClaHasEscoteiro model.
     * @param integer $cla_idcla
     * @param integer $cla_secao_idsecao
     * @param integer $escoteiro_idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($cla_idcla, $cla_secao_idsecao, $escoteiro_idescoteiro)
    {
        return $this->render('view', [
            'model' => $this->findModel($cla_idcla, $cla_secao_idsecao, $escoteiro_idescoteiro),
        ]);
    }

    /**
     * Creates a new ClaHasEscoteiro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ClaHasEscoteiro();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cla_idcla' => $model->cla_idcla, 'cla_secao_idsecao' => $model->cla_secao_idsecao, 'escoteiro_idescoteiro' => $model->escoteiro_idescoteiro]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ClaHasEscoteiro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $cla_idcla
     * @param integer $cla_secao_idsecao
     * @param integer $escoteiro_idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($cla_idcla, $cla_secao_idsecao, $escoteiro_idescoteiro)
    {
        $model = $this->findModel($cla_idcla, $cla_secao_idsecao, $escoteiro_idescoteiro);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'cla_idcla' => $model->cla_idcla, 'cla_secao_idsecao' => $model->cla_secao_idsecao, 'escoteiro_idescoteiro' => $model->escoteiro_idescoteiro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ClaHasEscoteiro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $cla_idcla
     * @param integer $cla_secao_idsecao
     * @param integer $escoteiro_idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($cla_idcla, $cla_secao_idsecao, $escoteiro_idescoteiro)
    {
        $this->findModel($cla_idcla, $cla_secao_idsecao, $escoteiro_idescoteiro)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ClaHasEscoteiro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $cla_idcla
     * @param integer $cla_secao_idsecao
     * @param integer $escoteiro_idescoteiro
     * @return ClaHasEscoteiro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($cla_idcla, $cla_secao_idsecao, $escoteiro_idescoteiro)
    {
        if (($model = ClaHasEscoteiro::findOne(['cla_idcla' => $cla_idcla, 'cla_secao_idsecao' => $cla_secao_idsecao, 'escoteiro_idescoteiro' => $escoteiro_idescoteiro])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
