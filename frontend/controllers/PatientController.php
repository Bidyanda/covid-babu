<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Patient;
use frontend\models\ClinicalData;
use frontend\models\PatientSearch;
use frontend\models\PatientSymptoms;
use frontend\models\UnderlyingMedicalConditions;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PatientController implements the CRUD actions for Patient model.
 */
class PatientController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Patient models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PatientSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Patient model.
     * @param int $id ID
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
     * Creates a new Patient model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Patient();
        $clinical = new ClinicalData();
        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $clinical->load(Yii::$app->request->post())) {
                $transaction = Yii::$app->db->beginTransaction();
                $model->created_by = Yii::$app->user->identity->id;
                $model->testing_date = date('Y-m-d');
                $flag = 1;
                try{
                  if($model->save()){
                    $clinical->patient_id = $model->id;
                    if($clinical->save()){
                      if($model->patient_symptoms){
                        $p_items = [];
                				foreach ($model->patient_symptoms as $item) {
                						$p_items[] = [
                								$clinical->id,
                								$item
                						];
                				}
                				$batch_insert = Yii::$app->db->createCommand()->batchInsert('patient_symptoms', ['clinical_data_id', 'symptom_id'], $p_items)->execute();
                        if(!$batch_insert){
                          $flag = 0;
                        }
                      }
                      if($model->under_lying_medical_condition){
                        $mc_items = [];
                        foreach ($model->under_lying_medical_condition as $item) {
                            $mc_items[] = [
                                $clinical->id,
                                $item
                            ];
                        }
                        $batch_insert = Yii::$app->db->createCommand()->batchInsert('underlying_medical_condition', ['clinical_data_id', 'medical_condition_id'], $mc_items)->execute();
                        if(!$batch_insert){
                          $flag = 0;
                        }
                      }
                    }else {
                      echo "<pre>";
                      var_dump($clinical);
                      var_dump($clinical->errors);die;
                    }
                  }else{
                    var_dump($model->errors);die;
                    $flag = 0;
                  }
                  if($flag){
                    $transaction->commit();
                    Yii::$app->session->setFlash('success','Record inserted successfully');
                  }else {
                    $transaction->rollBack();
                    Yii::$app->session->setFlash('danger','Record inserted failed.');
                  }
                }catch(Exception $e){
                  $transaction->rollBack();
                  Yii::$app->session->setFlash('danger','Record inserted failed.');
                }
                return $this->redirect(Yii::$app->request->referrer);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'clinical' => $clinical
        ]);
    }

    /**
     * Updates an existing Patient model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Patient model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Patient model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Patient the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Patient::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
