<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "jenis".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Kategori[] $kategoris
 */
class Jenis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['nama'], 'string', 'max' => 255],
            [['nama'], 'unique'],
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
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoris()
    {
        return $this->hasMany(Kategori::className(), ['id_jenis' => 'id']);
    }

    /**
     * @inheritdoc
     * @return JenisQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new JenisQuery(get_called_class());
    }
}
