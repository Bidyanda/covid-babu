<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ClinicalDataSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clinical-data-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'sample_collection_date') ?>

    <?= $form->field($model, 'type_of_sample') ?>

    <?= $form->field($model, 'sample_received_date') ?>

    <?php // echo $form->field($model, 'sample_id') ?>

    <?php // echo $form->field($model, 'date_of_onset_symptom') ?>

    <?php // echo $form->field($model, 'other_symptoms') ?>

    <?php // echo $form->field($model, 'other_underlying_medical_condition') ?>

    <?php // echo $form->field($model, 'sample_collect_form_id') ?>

    <?php // echo $form->field($model, 'covid_vaccine_received') ?>

    <?php // echo $form->field($model, 'date_of_vaccine_dose_1') ?>

    <?php // echo $form->field($model, 'date_of_vaccine_dose_2') ?>

    <?php // echo $form->field($model, 'date_sample_tested') ?>

    <?php // echo $form->field($model, 'mode_of_transport_visit_testing') ?>

    <?php // echo $form->field($model, 'is_patient_hospitalized') ?>

    <?php // echo $form->field($model, 'type_of_vaccine_if_receive') ?>

    <?php // echo $form->field($model, 'covid_vaccine_2nd_dose_received') ?>

    <?php // echo $form->field($model, 'Testing_kit_used') ?>

    <?php // echo $form->field($model, 'is_it_repeat_sample') ?>

    <?php // echo $form->field($model, 'final_result_of_sample') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
