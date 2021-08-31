<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "patient_symptoms".
 *
 * @property int $id
 * @property int $clinical_data_id
 * @property int $symptom_id
 *
 * @property ClinicalData $clinicalData
 * @property Symptom $symptom
 */
class PatientSymptoms extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient_symptoms';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clinical_data_id', 'symptom_id'], 'required'],
            [['clinical_data_id', 'symptom_id'], 'integer'],
            [['clinical_data_id'], 'exist', 'skipOnError' => true, 'targetClass' => ClinicalData::className(), 'targetAttribute' => ['clinical_data_id' => 'id']],
            [['symptom_id'], 'exist', 'skipOnError' => true, 'targetClass' => Symptom::className(), 'targetAttribute' => ['symptom_id' => 'id']],
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
            'symptom_id' => 'Symptom ID',
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
     * Gets query for [[Symptom]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSymptom()
    {
        return $this->hasOne(Symptom::className(), ['id' => 'symptom_id']);
    }
}
