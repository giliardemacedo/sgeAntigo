<?php

namespace app\controllers;

use Yii;
use app\models\AreaAtuacao;
use app\models\AreaAtuacaoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AreaAtuacaoController implements the CRUD actions for AreaAtuacao model.
 */
class AreaAtuacaoController extends Controller
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
     * Lists all AreaAtuacao models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AreaAtuacaoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AreaAtuacao model.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
<<<<<<< HEAD
=======
=======
     * @param integer $idareaatuacao
     * @param integer $idatividade
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idareaatuacao, $idatividade)
    {
        return $this->render('view', [
            'model' => $this->findModel($idareaatuacao, $idatividade),
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ]);
    }

    /**
     * Creates a new AreaAtuacao model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AreaAtuacao();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
<<<<<<< HEAD
            return $this->redirect(['view', 'id' => $model->idarea_atuacao]);
=======
<<<<<<< HEAD
            return $this->redirect(['view', 'id' => $model->idarea_atuacao]);
=======
            return $this->redirect(['view', 'idareaatuacao' => $model->idareaatuacao, 'idatividade' => $model->idatividade]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AreaAtuacao model.
     * If update is successful, the browser will be redirected to the 'view' page.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idarea_atuacao]);
<<<<<<< HEAD
=======
=======
     * @param integer $idareaatuacao
     * @param integer $idatividade
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idareaatuacao, $idatividade)
    {
        $model = $this->findModel($idareaatuacao, $idatividade);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idareaatuacao' => $model->idareaatuacao, 'idatividade' => $model->idatividade]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AreaAtuacao model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
<<<<<<< HEAD
=======
=======
     * @param integer $idareaatuacao
     * @param integer $idatividade
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idareaatuacao, $idatividade)
    {
        $this->findModel($idareaatuacao, $idatividade)->delete();
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

        return $this->redirect(['index']);
    }

    /**
     * Finds the AreaAtuacao model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
     * @param integer $id
     * @return AreaAtuacao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AreaAtuacao::findOne($id)) !== null) {
<<<<<<< HEAD
=======
=======
     * @param integer $idareaatuacao
     * @param integer $idatividade
     * @return AreaAtuacao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idareaatuacao, $idatividade)
    {
        if (($model = AreaAtuacao::findOne(['idareaatuacao' => $idareaatuacao, 'idatividade' => $idatividade])) !== null) {
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
