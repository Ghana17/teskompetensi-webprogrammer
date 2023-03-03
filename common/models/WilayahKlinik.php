<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wilayah_klinik".
 *
 * @property int $id_wilayahklinik
 * @property int $id_wilayah
 * @property string $nama_klinik
 * @property string $alamat_klinik
 * @property int $nomer_telpklinik
 */
class WilayahKlinik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wilayah_klinik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wilayah', 'nama_klinik', 'alamat_klinik', 'nomer_telpklinik'], 'required'],
            [['id_wilayah', 'nama_klinik', 'alamat_klinik', 'nomer_telpklinik'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_wilayahklinik' => 'Id Wilayah klinik',
            'id_wilayah' => 'Wilayah',
            'nama_klinik' => 'Nama Klinik',
            'alamat_klinik' => 'Alamat Klinik',
            'nomer_telpklinik' => 'Nomer Telp. Klinik',
        ];
        return $this->hasOne(Wilayah::class, ['id_wilayah' => 'id_wilayah']);
    }

    public function getWilayah()
    {
        // same as above
        return $this->hasOne(Wilayah::class, ['id_wilayah' => 'id_wilayah']);
    }
}
