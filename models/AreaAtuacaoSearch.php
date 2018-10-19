<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AreaAtuacao;

/**
 * AreaAtuacaoSearch represents the model behind the search form of `app\models\AreaAtuacao`.
 */
class AreaAtuacaoSearch extends AreaAtuacao
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
<<<<<<< HEAD
            [['idarea_atuacao'], 'integer'],
=======
            [['idareaatuacao', 'idatividade', 'quantidade'], 'integer'],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            [['nome'], 'safe'],
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
        $query = AreaAtuacao::find();

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
<<<<<<< HEAD
            'idarea_atuacao' => $this->idarea_atuacao,
=======
            'idareaatuacao' => $this->idareaatuacao,
            'idatividade' => $this->idatividade,
            'quantidade' => $this->quantidade,
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome]);

        return $dataProvider;
    }
}
