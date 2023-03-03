<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
 * @property string $nama_obat
 * @property int $jumlah_obat
 * @property int $id_golobat
 * @property int $harga_obat
 * @property int $stok_obat
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'jumlah_obat', 'id_golobat', 'harga_obat', 'stok_obat'], 'required'],
            [['jumlah_obat', 'id_golobat', 'harga_obat', 'stok_obat'], 'integer'],
            [['nama_obat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'nama_obat' => 'Nama Obat',
            'jumlah_obat' => 'Jumlah Obat',
            'id_golobat' => 'Gol Obat',
            'harga_obat' => 'Harga Obat',
            'stok_obat' => 'Stok Obat',
        ];
    }

    public function getGolongan()
    {
        // same as above
        return $this->hasOne(Golongan::class, ['id_golobat' => 'id_golobat']);
    }
}
