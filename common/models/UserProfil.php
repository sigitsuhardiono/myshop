<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_profil".
 *
 * @property integer $id
 * @property string $nama
 * @property string $alamat
 * @property string $email
 * @property string $hp
 * @property integer $id_user
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property User $idUser
 */
class UserProfil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_profil';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alamat'], 'string'],
            [['id_user', 'status', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
            [['nama'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100],
            [['hp'], 'string', 'max' => 13],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nama' => Yii::t('app', 'Nama'),
            'alamat' => Yii::t('app', 'Alamat'),
            'email' => Yii::t('app', 'Email'),
            'hp' => Yii::t('app', 'Hp'),
            'id_user' => Yii::t('app', 'Id User'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

    /**
     * @inheritdoc
     * @return UserProfilQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserProfilQuery(get_called_class());
    }
}
