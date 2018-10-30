<?php

namespace app\controllers;

use Yii;
use app\models\Tropa;
use app\models\TropaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
<<<<<<< HEAD

use yii\helpers\ArrayHelper;
use app\models\Secao;
=======
<<<<<<< HEAD
use yii\helpers\ArrayHelper;

use app\models\Secao;
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9

>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
<<<<<<< HEAD
     * @param integer $idtropa
     * @param integer $secao_idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idtropa, $secao_idsecao)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtropa, $secao_idsecao),
=======
<<<<<<< HEAD
     * @param integer $idtropa
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idtropa, $idsecao)
    {
        return $this->render('view', [
            'model' => $this->findModel($idtropa, $idsecao),
=======
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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

<<<<<<< HEAD
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtropa' => $model->idtropa, 'secao_idsecao' => $model->secao_idsecao]);
=======
<<<<<<< HEAD
        try {
            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 
                    'idtropa' => $model->idtropa, 
                    'idsecao' => $model->idsecao
                ]);
            }
            
        } catch (\yii\db\IntegrityException $e) {
            
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        }

        $arraySecao = ArrayHelper::map(Secao::find()->all(), 'idsecao','nome');

        return $this->render('create', [
            'model' => $model,
<<<<<<< HEAD
            'arraySecao' => $arraySecao,
=======
            'arraySecao' => $arraySecao
=======
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idtropa]);
        }

        return $this->render('create', [
            'model' => $model,
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        ]);
    }

    /**
     * Updates an existing Tropa model.
     * If update is successful, the browser will be redirected to the 'view' page.
<<<<<<< HEAD
     * @param integer $idtropa
     * @param integer $secao_idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idtropa, $secao_idsecao)
    {
        $model = $this->findModel($idtropa, $secao_idsecao);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idtropa' => $model->idtropa, 'secao_idsecao' => $model->secao_idsecao]);
=======
<<<<<<< HEAD
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
=======
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idtropa]);
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Tropa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
<<<<<<< HEAD
     * @param integer $idtropa
     * @param integer $secao_idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idtropa, $secao_idsecao)
    {
        $this->findModel($idtropa, $secao_idsecao)->delete();
=======
<<<<<<< HEAD
     * @param integer $idtropa
     * @param integer $idsecao
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idtropa, $idsecao)
    {
        $this->findModel($idtropa, $idsecao)->delete();
=======
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tropa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
<<<<<<< HEAD
     * @param integer $idtropa
     * @param integer $secao_idsecao
     * @return Tropa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtropa, $secao_idsecao)
    {
        if (($model = Tropa::findOne(['idtropa' => $idtropa, 'secao_idsecao' => $secao_idsecao])) !== null) {
=======
<<<<<<< HEAD
     * @param integer $idtropa
     * @param integer $idsecao
     * @return Tropa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idtropa, $idsecao)
    {
        if (($model = Tropa::findOne(['idtropa' => $idtropa, 'idsecao' => $idsecao])) !== null) {
=======
     * @param integer $id
     * @return Tropa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tropa::findOne($id)) !== null) {
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
