<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\taskSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'taskName') ?>

    <?= $form->field($model, 'taskDescription') ?>

    <?= $form->field($model, 'taskComments') ?>

    <?= $form->field($model, 'taskCategory') ?>

    <?php // echo $form->field($model, 'taskStartTime') ?>

    <?php // echo $form->field($model, 'taskEndTime') ?>

    <?php // echo $form->field($model, 'taskStatus') ?>

    <?php // echo $form->field($model, 'createdOn') ?>

    <?php // echo $form->field($model, 'lastUpdatedOn') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
