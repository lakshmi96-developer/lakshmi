<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'firstName',
            'lastName',
            //'title',
            'email:email',
            // 'password',
             'mobile',
            // 'authKey',
            // 'accessToken',
            // 'activationLink',
            // 'active',
            // 'gender',
            // 'school',
            // 'batch',
            // 'psu_employer',
            // 'address:ntext',
            // 'country',
            // 'city',
            // 'current_employer',
            // 'sector',
            // 'family_location:ntext',
            // 'createdOn',
            // 'lastUpdatedOn',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
