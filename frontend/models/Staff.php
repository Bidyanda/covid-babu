<?php

namespace frontend\models;
use common\models\User;
use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string $name
 * @property int $hosptial_community_id
 * @property int $user_id
 *
 * @property HospitalCommunity $hosptialCommunity
 * @property User $user
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'hosptial_community_id', 'user_id'], 'required'],
            [['hosptial_community_id', 'user_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['hosptial_community_id'], 'exist', 'skipOnError' => true, 'targetClass' => HospitalCommunity::className(), 'targetAttribute' => ['hosptial_community_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'hosptial_community_id' => 'Hosptial Community ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[HosptialCommunity]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHosptialCommunity()
    {
        return $this->hasOne(HospitalCommunity::className(), ['id' => 'hosptial_community_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
