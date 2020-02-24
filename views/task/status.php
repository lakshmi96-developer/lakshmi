<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datecontrol\DateControl;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Task */
/* @var $form yii\widgets\ActiveForm */
$category =ArrayHelper::map($taskcategorymodel,'id','categoryName');

$user = ArrayHelper::map($usermodel,'id', function($usermodel){return $usermodel->userRecord->firstName;});
  
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'taskName')->textInput(['maxlength' => true,'readonly'=> true]) ?>

    <?= $form->field($model, 'taskDescription')->textarea(['rows' => 6,'readonly'=> true]) ?>

    <?= $form->field($model, 'taskComments')->textarea(['rows' => 6,'readonly'=> true]) ?>


     <?= $form->field($model, 'taskCategory')->dropdownList($category,['prompt'=>'Select Category','disabled' => 'disabled']);?>


   <!--  <?= $form->field($model, 'taskStartTime')->textInput() ?>
 -->
     <?= $form->field($model, 'taskStartTime')->widget(DateControl::classname(), [
        'type'=>DateControl::FORMAT_DATETIME,'readonly'=> true,
    ]); ?>


   <!--  <?= $form->field($model, 'taskEndTime')->textInput() ?> -->

    <?= $form->field($model, 'taskEndTime')->widget(DateControl::classname(), [
        'type'=>DateControl::FORMAT_DATETIME,'readonly'=> true,
    ]); ?>

    <!-- <?= $form->field($model, 'taskStatus')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'taskStatus')->dropDownList(['assigned' =>'Assigned','started'=>'Started','completed' =>'Completed'],['prompt'=>'Select Options...']) ?>

<div class="col-sm-4">
     <?=  Html::dropDownList('userId', null,$user,['multiple' => 'multiple','disabled' => 'disabled']) ?>
</div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
   
    <?php ActiveForm::end(); ?>

</div>
