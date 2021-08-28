<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\ClinicalData */

$this->title = 'Create Clinical Data';
$this->params['breadcrumbs'][] = ['label' => 'Clinical Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clinical-data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
