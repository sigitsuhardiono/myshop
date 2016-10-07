<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property integer $id
 * @property string $kode
 * @property string $nama
 * @property string $deskripsi
 * @property integer $harga
 * @property integer $diskon
 * @property integer $stok
 * @property integer $id_kategori
 * @property integer $id_distributor
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Distributor $idDistributor
 * @property Kategori $idKategori
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kode', 'nama', 'created_at', 'updated_at'], 'required'],
            [['deskripsi'], 'string'],
            [['harga', 'diskon', 'stok', 'id_kategori', 'id_distributor', 'status', 'created_at', 'updated_at'], 'integer'],
            [['kode'], 'string', 'max' => 20],
            [['nama'], 'string', 'max' => 100],
            [['kode'], 'unique'],
            [['id_distributor'], 'exist', 'skipOnError' => true, 'targetClass' => Distributor::className(), 'targetAttribute' => ['id_distributor' => 'id']],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['id_kategori' => 'id']],
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
            'deskripsi' => Yii::t('app', 'Deskripsi'),
            'harga' => Yii::t('app', 'Harga'),
            'diskon' => Yii::t('app', 'Diskon'),
            'stok' => Yii::t('app', 'Stok'),
            'id_kategori' => Yii::t('app', 'Id Kategori'),
            'id_distributor' => Yii::t('app', 'Id Distributor'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDistributor()
    {
        return $this->hasOne(Distributor::className(), ['id' => 'id_distributor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKategori()
    {
        return $this->hasOne(Kategori::className(), ['id' => 'id_kategori']);
    }

    /**
     * @inheritdoc
     * @return BarangQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BarangQuery(get_called_class());
    }
}
