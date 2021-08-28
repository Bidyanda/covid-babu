<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Samptoms */

$this->title = 'Update Samptoms: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Samptoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="samptoms-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
