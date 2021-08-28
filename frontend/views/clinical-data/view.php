<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\ClinicalData */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Clinical Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clinical-data-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'patient_id',
            'sample_collection_date',
            'type_of_sample',
            'sample_received_date',
            'sample_id',
            'date_of_onset_symptom',
            'other_symptoms',
            'other_underlying_medical_condition',
            'sample_collect_form_id',
            'covid_vaccine_received',
            'date_of_vaccine_dose_1',
            'date_of_vaccine_dose_2',
            'date_sample_tested',
            'mode_of_transport_visit_testing',
            'is_patient_hospitalized',
            'type_of_vaccine_if_receive',
            'covid_vaccine_2nd_dose_received',
            'Testing_kit_used',
            'is_it_repeat_sample',
            'final_result_of_sample',
            'remark',
        ],
    ]) ?>

</div>
