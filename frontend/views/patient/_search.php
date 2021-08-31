<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$state = ['1' => 'Manipur'];
$district = [1 => 'Imphal-East',2 =>'Imphal-West'];
/* @var $this yii\web\View */
/* @var $model frontend\models\PatientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <!-- <?//= $form->field($model, 'id') ?> -->
    <div class="row">
      <div class="col-md-3">
        <?= $form->field($model, 'patient_id')->textInput(['placeholder'=>'patient_id','type'=>'number'])->label(false) ?>
      </div>
      <div class="col-md-3">
        <?= $form->field($model, 'patient_name')->textInput(['placeholder'=>'Patient\s Name'])->label(false) ?>
      </div>
      <div class="col-md-3">
          <?php  echo $form->field($model, 'age')->textInput(['placeholder'=>'Age'])->label(false) ?>
      </div>
      <div class="col-md-3">
        <?php echo $form->field($model, 'gender')->dropDownList(['Male'=>'Male','Female'=>'Female','Transgender'=>'Transgender'],['prompt'=>'--Gender--'])->label(false) ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <?php echo $form->field($model, 'mobile')->textInput(['placeholder'=>'Mobile Number'])->label(false) ?>
      </div>
      <div class="col-md-3">
        <?php  echo $form->field($model, 'state_of_residence')->dropDownList($state,['prompt'=>'--State--'])->label(false) ?>
      </div>
      <div class="col-md-3">
          <?php echo $form->field($model, 'district')->dropDownList($district,['prompt'=>'--District--'])->label(false) ?>
      </div>
      <div class="col-md-3">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
      </div>
    </div>



    <!-- <?//= $form->field($model, 'father_name') ?> -->

    <!-- <?//= $form->field($model, 'patient_occupation') ?> -->



    <?php // echo $form->field($model, 'aarogya_setu_app_download') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'mobile') ?>

    <?php // echo $form->field($model, 'patient_aadhar_no') ?>

    <?php // echo $form->field($model, 'nationality') ?>

    <?php // echo $form->field($model, 'state_of_residence') ?>

    <?php // echo $form->field($model, 'district') ?>

    <?php // echo $form->field($model, 'patient_address') ?>

    <?php // echo $form->field($model, 'patient_pin_code') ?>

    <?php // echo $form->field($model, 'patient_location_area') ?>

    <?php // echo $form->field($model, 'has_patient_lab_confirm_case') ?>

    <?php // echo $form->field($model, 'mobile_no_related_to') ?>

    <?php // echo $form->field($model, 'patient_category_id') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_date') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'test_setting') ?>

    <?php // echo $form->field($model, 'testing_date') ?>

    <!-- <div class="form-group">
        <?//= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div> -->

    <?php ActiveForm::end(); ?>

</div>
