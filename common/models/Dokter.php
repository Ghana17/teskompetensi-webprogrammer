<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property int $id_dokter
 * @property string $nama_dokter
 * @property string $surat_ijindokter
 * @property string $jam_praktek
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_dokter', 'surat_ijindokter', 'jam_praktek'], 'required'],
            [['nama_dokter', 'surat_ijindokter'], 'string', 'max' => 255],
            [['jam_praktek'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dokter' => 'Id Dokter',
            'nama_dokter' => 'Nama Dokter',
            'surat_ijindokter' => 'Surat Ijin Dokter',
            'jam_praktek' => 'Jam Praktek',
        ];
    }
}
