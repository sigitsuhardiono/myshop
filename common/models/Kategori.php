<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $id_jenis
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Barang[] $barangs
 * @property Jenis $idJenis
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'created_at', 'updated_at'], 'required'],
            [['id_jenis', 'status', 'created_at', 'updated_at'], 'integer'],
            [['nama'], 'string', 'max' => 255],
            [['nama'], 'unique'],
            [['id_jenis'], 'exist', 'skipOnError' => true, 'targetClass' => Jenis::className(), 'targetAttribute' => ['id_jenis' => 'id']],
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
            'id_jenis' => Yii::t('app', 'Id Jenis'),
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
        return $this->hasMany(Barang::className(), ['id_kategori' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdJenis()
    {
        return $this->hasOne(Jenis::className(), ['id' => 'id_jenis']);
    }

    /**
     * @inheritdoc
     * @return KategoriQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KategoriQuery(get_called_class());
    }
}
