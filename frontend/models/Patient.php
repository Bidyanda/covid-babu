<?php

namespace frontend\models;
use common\models\User;
use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property int $id
 * @property int $patient_id
 * @property string $patient_name
 * @property string|null $father_name
 * @property string $patient_occupation
 * @property int $age
 * @property string $aarogya_setu_app_download
 * @property string $gender
 * @property string $mobile
 * @property string|null $patient_aadhar_no
 * @property int $nationality
 * @property int $state_of_residence
 * @property int $district
 * @property int $patient_address
 * @property int|null $patient_pin_code
 * @property string|null $patient_location_area
 * @property string|null $has_patient_lab_confirm_case
 * @property string $mobile_no_related_to
 * @property int $patient_category_id
 * @property string $created_date
 * @property int $created_by
 * @property string $updated_date
 * @property int|null $updated_by
 * @property string $test_setting
 * @property string $testing_date
 *
 * @property User $createdBy
 * @property PatientCategory $patientCategory
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * {@inheritdoc}
     */
    public $patient_symptoms,$under_lying_medical_condition,$final_status;
    public function rules()
    {
        return [
            [['patient_id', 'patient_name', 'patient_occupation', 'age', 'aarogya_setu_app_download', 'gender', 'mobile', 'nationality', 'state_of_residence', 'district', 'patient_address', 'mobile_no_related_to', 'patient_category_id', 'created_by', 'test_setting', 'testing_date'], 'required'],
            [['patient_id', 'age', 'nationality', 'state_of_residence', 'district', 'patient_category_id', 'created_by', 'updated_by'], 'integer'],
            [['aarogya_setu_app_download', 'gender', 'patient_location_area', 'has_patient_lab_confirm_case', 'mobile_no_related_to', 'test_setting'], 'string'],
            [['created_date', 'updated_date', 'testing_date','patient_symptoms','under_lying_medical_condition' ,'updated_date','final_status'], 'safe'],
            [['patient_name', 'father_name', 'patient_occupation', 'patient_address'], 'string', 'max' => 255],
            [['mobile'], 'string', 'max' => 10],
            // [['patient_type','patient_pin_code'],'string'],
            [['patient_aadhar_no'], 'string', 'max' => 12],
            [['patient_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => PatientCategory::className(), 'targetAttribute' => ['patient_category_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
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
            'patient_symptoms' => 'Symptoms',
            'under_lying_medical_condition' => 'Under Lying Medical Condition',
            // 'patient_type' =>'Patient type',
            'patient_name' => 'Patient Name',
            'father_name' => 'Father\'s Name',
            'patient_occupation' => 'Patient Occupation',
            'age' => 'Age',
            'aarogya_setu_app_download' => 'Aarogya Setu App Download',
            'gender' => 'Gender',
            'mobile' => 'Mobile',
            'patient_aadhar_no' => 'Patient Aadhar No',
            'nationality' => 'Nationality',
            'state_of_residence' => 'State Of Residence',
            'district' => 'District',
            'patient_address' => 'Patient Address',
            'patient_pin_code' => 'Patient Pin Code',
            'patient_location_area' => 'Patient Location Area',
            'has_patient_lab_confirm_case' => 'Has patient been comes in contact with a lab-confirmed case',
            'mobile_no_related_to' => 'Mobile No Related To',
            'patient_category_id' => 'Patient Category ID',
            'created_date' => 'Created Date',
            'created_by' => 'Created By',
            'updated_date' => 'Updated Date',
            'updated_by' => 'Updated By',
            'test_setting' => 'Test Setting',
            'testing_date' => 'Testing Date',
            'final_status'=> 'Final Status'
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }

    /**
     * Gets query for [[PatientCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatientCategory()
    {
        return $this->hasOne(PatientCategory::className(), ['id' => 'patient_category_id']);
    }
}
