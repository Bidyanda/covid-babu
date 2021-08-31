<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PatientSymptoms */

$this->title = 'Create Patient Symptoms';
$this->params['breadcrumbs'][] = ['label' => 'Patient Symptoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-symptoms-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
