<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "testing_kit".
 *
 * @property string $indexes
 * @property int $id
 * @property string $name
 *
 * @property ClinicalData[] $clinicalDatas
 */
class TestingKit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testing_kit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['indexes', 'name'], 'required'],
            [['indexes', 'name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'indexes' => 'Indexes',
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
        return $this->hasMany(ClinicalData::className(), ['Testing_kit_used' => 'id']);
    }
}
