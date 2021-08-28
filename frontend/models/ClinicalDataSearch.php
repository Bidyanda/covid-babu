<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\ClinicalData;

/**
 * ClinicalDataSearch represents the model behind the search form of `frontend\models\ClinicalData`.
 */
class ClinicalDataSearch extends ClinicalData
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'patient_id', 'type_of_sample', 'sample_id', 'sample_collect_form_id', 'mode_of_transport_visit_testing', 'type_of_vaccine_if_receive', 'Testing_kit_used'], 'integer'],
            [['sample_collection_date', 'sample_received_date', 'date_of_onset_symptom', 'other_symptoms', 'other_underlying_medical_condition', 'covid_vaccine_received', 'date_of_vaccine_dose_1', 'date_of_vaccine_dose_2', 'date_sample_tested', 'is_patient_hospitalized', 'covid_vaccine_2nd_dose_received', 'is_it_repeat_sample', 'final_result_of_sample', 'remark'], 'safe'],
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
        $query = ClinicalData::find();

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
            'sample_collection_date' => $this->sample_collection_date,
            'type_of_sample' => $this->type_of_sample,
            'sample_received_date' => $this->sample_received_date,
            'sample_id' => $this->sample_id,
            'date_of_onset_symptom' => $this->date_of_onset_symptom,
            'sample_collect_form_id' => $this->sample_collect_form_id,
            'date_of_vaccine_dose_1' => $this->date_of_vaccine_dose_1,
            'date_of_vaccine_dose_2' => $this->date_of_vaccine_dose_2,
            'date_sample_tested' => $this->date_sample_tested,
            'mode_of_transport_visit_testing' => $this->mode_of_transport_visit_testing,
            'type_of_vaccine_if_receive' => $this->type_of_vaccine_if_receive,
            'Testing_kit_used' => $this->Testing_kit_used,
        ]);

        $query->andFilterWhere(['like', 'other_symptoms', $this->other_symptoms])
            ->andFilterWhere(['like', 'other_underlying_medical_condition', $this->other_underlying_medical_condition])
            ->andFilterWhere(['like', 'covid_vaccine_received', $this->covid_vaccine_received])
            ->andFilterWhere(['like', 'is_patient_hospitalized', $this->is_patient_hospitalized])
            ->andFilterWhere(['like', 'covid_vaccine_2nd_dose_received', $this->covid_vaccine_2nd_dose_received])
            ->andFilterWhere(['like', 'is_it_repeat_sample', $this->is_it_repeat_sample])
            ->andFilterWhere(['like', 'final_result_of_sample', $this->final_result_of_sample])
            ->andFilterWhere(['like', 'remark', $this->remark]);

        return $dataProvider;
    }
}
