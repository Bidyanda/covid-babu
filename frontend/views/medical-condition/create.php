<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\MedicalCondition */

$this->title = 'Create Medical Condition';
$this->params['breadcrumbs'][] = ['label' => 'Medical Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medical-condition-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
