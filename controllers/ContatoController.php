<?php

namespace app\controllers;

use Yii;
use app\models\Contato;
use app\models\ContatoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContatoController implements the CRUD actions for Contato model.
 */
class ContatoController extends Controller
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
     * Lists all Contato models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContatoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Contato model.
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
     * @param integer $idcontato
     * @param integer $idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idcontato, $idescoteiro)
    {
        return $this->render('view', [
            'model' => $this->findModel($idcontato, $idescoteiro),
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ]);
    }

    /**
     * Creates a new Contato model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Contato();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
<<<<<<< HEAD
            return $this->redirect(['view', 'id' => $model->idcontato]);
=======
            return $this->redirect(['view', 'idcontato' => $model->idcontato, 'idescoteiro' => $model->idescoteiro]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Contato model.
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
            return $this->redirect(['view', 'id' => $model->idcontato]);
=======
     * @param integer $idcontato
     * @param integer $idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idcontato, $idescoteiro)
    {
        $model = $this->findModel($idcontato, $idescoteiro);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idcontato' => $model->idcontato, 'idescoteiro' => $model->idescoteiro]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Contato model.
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
     * @param integer $idcontato
     * @param integer $idescoteiro
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idcontato, $idescoteiro)
    {
        $this->findModel($idcontato, $idescoteiro)->delete();
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

        return $this->redirect(['index']);
    }

    /**
     * Finds the Contato model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
<<<<<<< HEAD
     * @param integer $id
     * @return Contato the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Contato::findOne($id)) !== null) {
=======
     * @param integer $idcontato
     * @param integer $idescoteiro
     * @return Contato the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idcontato, $idescoteiro)
    {
        if (($model = Contato::findOne(['idcontato' => $idcontato, 'idescoteiro' => $idescoteiro])) !== null) {
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
