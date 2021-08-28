<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\HospitalCommunity */

$this->title = 'Create Hospital Community';
$this->params['breadcrumbs'][] = ['label' => 'Hospital Communities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hospital-community-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
