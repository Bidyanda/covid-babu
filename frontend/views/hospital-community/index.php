<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HospitalCommunitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Hospital Communities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hospital-community-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Hospital Community', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'is_hospital:boolean',
            'district',
            'pincode',
            //'address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
