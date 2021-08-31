<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "underlying_medical_condition".
 *
 * @property int $id
 * @property int $clinical_data_id
 * @property int $medical_condition_id
 *
 * @property ClinicalData $clinicalData
 * @property MedicalCondition $medicalCondition
 */
class UnderlyingMedicalCondition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'underlying_medical_condition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clinical_data_id', 'medical_condition_id'], 'required'],
            [['clinical_data_id', 'medical_condition_id'], 'integer'],
            [['clinical_data_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClinicalData::className(), 'targetAttribute' => ['clinical_data_id' => 'id']],
            [['medical_condition_id'], 'exist', 'skipOnError' => true, 'targetClass' => MedicalCondition::className(), 'targetAttribute' => ['medical_condition_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clinical_data_id' => 'Clinical Data ID',
            'medical_condition_id' => 'Medical Condition ID',
        ];
    }

    /**
     * Gets query for [[ClinicalData]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClinicalData()
    {
        return $this->hasOne(ClinicalData::className(), ['id' => 'clinical_data_id']);
    }

    /**
     * Gets query for [[MedicalCondition]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedicalCondition()
    {
        return $this->hasOne(MedicalCondition::className(), ['id' => 'medical_condition_id']);
    }
}
