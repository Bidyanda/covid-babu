<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\UnderlyingMedicalConditionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Underlying Medical Conditions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="underlying-medical-condition-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Underlying Medical Condition', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'clinical_data_id',
            'medical_condition_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
