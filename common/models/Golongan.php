<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "golongan".
 *
 * @property int $id_golobat
 * @property string $nama_obat
 */
class Golongan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'golongan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat'], 'required'],
            [['nama_obat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_golobat' => 'Id Golobat',
            'nama_obat' => 'Nama Obat',
        ];
    }
}
