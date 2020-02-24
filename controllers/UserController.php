
<?php

namespace app\controllers;

use Yii;
use app\models\User;
use app\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\widgets\ActiveForm;
use yii\web\Response;
use yii\rbac\DbManager;
use yii\base\Security;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
    
    public function actionValidation($id)
    {

        if($id == '')
        {
            $model = new User();
        }
        else {
            $model = $this->findModel($id);  
        }
        
         if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post())) {
           Yii::$app->response->format = Response::FORMAT_JSON;
           return ActiveForm::validate($model);
         }
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        

   
        
        

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {
            date_default_timezone_set('Asia/Calcutta');
            $currentDateTime = date('Y-m-d H:i:s');
            $model->activationLink = 'Y';
            $model->active = 'Y';
            $model->createdOn = $currentDateTime;
            $model->lastUpdatedOn = $currentDateTime;
            $model->password = Yii::$app->getSecurity()->generatePasswordHash($model->password);
            $model->password_repeat = $model->password;
            if($model->save())
            {
                $auth = new DbManager;
                $auth->init();
                $role = $auth->getRole('User');
                $auth->assign($role, $model->id);
            }
            return $this->redirect(['site/login?msg=regsuccess']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->password_repeat = $model->password;
            date_default_timezone_set('Asia/Calcutta');
            $currentDateTime = date('Y-m-d H:i:s');
            $model->lastUpdatedOn = $currentDateTime;
            //print_r($model->getErrors());
            //die('test');
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'updateId' => $id,
            ]);
        }
    }
    
    public function actionUpdateProfile()
    {
        $id = Yii::$app->user->id;
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->password_repeat = $model->password;
            //print_r($model->getErrors());
            //die('test');
            $model->save();
            return $this->redirect(['update-profile']);
        } else {
            return $this->render('update', [
                'model' => $model,
                'updateId' => $id,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
