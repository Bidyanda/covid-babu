<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\PatientCategory;
use frontend\models\Symptom;
use frontend\models\VaccineType;
use frontend\models\MedicalCondition;
use dosamigos\datepicker\DatePicker;
use frontend\models\TestingKit;
$testingKit = ArrayHelper::map(TestingKit::find()->all(),'id','name');
$transport = [1=>'Bus',2=>'Car',3=>'Bi-cycle',4=>'Bike',5=>'Others'];
$sample = ['Nasopharyngeal & Oropharyngeal'=>'Nasopharyngeal & Oropharyngeal','Nasopharyngeal Swab'=>'Nasopharyngeal swab','Oropharyngeal swab'=>'Oropharyngeal swab','Nasal swab'=>'Nasal swab','Throat swab'=>'Throat swab','Saliva'=>'Saliva','Sputum'=>'Sputum','BAL'=>'BAL','ETA'=>'ETA'];
$nationality = ['1' => 'Indian'];
$state = ['1' => 'Manipur'];
$district = [1 => 'Imphal-East',2 =>'Imphal-West'];
$category = ArrayHelper::map(PatientCategory::find()->all(),'id','category');
$vaccine = ArrayHelper::map(VaccineType::find()->all(),'id','name');
$medicalCondition = ArrayHelper::map(MedicalCondition::find()->all(),'id','name');
$symptom = ArrayHelper::map(Symptom::find()->all(),'id','name');
$occupation = ['Health Care Worker'=>'Health Care Worker','Police'=>'Police','Sanitation'=>'Sanitation','Security Guards'=>'Security Gards','Others'=>'Others'];
/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>
<div class="panel panel-default">
  <div class="panel-heading text-bold">Patient Information</div>
  <div class="panel panel-body">
    <!-- <div class="patient-form"> -->
          <?= $form->field($model, 'test_setting')->radiolist([ 'For Hospital Settings' => 'For Hospital Settings', 'For Community Settings' => 'For Community Settings'])->label(false) ?>
        <div style="color:red;font-size:11px;"><b>*Please Note-Hospital Settings</b> is for the patients visiting OPD,IPD and Emergency and <b>Community Settings</b> is for patients under containment zone/Non-containment area/Point of entry/Testing on demand</div>
        <div class="row">
          <div class="col-md-6">
            <?= $form->field($model, 'patient_name')->textInput(['maxlength' => true,'placeholder'=>'Patient Name']) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'father_name')->textInput(['maxlength' => true,'placeholder'=>'Father\'s Name']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <?= $form->field($model, 'patient_id')->textInput() ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'patient_occupation')->dropDownList($occupation,['prompt'=>'Select Any One']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <?= $form->field($model, 'age')->textInput() ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'aarogya_setu_app_download')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => 'Select Any One']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', 'Transgender' => 'Transgender', ], ['prompt' => 'Select Gender']) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'has_patient_lab_confirm_case')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => 'Select']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <?= $form->field($model, 'mobile')->textInput(['maxlength' => true,'placeholder'=>'Contact Number']) ?>
          </div>
          <div class="col-md-6">
            <?= $form->field($model, 'mobile_no_related_to')->dropDownList([ 'Patient' => 'Patient', 'Relative' => 'Relative', ], ['prompt' => 'Select to Whome Mobile Number Belongs To']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <?= $form->field($model, 'patient_aadhar_no')->textInput(['maxlength' => true,'placeholder'=>'Aadhaar Number']) ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <?= $form->field($model, 'nationality')->dropDownList($nationality,['prompt' =>'Select']) ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <?= $form->field($model, 'state_of_residence')->dropDownList($state,['prompt' =>'Select State/UT']) ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <?= $form->field($model, 'district')->dropDownList($district,['prompt' =>'Select District']) ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <?= $form->field($model, 'patient_address')->textarea(['rows' =>3]) ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <?= $form->field($model, 'patient_pin_code')->textInput() ?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <?= $form->field($model, 'patient_location_area')->radiolist([ 'Urban' => 'Urban', 'Rural' => 'Rural', 'Tribal' => 'Tribal']) ?>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12">
                <?= $form->field($model, 'patient_category_id')->radiolist($category) ?>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>
<div class="panel panel-default">
  <div class="panel-heading text-bold">Clinical Data</div>
  <div class="panel panel-body">
    <div class="row">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <!-- <?//= $form->field($clinical, 'sample_collection_date')->textInput() ?> -->
            <?= $form->field($clinical, 'sample_collection_date')->widget(
                      DatePicker::className(), [
                          // inline too, not bad
                           // 'inline' => true,
                           // modify template for custom rendering
                          // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                          'clientOptions' => [
                              'autoclose' => true,
                              'format' => 'yyyy-m-dd'
                          ]
                  ]);?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'type_of_sample')->dropDownList($sample,['prompt' =>'Select Sample Type']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'symptom_status')->dropDownList(['Asymptomatic'=>'Asymptomatic','Symptomatic'=>'Symptomatic'],['prompt'=>'Select Status']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($model, 'patient_symptoms')->checkboxlist($symptom) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'other_symptoms')->textInput(['maxlength' => true]) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'sample_collect_form_id')->dropDownList([],['prompt' =>'Select Any One(Only if Community Settings is relected earlier)']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'covid_vaccine_received')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => 'Select Status']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'date_of_vaccine_dose_1')->widget(
                      DatePicker::className(), [
                          // inline too, not bad
                           // 'inline' => true,
                           // modify template for custom rendering
                          // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                          'clientOptions' => [
                              'autoclose' => true,
                              'format' => 'yyyy-m-dd'
                          ]
                  ]);?>
            <!-- <?//= $form->field($clinical, 'date_of_vaccine_dose_1')->textInput() ?> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'date_of_vaccine_dose_2')->widget(
                      DatePicker::className(), [
                          // inline too, not bad
                           // 'inline' => true,
                           // modify template for custom rendering
                          // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                          'clientOptions' => [
                              'autoclose' => true,
                              'format' => 'yyyy-m-dd'
                          ]
                  ]);?>
            <!-- <?//= $form->field($clinical, 'date_of_vaccine_dose_2')->textInput() ?> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'date_sample_tested')->widget(
                      DatePicker::className(), [
                          // inline too, not bad
                           // 'inline' => true,
                           // modify template for custom rendering
                          // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                          'clientOptions' => [
                              'autoclose' => true,
                              'format' => 'yyyy-m-dd'
                          ]
                  ]);?>
            <!-- <?//= $form->field($clinical, 'date_sample_tested')->textInput() ?> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'final_result_of_sample')->dropDownList([ 'Antigen Positive' => 'Antigen Positive', 'Antigen Negative' => 'Antigen Negative', ], ['prompt' => 'Select Final Result']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'mode_of_transport_visit_testing')->dropDownList($transport,['prompt'=>'--Select any one--']) ?>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'sample_received_date')->widget(
                      DatePicker::className(), [
                          // inline too, not bad
                           // 'inline' => true,
                           // modify template for custom rendering
                          // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                          'clientOptions' => [
                              'autoclose' => true,
                              'format' => 'yyyy-m-dd'
                          ]
                  ]);?>
            <!-- <?//= $form->field($clinical, 'sample_received_date')->textInput() ?> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'sample_id')->textInput() ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'date_of_onset_symptom')->widget(
                      DatePicker::className(), [
                          // inline too, not bad
                           // 'inline' => true,
                           // modify template for custom rendering
                          // 'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
                          'clientOptions' => [
                              'autoclose' => true,
                              'format' => 'yyyy-m-dd'
                          ]
                  ]);?>
            <!-- <?//= $form->field($clinical, 'date_of_onset_symptom')->textInput() ?> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($model, 'under_lying_medical_condition')->checkboxlist($medicalCondition) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'other_underlying_medical_condition')->textInput(['maxlength' => true]) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'is_patient_hospitalized')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => 'Select Any One(Only if Hospital settings is selected earlier)']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'type_of_vaccine_if_receive')->dropDownList($vaccine,['prompt'=>'Select Vaccine']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'covid_vaccine_2nd_dose_received')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'Testing_kit_used')->dropDownList($testingKit,['prompt'=>'Select Kit']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'is_it_repeat_sample')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => 'Select Status']) ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <?= $form->field($clinical, 'remark')->textInput(['maxlength' => true]) ?>
          </div>
        </div>
      </div>
    </div><br>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
    </div>
  </div>
</div>
<?php ActiveForm::end(); ?>

<style>
.required > label:after {
    content: '*';
    color: #f44336;
}
label{
  font-size:12px;
}
/* @media (min-width: 992px) */
.col-md-6,.col-md-12 {
  margin-bottom: -10px;
}
</style>
