<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PatientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="patient-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'patient_id') ?>

    <?= $form->field($model, 'patient_name') ?>

    <?= $form->field($model, 'father_name') ?>

    <?= $form->field($model, 'patient_occupation') ?>

    <?php // echo $form->field($model, 'age') ?>

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

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
