<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedicalCondition */

$this->title = 'Update Medical Condition: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Medical Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medical-condition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
