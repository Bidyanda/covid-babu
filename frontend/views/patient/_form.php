<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Patient */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_id')->textInput() ?>

    <?= $form->field($model, 'patient_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'father_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patient_occupation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'aarogya_setu_app_download')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gender')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', 'Transgender' => 'Transgender', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patient_aadhar_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput() ?>

    <?= $form->field($model, 'state_of_residence')->textInput() ?>

    <?= $form->field($model, 'district')->textInput() ?>

    <?= $form->field($model, 'patient_address')->textInput() ?>

    <?= $form->field($model, 'patient_pin_code')->textInput() ?>

    <?= $form->field($model, 'patient_location_area')->dropDownList([ 'Urban' => 'Urban', 'Rural' => 'Rural', 'Tibal' => 'Tibal', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'has_patient_lab_confirm_case')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'mobile_no_related_to')->dropDownList([ 'Patient' => 'Patient', 'Relative' => 'Relative', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'patient_category_id')->textInput() ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_date')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <?= $form->field($model, 'test_setting')->dropDownList([ 'For Hospital Settings' => 'For Hospital Settings', 'For Community Settings' => 'For Community Settings', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'testing_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
