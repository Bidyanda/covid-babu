<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "medical_condition".
 *
 * @property int $id
 * @property string $name
 *
 * @property UnderlyingMedicalCondition[] $underlyingMedicalConditions
 */
class MedicalCondition extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medical_condition';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
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
     * Gets query for [[UnderlyingMedicalConditions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUnderlyingMedicalConditions()
    {
        return $this->hasMany(UnderlyingMedicalCondition::className(), ['medical_condition_id' => 'id']);
    }
}
