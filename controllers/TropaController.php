<?php

namespace app\controllers;

use Yii;
use app\models\Tropa;
use app\models\TropaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

use app\models\Secao;

/**
 * TropaController implements the CRUD actions for Tropa model.
 */
class TropaController extends Controller
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
     * Lists all Tropa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TropaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tropa model.
     * @param integer $idtropa
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idtropa, $idsecao)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtropa, $idsecao),
        ]);
    }

    /**
     * Creates a new Tropa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tropa();

        try {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 
                    'idtropa' => $model->idtropa, 
                    'idsecao' => $model->idsecao
                ]);
            }
            
        } catch (\yii\db\IntegrityException $e) {
            
        }

        $arraySecao = ArrayHelper::map(Secao::find()->all(), 'idsecao','nome');

        return $this->render('create', [
            'model' => $model,
            'arraySecao' => $arraySecao
        ]);
    }

    /**
     * Updates an existing Tropa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idtropa
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idtropa, $idsecao)
    {
        $model = $this->findModel($idtropa, $idsecao);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtropa' => $model->idtropa, 'idsecao' => $model->idsecao]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tropa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idtropa
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idtropa, $idsecao)
    {
        $this->findModel($idtropa, $idsecao)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tropa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idtropa
     * @param integer $idsecao
     * @return Tropa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtropa, $idsecao)
    {
        if (($model = Tropa::findOne(['idtropa' => $idtropa, 'idsecao' => $idsecao])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
