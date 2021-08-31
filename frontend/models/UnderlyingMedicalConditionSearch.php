<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\UnderlyingMedicalCondition;

/**
 * UnderlyingMedicalConditionSearch represents the model behind the search form of `frontend\models\UnderlyingMedicalCondition`.
 */
class UnderlyingMedicalConditionSearch extends UnderlyingMedicalCondition
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'clinical_data_id', 'medical_condition_id'], 'integer'],
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
        $query = UnderlyingMedicalCondition::find();

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
            'clinical_data_id' => $this->clinical_data_id,
            'medical_condition_id' => $this->medical_condition_id,
        ]);

        return $dataProvider;
    }
}
