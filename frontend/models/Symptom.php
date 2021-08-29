<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "symptom".
 *
 * @property int $id
 * @property string $name
 *
 * @property PatientSymptoms[] $patientSymptoms
 */
class Symptom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'symptom';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * Gets query for [[PatientSymptoms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientSymptoms()
    {
        return $this->hasMany(PatientSymptoms::className(), ['symptom_id' => 'id']);
    }
}
