<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\WilayahKlinik;

/**
 * WilayahKlinikSearch represents the model behind the search form of `common\models\WilayahKlinik`.
 */
class WilayahKlinikSearch extends WilayahKlinik
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_wilayahklinik'], 'integer'],
            [['id_wilayah', 'nama_klinik', 'alamat_klinik', 'nomer_telpklinik'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = WilayahKlinik::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_wilayahklinik' => $this->id_wilayahklinik,
            'nomer_telpklinik' => $this->nomer_telpklinik,
        ]);

        $query->andFilterWhere(['like', 'id_wilayah', $this->id_wilayah])
            ->andFilterWhere(['like', 'nama_klinik', $this->nama_klinik])
            ->andFilterWhere(['like', 'alamat_klinik', $this->alamat_klinik]);

        return $dataProvider;
    }
}
