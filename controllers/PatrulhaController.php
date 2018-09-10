<?php

namespace app\controllers;

use Yii;
use app\models\Patrulha;
use app\models\PatrulhaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


use yii\helpers\ArrayHelper;
use app\models\Tropa;
/**
 * PatrulhaController implements the CRUD actions for Patrulha model.
 */
class PatrulhaController extends Controller
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
     * Lists all Patrulha models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PatrulhaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Patrulha model.
     * @param integer $idpatrulha
     * @param integer $idtropa
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idpatrulha, $idtropa)
    {
        return $this->render('view', [
            'model' => $this->findModel($idpatrulha, $idtropa),
        ]);
    }

    /**
     * Creates a new Patrulha model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Patrulha();

        try {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idpatrulha' => $model->idpatrulha, 'idtropa' => $model->idtropa]);
            }
        } catch (\yii\db\IntegrityException $e) {
            
        }
        $data = ArrayHelper::map(Tropa::find()->all(),'idtropa','nome');

        return $this->render('create', [
            'data' => $data,
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Patrulha model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idpatrulha
     * @param integer $idtropa
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idpatrulha, $idtropa)
    {
        $model = $this->findModel($idpatrulha, $idtropa);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idpatrulha' => $model->idpatrulha, 'idtropa' => $model->idtropa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Patrulha model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idpatrulha
     * @param integer $idtropa
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idpatrulha, $idtropa)
    {
        $this->findModel($idpatrulha, $idtropa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Patrulha model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idpatrulha
     * @param integer $idtropa
     * @return Patrulha the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idpatrulha, $idtropa)
    {
        if (($model = Patrulha::findOne(['idpatrulha' => $idpatrulha, 'idtropa' => $idtropa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
