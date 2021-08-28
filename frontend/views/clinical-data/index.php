<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ClinicalDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clinical Datas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clinical-data-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Clinical Data', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'patient_id',
            'sample_collection_date',
            'type_of_sample',
            'sample_received_date',
            //'sample_id',
            //'date_of_onset_symptom',
            //'other_symptoms',
            //'other_underlying_medical_condition',
            //'sample_collect_form_id',
            //'covid_vaccine_received',
            //'date_of_vaccine_dose_1',
            //'date_of_vaccine_dose_2',
            //'date_sample_tested',
            //'mode_of_transport_visit_testing',
            //'is_patient_hospitalized',
            //'type_of_vaccine_if_receive',
            //'covid_vaccine_2nd_dose_received',
            //'Testing_kit_used',
            //'is_it_repeat_sample',
            //'final_result_of_sample',
            //'remark',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
