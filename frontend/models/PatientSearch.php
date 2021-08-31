<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Patient;

/**
 * PatientSearch represents the model behind the search form of `frontend\models\Patient`.
 */
class PatientSearch extends Patient
{
    /**
     * {@inheritdoc}
     */
    public $final_status;
    public function rules()
    {
        return [
            [['id', 'patient_id', 'age','nationality', 'state_of_residence', 'district', 'patient_address', 'patient_pin_code', 'patient_category_id', 'created_by', 'updated_by'], 'integer'],
            [['patient_name', 'father_name', 'patient_occupation', 'aarogya_setu_app_download', 'gender', 'mobile', 'patient_aadhar_no', 'patient_location_area', 'has_patient_lab_confirm_case', 'mobile_no_related_to', 'created_date', 'updated_date', 'test_setting', 'testing_date','final_status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Patient::find()->select('patient.*,clinical_data.final_result_of_sample as final_status')->leftjoin('clinical_data','clinical_data.patient_id=patient.id');

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'patient_id' => $this->patient_id,
            'age' => $this->age,
            'nationality' => $this->nationality,
            'state_of_residence' => $this->state_of_residence,
            'district' => $this->district,
            'patient_address' => $this->patient_address,
            'patient_pin_code' => $this->patient_pin_code,
            'patient_category_id' => $this->patient_category_id,
            'created_date' => $this->created_date,
            'created_by' => $this->created_by,
            'updated_date' => $this->updated_date,
            'updated_by' => $this->updated_by,
            'testing_date' => $this->testing_date,
        ]);

        $query->andFilterWhere(['like', 'patient_name', $this->patient_name])
            ->andFilterWhere(['like', 'father_name', $this->father_name])
            ->andFilterWhere(['like', 'patient_occupation', $this->patient_occupation])
            ->andFilterWhere(['like', 'aarogya_setu_app_download', $this->aarogya_setu_app_download])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'patient_aadhar_no', $this->patient_aadhar_no])
            ->andFilterWhere(['like', 'patient_location_area', $this->patient_location_area])
            ->andFilterWhere(['like', 'has_patient_lab_confirm_case', $this->has_patient_lab_confirm_case])
            ->andFilterWhere(['like', 'mobile_no_related_to', $this->mobile_no_related_to])
            ->andFilterWhere(['like', 'test_setting', $this->test_setting]);

        return $dataProvider;
    }
}
