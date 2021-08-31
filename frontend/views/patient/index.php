<?php

use yii\helpers\Html;
use yii\grid\GridView;
$state = [1 => 'Manipur'];
$district = [1 => 'Imphal-East',2 =>'Imphal-West'];
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PatientSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Patient From All Lab';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="patient-index">

    <!-- <h1><?//= Html::encode($this->title) ?></h1>

    <p>
        <?//= Html::a('Create Patient', ['create'], ['class' => 'btn btn-success']) ?>
    </p> -->
    <div class="panel panel-default">
      <div class="panel panel-body">
        <?php echo $this->render('_search', ['model' => $searchModel]); ?>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel panel-body">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            // 'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                // 'id',
                'patient_id',
                [
                  'attribute'=>'patient_name',
                  'value'=> function($model){
                    return $model->patient_name."(".$model->age.")|(".$model->gender.")";
                  },
                  'label'=>'Patient Info.'
                ],
                [
                  'attribute'=>'father_name',
                  'value' =>function($model)use($state,$district){
                    return $state[$model->state_of_residence].",".$district[$model->district];
                  },
                  'label'=>'State/District'
                ],
                'final_status',
                // 'patient_name',
                // 'father_name',
                // 'patient_occupation',
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

                ['class' => 'yii\grid\ActionColumn',
                  'template' => "{view} {update} {delete}",
                  'buttons'=>[
                    'view'=>function($url,$model){
                      return Html::a('<i class="fa fa-eye"></i>',$url,['class'=>'openModal','size'=>'xl','header'=>'Patient Details']);
                    },
                    'update' => function($url,$model){
                      return Html::a('<i class="fa fa-pencil"></i>',$url);
                    },
                    'delete' => function($url,$model){
                      return Html::a('<i class="fa fa-trash"></i>',$url,['data-method'=>'post','data-confirm'=>'Are you sure to delete ?']);
                    }
                  ]
                ],
            ],
        ]); ?>
      </div>
    </div>
</div>
