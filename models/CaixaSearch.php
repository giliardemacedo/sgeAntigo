<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Caixa;

/**
 * CaixaSearch represents the model behind the search form of `app\models\Caixa`.
 */
class CaixaSearch extends Caixa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idcaixa', 'idgrupo'], 'integer'],
            [['valor'], 'number'],
            [['data', 'responsavel', 'descricao', 'comprovante'], 'safe'],
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
        $query = Caixa::find();

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
            'idcaixa' => $this->idcaixa,
            'idgrupo' => $this->idgrupo,
            'valor' => $this->valor,
            'data' => $this->data,
        ]);

        $query->andFilterWhere(['like', 'responsavel', $this->responsavel])
            ->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'comprovante', $this->comprovante]);

        return $dataProvider;
    }
}
