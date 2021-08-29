<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "clinical_data".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $sample_collection_date
 * @property int $type_of_sample
 * @property string $sample_received_date
 * @property int $sample_id
 * @property string|null $date_of_onset_symptom
 * @property string|null $other_symptoms
 * @property string|null $other_underlying_medical_condition
 * @property int $sample_collect_form_id
 * @property string $covid_vaccine_received
 * @property string|null $date_of_vaccine_dose_1
 * @property string|null $date_of_vaccine_dose_2
 * @property string $date_sample_tested
 * @property int $mode_of_transport_visit_testing
 * @property string $is_patient_hospitalized
 * @property int|null $type_of_vaccine_if_receive
 * @property string $covid_vaccine_2nd_dose_received
 * @property int $Testing_kit_used
 * @property string $is_it_repeat_sample
 * @property string|null $final_result_of_sample
 * @property string|null $remark
 *
 * @property PatientSymptoms[] $patientSymptoms
 * @property TestingKit $testingKitUsed
 * @property VaccineType $typeOfVaccineIfReceive
 * @property UnderlyingMedicalCondition[] $underlyingMedicalConditions
 */
class ClinicalData extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'clinical_data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patient_id','symptom_status', 'sample_collection_date', 'type_of_sample', 'sample_received_date', 'sample_id', 'sample_collect_form_id', 'covid_vaccine_received', 'date_sample_tested', 'mode_of_transport_visit_testing', 'is_patient_hospitalized', 'covid_vaccine_2nd_dose_received', 'Testing_kit_used', 'is_it_repeat_sample'], 'required'],
            [['patient_id', 'type_of_sample', 'sample_id', 'sample_collect_form_id', 'mode_of_transport_visit_testing', 'type_of_vaccine_if_receive', 'Testing_kit_used'], 'integer'],
            [['sample_collection_date', 'sample_received_date', 'date_of_onset_symptom', 'date_of_vaccine_dose_1', 'date_of_vaccine_dose_2', 'date_sample_tested'], 'safe'],
            [['covid_vaccine_received', 'is_patient_hospitalized', 'covid_vaccine_2nd_dose_received', 'is_it_repeat_sample', 'final_result_of_sample'], 'string'],
            [['other_symptoms', 'other_underlying_medical_condition', 'remark'], 'string', 'max' => 255],
            [['sample_id'], 'unique'],
            [['Testing_kit_used'], 'exist', 'skipOnError' => true, 'targetClass' => TestingKit::className(), 'targetAttribute' => ['Testing_kit_used' => 'id']],
            [['type_of_vaccine_if_receive'], 'exist', 'skipOnError' => true, 'targetClass' => VaccineType::className(), 'targetAttribute' => ['type_of_vaccine_if_receive' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'sample_collection_date' => 'Sample Collection Date',
            'type_of_sample' => 'Type Of Sample',
            'sample_received_date' => 'Sample Received Date',
            'sample_id' => 'Sample ID',
            'date_of_onset_symptom' => 'Date Of Onset Symptoms',
            'other_symptoms' => 'Other Symptoms',
            'other_underlying_medical_condition' => 'Other Underlying Medical Condition',
            'sample_collect_form_id' => 'Sample Collect Form ID',
            'covid_vaccine_received' => 'Covid Vaccine Received',
            'date_of_vaccine_dose_1' => 'Date Of Vaccine Dose 1',
            'date_of_vaccine_dose_2' => 'Date Of Vaccine Dose 2',
            'date_sample_tested' => 'Date Sample Tested',
            'mode_of_transport_visit_testing' => 'Mode Of Transport Visit Testing',
            'is_patient_hospitalized' => 'Is Patient Hospitalized',
            'type_of_vaccine_if_receive' => 'Type Of Vaccine If Receive',
            'covid_vaccine_2nd_dose_received' => 'Covid Vaccine 2nd Dose Received',
            'Testing_kit_used' => 'Testing Kit Used',
            'is_it_repeat_sample' => 'Is It Repeat Sample',
            'final_result_of_sample' => 'Final Result Of Sample',
            'remark' => 'Remark',
            'symptom_status' => 'Symptom Status'
        ];
    }

    /**
     * Gets query for [[PatientSymptoms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientSymptoms()
    {
        return $this->hasMany(PatientSymptoms::className(), ['clinical_data_id' => 'id']);
    }

    /**
     * Gets query for [[TestingKitUsed]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTestingKitUsed()
    {
        return $this->hasOne(TestingKit::className(), ['id' => 'Testing_kit_used']);
    }

    /**
     * Gets query for [[TypeOfVaccineIfReceive]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTypeOfVaccineIfReceive()
    {
        return $this->hasOne(VaccineType::className(), ['id' => 'type_of_vaccine_if_receive']);
    }

    /**
     * Gets query for [[UnderlyingMedicalConditions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnderlyingMedicalConditions()
    {
        return $this->hasMany(UnderlyingMedicalCondition::className(), ['clinical_data_id' => 'id']);
    }
}
