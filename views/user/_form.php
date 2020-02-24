<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
$id = '';
if(isset($_GET['id']))
{
    $id = $_GET['id']; 
}
else if(isset($updateId))
{
    $id = $updateId; 
}

$list= [
  ['id' => 'M', 'name' => 'Male'],
  ['id' => 'F', 'name' => 'Female'],
];
$gender = ArrayHelper::map($list, 'id', 'name');

$list= [
  ['id' => '1', 'name' => 'PSBB'],
  ['id' => '2', 'name' => 'SBOA'],
];
$school = ArrayHelper::map($list, 'id', 'name');

$list= [
  ['id' => '1', 'name' => 'I'],
  ['id' => '2', 'name' => 'II'],
  ['id' => '3', 'name' => 'III'],
  ['id' => '4', 'name' => 'IV'],
];
$batch = ArrayHelper::map($list, 'id', 'name');

$list= [
  ['id' => '1', 'name' => 'New India'],
  ['id' => '2', 'name' => 'United India'],
];
$psu_employer = ArrayHelper::map($list, 'id', 'name');

$list= [
  ['id' => '1', 'name' => 'India'],
  ['id' => '2', 'name' => 'USA'],
];
$country = ArrayHelper::map($list, 'id', 'name');

$list= [
  ['id' => '1', 'name' => 'Chennai'],
  ['id' => '2', 'name' => 'New York'],
];
$city = ArrayHelper::map($list, 'id', 'name');

$list= [
  ['id' => '1', 'name' => 'Insurance'],
  ['id' => '2', 'name' => 'Broking'],
];
$sector = ArrayHelper::map($list, 'id', 'name');

?>

<div class="user-form" style="width:400px;">

   <?php $form = ActiveForm::begin(['id'=>$model->formName(),
            'enableAjaxValidation'=>true,'validationUrl' => ['user/validation','id' =>$id],]); ?>

    <?= $form->field($model, 'firstName')->textInput() ?>

    <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php if($model->isNewRecord){ ?>
    
    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
   
    <?= $form->field($model, 'password_repeat')->passwordInput(['maxlength' => true]) ?>
    
    <?php } ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->dropDownList($gender);?>

    <?= $form->field($model, 'school')->dropDownList($school,['prompt'=>'Select']);?>

    <?= $form->field($model, 'batch')->dropDownList($batch,['prompt'=>'Select']);?>

    <?= $form->field($model, 'psu_employer')->dropDownList($psu_employer,['prompt'=>'Select']);?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'country')->dropDownList($country,['prompt'=>'Select']);?>

    <?= $form->field($model, 'city')->dropDownList($city,['prompt'=>'Select']);?>
    
    <?= $form->field($model, 'current_employer')->textInput() ?>

    <?= $form->field($model, 'sector')->dropDownList($sector,['prompt'=>'Select']);?>

    <?= $form->field($model, 'family_location')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
