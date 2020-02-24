<?php

namespace app\controllers;

use Yii;
use app\models\Task;
use app\models\Taskcategory;
use app\models\User;
use app\models\Taskmanagement;
use app\models\taskSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TaskController implements the CRUD actions for Task model.
 */
class TaskController extends Controller
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
     * Lists all Task models.
     * @return mixed
     */
    public function actionIndex()
    {   
        
        $searchModel = new taskSearch();
        $usermodel= new User();
        $taskcategorymodel =Taskcategory::find()->all();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'taskcategorymodel' => $taskcategorymodel,
            'usermodel' => $usermodel,
        ]);
    }

    /**
     * Displays a single Task model.
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
     * Creates a new Task model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
          

        $model = new Task();
        $usermodel= User::find()->all();
        $taskcategorymodel =Taskcategory::find()->all();

        if ($model->load(Yii::$app->request->post())){
            $model->createdOn=date("Y-m-d H:i:s");
            $model->lastUpdatedOn =date("Y-m-d H:i:s");
            $model->save();
            $taskId=$model->id;
             if(isset($_POST['userId']))
                {

                   // print_r($_POST['userId']);  die('test');

                    foreach ($_POST['userId'] as $value) {

                         $tmmodel = new Taskmanagement();
                         $tmmodel->taskId =$taskId;
                         $tmmodel->userId=$value;
                         $tmmodel->createdOn=date("Y-m-d H:i:s");
                         $tmmodel->lastUpdatedOn =date("Y-m-d H:i:s");
                         $tmmodel->save();
                         //print_r($tmmodel->getErrors());
                        


                   }

               }



            return $this->redirect(['view', 'id' => $model->id]);
        }


         
        return $this->render('create', [
            'model' => $model,
            'taskcategorymodel' => $taskcategorymodel,
            'usermodel' => $usermodel,
            
        ]);
    }

    /**
     * Updates an existing Task model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $taskcategorymodel =Taskcategory::find()->all();
        $usermodel=Taskmanagement::find()->where(['taskId'=>$id])->all();
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }



        return $this->render('status', [
            'model' => $model,
             'taskcategorymodel' => $taskcategorymodel,
             'usermodel' => $usermodel,
        ]);
    }

    /**
     * Deletes an existing Task model.
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
     * Finds the Task model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Task the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Task::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

   
}
