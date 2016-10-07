<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "distributor".
 *
 * @property integer $id
 * @property string $kode
 * @property string $nama
 * @property string $alamat
 * @property string $hp
 * @property string $email
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Barang[] $barangs
 */
class Distributor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'distributor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'created_at', 'updated_at'], 'required'],
            [['alamat'], 'string'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['kode', 'nama', 'hp', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kode' => Yii::t('app', 'Kode'),
            'nama' => Yii::t('app', 'Nama'),
            'alamat' => Yii::t('app', 'Alamat'),
            'hp' => Yii::t('app', 'Hp'),
            'email' => Yii::t('app', 'Email'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_distributor' => 'id']);
    }

    /**
     * @inheritdoc
     * @return DistributorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DistributorQuery(get_called_class());
    }
}
