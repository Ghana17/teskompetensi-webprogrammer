<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tagihan;

/**
 * TagihanSearch represents the model behind the search form of `common\models\Tagihan`.
 */
class TagihanSearch extends Tagihan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tagihan', 'nominal_tagihan', 'tot_tagihan'], 'integer'],
            [['tgl_transaksi'], 'safe'],
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
        $query = Tagihan::find();

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
            'id_tagihan' => $this->id_tagihan,
            'nominal_tagihan' => $this->nominal_tagihan,
            'tot_tagihan' => $this->tot_tagihan,
        ]);

        $query->andFilterWhere(['like', 'tgl_transaksi', $this->tgl_transaksi]);

        return $dataProvider;
    }
}
