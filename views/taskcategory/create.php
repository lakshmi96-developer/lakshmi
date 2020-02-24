<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Taskcategory */

$this->title = 'Create Taskcategory';
$this->params['breadcrumbs'][] = ['label' => 'Taskcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="taskcategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
