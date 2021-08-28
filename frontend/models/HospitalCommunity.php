<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "hospital_community".
 *
 * @property int $id
 * @property string $name
 * @property bool $is_hospital
 * @property int $district
 * @property string $pincode
 * @property string $address
 *
 * @property Staff[] $staff
 */
class HospitalCommunity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hospital_community';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'district', 'pincode', 'address'], 'required'],
            [['is_hospital'], 'boolean'],
            [['district'], 'integer'],
            [['name', 'address'], 'string', 'max' => 255],
            [['pincode'], 'string', 'max' => 6],
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
            'is_hospital' => 'Is Hospital',
            'district' => 'District',
            'pincode' => 'Pincode',
            'address' => 'Address',
        ];
    }

    /**
     * Gets query for [[Staff]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStaff()
    {
        return $this->hasMany(Staff::className(), ['hosptial_community_id' => 'id']);
    }
}
