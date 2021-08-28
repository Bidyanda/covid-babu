<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\HospitalCommunity;

/**
 * HospitalCommunitySearch represents the model behind the search form of `frontend\models\HospitalCommunity`.
 */
class HospitalCommunitySearch extends HospitalCommunity
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'district'], 'integer'],
            [['name', 'pincode', 'address'], 'safe'],
            [['is_hospital'], 'boolean'],
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
        $query = HospitalCommunity::find();

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
            'is_hospital' => $this->is_hospital,
            'district' => $this->district,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'pincode', $this->pincode])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
