<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\UnderlyingMedicalCondition */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="underlying-medical-condition-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clinical_data_id')->textInput() ?>

    <?= $form->field($model, 'medical_condition_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
