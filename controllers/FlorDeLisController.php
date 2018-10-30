<?php

namespace app\controllers;

use Yii;
use app\models\FlorDeLis;
use app\models\FlorDeLisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\helpers\ArrayHelper;
use app\models\Secao;
/**
 * FlorDeLisController implements the CRUD actions for FlorDeLis model.
 */
class FlorDeLisController extends Controller
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
     * Lists all FlorDeLis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FlorDeLisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single FlorDeLis model.
     * @param integer $idflor_de_lis
     * @param integer $secao_idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idflor_de_lis, $secao_idsecao)
    {
        return $this->render('view', [
            'model' => $this->findModel($idflor_de_lis, $secao_idsecao),
        ]);
    }

    /**
     * Creates a new FlorDeLis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FlorDeLis();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idflor_de_lis' => $model->idflor_de_lis, 'secao_idsecao' => $model->secao_idsecao]);
        }

        $arraySecao = ArrayHelper::map(Secao::find()->all(), 'idsecao','nome');

        return $this->render('create', [
            'model' => $model,
            'arraySecao' => $arraySecao,
        ]);
    }

    /**
     * Updates an existing FlorDeLis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idflor_de_lis
     * @param integer $secao_idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idflor_de_lis, $secao_idsecao)
    {
        $model = $this->findModel($idflor_de_lis, $secao_idsecao);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idflor_de_lis' => $model->idflor_de_lis, 'secao_idsecao' => $model->secao_idsecao]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing FlorDeLis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idflor_de_lis
     * @param integer $secao_idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idflor_de_lis, $secao_idsecao)
    {
        $this->findModel($idflor_de_lis, $secao_idsecao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the FlorDeLis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idflor_de_lis
     * @param integer $secao_idsecao
     * @return FlorDeLis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idflor_de_lis, $secao_idsecao)
    {
        if (($model = FlorDeLis::findOne(['idflor_de_lis' => $idflor_de_lis, 'secao_idsecao' => $secao_idsecao])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
