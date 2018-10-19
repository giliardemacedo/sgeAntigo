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
<<<<<<< HEAD
            [['idescoteiro', 'idsecao', 'idcontato', 'idendereco', 'estado'], 'integer'],
=======
            [['idescoteiro', 'idgrupo', 'idramo', 'idtropa', 'idpatrulha', 'estado'], 'integer'],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            [['nome', 'nascimento', 'cpf', 'rg', 'sexo', 'registroueb'], 'safe'],
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
<<<<<<< HEAD
            'idsecao' => $this->idsecao,
            'idcontato' => $this->idcontato,
            'idendereco' => $this->idendereco,
=======
            'idgrupo' => $this->idgrupo,
            'idramo' => $this->idramo,
            'idtropa' => $this->idtropa,
            'idpatrulha' => $this->idpatrulha,
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            'nascimento' => $this->nascimento,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cpf', $this->cpf])
            ->andFilterWhere(['like', 'rg', $this->rg])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'registroueb', $this->registroueb]);

        return $dataProvider;
    }
}
