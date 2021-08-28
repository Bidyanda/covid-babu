<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TestingKit */

$this->title = 'Update Testing Kit: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Testing Kits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="testing-kit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
