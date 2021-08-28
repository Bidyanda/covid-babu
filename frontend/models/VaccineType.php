<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vaccine_type".
 *
 * @property int $id
 * @property string $name
 *
 * @property ClinicalData[] $clinicalDatas
 */
class VaccineType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vaccine_type';
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
     * Gets query for [[ClinicalDatas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClinicalDatas()
    {
        return $this->hasMany(ClinicalData::className(), ['type_of_vaccine_if_receive' => 'id']);
    }
}
