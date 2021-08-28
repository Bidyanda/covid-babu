<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PatientCategory */

$this->title = 'Create Patient Category';
$this->params['breadcrumbs'][] = ['label' => 'Patient Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
