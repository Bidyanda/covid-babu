<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ClinicalData */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clinical-data-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($clinical, 'patient_id')->textInput() ?>

    <?= $form->field($clinical, 'sample_collection_date')->textInput() ?>

    <?= $form->field($clinical, 'type_of_sample')->textInput() ?>

    <?= $form->field($clinical, 'sample_received_date')->textInput() ?>

    <?= $form->field($clinical, 'sample_id')->textInput() ?>

    <?= $form->field($clinical, 'date_of_onset_symptom')->textInput() ?>

    <?= $form->field($clinical, 'other_symptoms')->textInput(['maxlength' => true]) ?>

    <?= $form->field($clinical, 'other_underlying_medical_condition')->textInput(['maxlength' => true]) ?>

    <?= $form->field($clinical, 'sample_collect_form_id')->textInput() ?>

    <?= $form->field($clinical, 'covid_vaccine_received')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($clinical, 'date_of_vaccine_dose_1')->textInput() ?>

    <?= $form->field($clinical, 'date_of_vaccine_dose_2')->textInput() ?>

    <?= $form->field($clinical, 'date_sample_tested')->textInput() ?>

    <?= $form->field($clinical, 'mode_of_transport_visit_testing')->textInput() ?>

    <?= $form->field($clinical, 'is_patient_hospitalized')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($clinical, 'type_of_vaccine_if_receive')->textInput() ?>

    <?= $form->field($clinical, 'covid_vaccine_2nd_dose_received')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($clinical, 'Testing_kit_used')->textInput() ?>

    <?= $form->field($clinical, 'is_it_repeat_sample')->dropDownList([ 'Yes' => 'Yes', 'No' => 'No', ], ['prompt' => '']) ?>

    <?= $form->field($clinical, 'final_result_of_sample')->dropDownList([ 'Antigen Positive' => 'Antigen Positive', 'Antigen Negative' => 'Antigen Negative', ], ['prompt' => '']) ?>

    <?= $form->field($clinical, 'remark')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
