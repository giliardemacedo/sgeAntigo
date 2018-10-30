<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Escoteiro;

/**
 * EscoteiroSearch represents the model behind the search form of `app\models\Escoteiro`.
 */
class EscoteiroSearch extends Escoteiro
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idescoteiro', 'endereco_idendereco', 'contato_idcontato'], 'integer'],
            [['nome', 'nascimento', 'cpf', 'rg', 'sexo', 'registro_ueb', 'estado', 'encargo_patrulha', 'chefe', 'categoria_chefe'], 'safe'],
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
        $query = Escoteiro::find();

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
            'idescoteiro' => $this->idescoteiro,
            'nascimento' => $this->nascimento,
            'endereco_idendereco' => $this->endereco_idendereco,
            'contato_idcontato' => $this->contato_idcontato,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'rg', $this->rg])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'registro_ueb', $this->registro_ueb])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'encargo_patrulha', $this->encargo_patrulha])
            ->andFilterWhere(['like', 'chefe', $this->chefe])
            ->andFilterWhere(['like', 'categoria_chefe', $this->categoria_chefe]);

        return $dataProvider;
    }
}
