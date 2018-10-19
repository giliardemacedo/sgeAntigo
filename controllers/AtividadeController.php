<?php

namespace app\controllers;

use Yii;
use app\models\Atividade;
<<<<<<< HEAD
use app\models\AtividadeAtuacaoSearch;
=======
use app\models\AtividadeSearch;
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AtividadeController implements the CRUD actions for Atividade model.
 */
class AtividadeController extends Controller
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
     * Lists all Atividade models.
     * @return mixed
     */
    public function actionIndex()
    {
<<<<<<< HEAD
        $searchModel = new AtividadeAtuacaoSearch();
=======
        $searchModel = new AtividadeSearch();
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Atividade model.
<<<<<<< HEAD
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
=======
     * @param integer $idatividade
     * @param integer $idramo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idatividade, $idramo)
    {
        return $this->render('view', [
            'model' => $this->findModel($idatividade, $idramo),
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ]);
    }

    /**
     * Creates a new Atividade model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Atividade();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
<<<<<<< HEAD
            return $this->redirect(['view', 'id' => $model->idatividade]);
=======
            return $this->redirect(['view', 'idatividade' => $model->idatividade, 'idramo' => $model->idramo]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Atividade model.
     * If update is successful, the browser will be redirected to the 'view' page.
<<<<<<< HEAD
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idatividade]);
=======
     * @param integer $idatividade
     * @param integer $idramo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idatividade, $idramo)
    {
        $model = $this->findModel($idatividade, $idramo);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idatividade' => $model->idatividade, 'idramo' => $model->idramo]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Atividade model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
<<<<<<< HEAD
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
=======
     * @param integer $idatividade
     * @param integer $idramo
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idatividade, $idramo)
    {
        $this->findModel($idatividade, $idramo)->delete();
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

        return $this->redirect(['index']);
    }

    /**
     * Finds the Atividade model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
<<<<<<< HEAD
     * @param integer $id
     * @return Atividade the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Atividade::findOne($id)) !== null) {
=======
     * @param integer $idatividade
     * @param integer $idramo
     * @return Atividade the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idatividade, $idramo)
    {
        if (($model = Atividade::findOne(['idatividade' => $idatividade, 'idramo' => $idramo])) !== null) {
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
