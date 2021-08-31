<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\UnderlyingMedicalCondition */

$this->title = 'Update Underlying Medical Condition: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Underlying Medical Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="underlying-medical-condition-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
