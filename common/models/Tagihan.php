<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tagihan".
 *
 * @property int $id_tagihan
 * @property string $tgl_transaksi
 * @property int $nominal_tagihan
 * @property int $tot_tagihan
 */
class Tagihan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tagihan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_transaksi', 'nominal_tagihan', 'tot_tagihan'], 'required'],
            [['nominal_tagihan', 'tot_tagihan'], 'integer'],
            [['tgl_transaksi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tagihan' => 'Id Tagihan',
            'tgl_transaksi' => 'Tanggal Transaksi',
            'nominal_tagihan' => 'Nominal Tagihan',
            'tot_tagihan' => 'Total Tagihan',
        ];
    }
}
