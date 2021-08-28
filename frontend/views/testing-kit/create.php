<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TestingKit */

$this->title = 'Create Testing Kit';
$this->params['breadcrumbs'][] = ['label' => 'Testing Kits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testing-kit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
