<?php

namespace app\controllers;

use Yii;
use app\models\Escoteiro;
use app\models\EscoteiroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

use app\models\Secao;
use app\models\Contato;
use app\models\Endereco;
/**
 * EscoteiroController implements the CRUD actions for Escoteiro model.
 */
class EscoteiroController extends Controller
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
     * Lists all Escoteiro models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EscoteiroSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Escoteiro model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Escoteiro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        //Isso nos assegura que se um dos modelos não for salvo o outro também não será e dessa
        //forma, será dado um ROLLBACK.
        //$transaction = \Yii::$app->db->beginTransaction();

        $model = new Escoteiro();
        $arrayContato = new Contato();
        $arrayEndereco = new Endereco();


        try {
            /*
            $post = Yii::$app->request->post();

            if($model->load($post) && $model->valiedate())
            {
                if($arrayContato->load($post) && $model->valiedate())
                {
                    $transaction->commit();
                }
            }
            */

            if($model->load(Yii::$app->request->post()) && $arrayEndereco->load(Yii::$app->request->post()) &&$arrayContato->load(Yii::$app->request->post()))
            {
                if($arrayContato->save() && $arrayEndereco->save())
                {
                    $model->idcontato = $arrayContato->idcontato;
                    $model->idendereco= $arrayEndereco->idendereco;
                    if($model->save())
                    {
                    return $this->redirect(['view', 
                        'id' => $model->idescoteiro,
                    ]);
                            
                    }
                }


            }
            
        } catch (\yii\db\IntegrityException $e) {
            
        }
        /*
        }catch (Exception $e) {
            $transaction->rollBack();
        }
        */

        $arraySecao = ArrayHelper::map(Secao::find()->all(), 'idsecao','nome');
        //$arrayContato = ArrayHelper::map(Contato::find()->all(), 'idcontato', 'numerotelefone', 'email');
        //$arrayContato = ArrayHelper::map(Secao::find()->all(), 'idcontato','nome');
     
        return $this->render('create', [
            'model' => $model,
            'arraySecao' => $arraySecao,
            'arrayContato' => $arrayContato,
            'arrayEndereco' => $arrayEndereco

        ]);
    }

    /**
     * Updates an existing Escoteiro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idescoteiro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Escoteiro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Escoteiro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Escoteiro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Escoteiro::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
