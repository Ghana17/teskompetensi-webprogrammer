<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property int $umur_pasien
 * @property string $alamat_pasien
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'umur_pasien', 'alamat_pasien'], 'required'],
            [['umur_pasien'], 'integer'],
            [['nama_pasien', 'alamat_pasien'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'umur_pasien' => 'Umur Pasien',
            'alamat_pasien' => 'Alamat Pasien',
        ];
    }
}
