<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PatientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patients';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Patient', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'patient_id',
            'patient_name',
            'father_name',
            'patient_occupation',
            //'age',
            //'aarogya_setu_app_download',
            //'gender',
            //'mobile',
            //'patient_aadhar_no',
            //'nationality',
            //'state_of_residence',
            //'district',
            //'patient_address',
            //'patient_pin_code',
            //'patient_location_area',
            //'has_patient_lab_confirm_case',
            //'mobile_no_related_to',
            //'patient_category_id',
            //'created_date',
            //'created_by',
            //'updated_date',
            //'updated_by',
            //'test_setting',
            //'testing_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
