<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\UnderlyingMedicalCondition */

$this->title = 'Create Underlying Medical Condition';
$this->params['breadcrumbs'][] = ['label' => 'Underlying Medical Conditions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="underlying-medical-condition-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
