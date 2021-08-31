<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="row">
      <div class="col-lg-4"></div>
        <div class="col-lg-4 login">
            <!-- <h1><?//= Html::encode($this->title) ?></h1> -->

            <p class="text-bold" style="font-size:20px;">ICMR COVID-19 Data Portal</p>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true,'style'=>'text-align:left']) ?>

                <?= $form->field($model, 'password')->passwordInput(['style'=>'text-align:left']) ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <!-- <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div> -->

                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
<style>
.col-lg-4.login {
    border: thin solid #b1a4a4;
    background-color: #efefef;
}
label{
  text-align:left;
}
</style>
