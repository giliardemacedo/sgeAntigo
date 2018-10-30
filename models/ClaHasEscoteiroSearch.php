<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ClaHasEscoteiro;

/**
 * ClaHasEscoteiroSearch represents the model behind the search form of `app\models\ClaHasEscoteiro`.
 */
class ClaHasEscoteiroSearch extends ClaHasEscoteiro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cla_idcla', 'cla_secao_idsecao', 'escoteiro_idescoteiro'], 'integer'],
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
        $query = ClaHasEscoteiro::find();

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
            'cla_idcla' => $this->cla_idcla,
            'cla_secao_idsecao' => $this->cla_secao_idsecao,
            'escoteiro_idescoteiro' => $this->escoteiro_idescoteiro,
        ]);

        return $dataProvider;
    }
}
