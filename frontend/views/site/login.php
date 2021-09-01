<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth">
      <div class="row flex-grow">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left p-5">
            <h4 style="font-weight:bold;font-size:21px;color:#1bd4a9;text-align:center">ICMR COVID-19 Data Portal</h4>
            <div class="brand-logo" align='center'>
              <img src="/images/logo.png">
            </div>
            <br>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
              <div class="form-group">
                <?= $form->field($model, 'username')->textInput(['id'=>'exampleInputEmail1','placeholder'=>"Username"])->label(false) ?>
              </div>
              <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput(['id'=>'exampleInputPassword1','placeholder'=>"Password"])->label(false) ?>
              </div>
              <div class="mt-3">
                <?= Html::submitButton('SIGN IN', ['class' => 'btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn', 'name' => 'login-button']) ?>
              </div>
              <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                </div>
                <a href="#" class="auth-link text-black">Forgot password?</a>
              </div>
              <div class="mb-2">
                <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                  <i class="mdi mdi-facebook mr-2"></i>Connect using facebook </button>
              </div>
              <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.html" class="text-primary">Create</a>
              </div>
            <?php ActiveForm::end(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
