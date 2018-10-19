<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Patrulha;

/**
 * PatrulhaSearch represents the model behind the search form of `app\models\Patrulha`.
 */
class PatrulhaSearch extends Patrulha
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpatrulha', 'idtropa', 'idsecao'], 'integer'],
            [['nome', 'cores', 'gritodeguerra'], 'safe'],
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
        $query = Patrulha::find();

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
            'idpatrulha' => $this->idpatrulha,
            'idtropa' => $this->idtropa,
            'idsecao' => $this->idsecao,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cores', $this->cores])
            ->andFilterWhere(['like', 'gritodeguerra', $this->gritodeguerra]);

        return $dataProvider;
    }
}
