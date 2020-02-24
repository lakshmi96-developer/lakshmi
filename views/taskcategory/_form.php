<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Taskcategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="taskcategory-form">

    <?php $form = ActiveForm::begin(); ?>

     <?= $form->field($model, 'categoryName')->textInput() ?>

   

    <!-- <?= $form->field($model, 'createdOn')->textInput() ?>

    <?= $form->field($model, 'lastUpdatedOn')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
