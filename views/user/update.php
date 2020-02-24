<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$role = array_keys(Yii::$app->authManager->getRolesByUser(Yii::$app->user->getId()))[0] ;
$this->title = 'Update Profile: ' . ' ' . $model->firstName;
if($role == 'Admin' || $role == 'SuperAdmin') {
    $this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
    $this->params['breadcrumbs'][] = ['label' => $model->firstName, 'url' => ['view', 'id' => $model->id]];
    $this->params['breadcrumbs'][] = 'Update';  
}
?>
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'updateId' => $updateId,
    ]) ?>

</div>
