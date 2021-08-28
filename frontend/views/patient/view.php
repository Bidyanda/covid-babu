<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Patients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="patient-view">

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
            'patient_name',
            'father_name',
            'patient_occupation',
            'age',
            'aarogya_setu_app_download',
            'gender',
            'mobile',
            'patient_aadhar_no',
            'nationality',
            'state_of_residence',
            'district',
            'patient_address',
            'patient_pin_code',
            'patient_location_area',
            'has_patient_lab_confirm_case',
            'mobile_no_related_to',
            'patient_category_id',
            'created_date',
            'created_by',
            'updated_date',
            'updated_by',
            'test_setting',
            'testing_date',
        ],
    ]) ?>

</div>
