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
<<<<<<< HEAD
            [['idpatrulha', 'tropa_idtropa', 'tropa_secao_idsecao'], 'integer'],
            [['nome', 'grito_guerra'], 'safe'],
=======
<<<<<<< HEAD
            [['idpatrulha', 'idtropa', 'idsecao'], 'integer'],
=======
            [['idpatrulha', 'idtropa'], 'integer'],
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
            [['nome', 'cores', 'gritodeguerra'], 'safe'],
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452
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
<<<<<<< HEAD
            'tropa_idtropa' => $this->tropa_idtropa,
            'tropa_secao_idsecao' => $this->tropa_secao_idsecao,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'grito_guerra', $this->grito_guerra]);
=======
            'idtropa' => $this->idtropa,
<<<<<<< HEAD
            'idsecao' => $this->idsecao,
=======
>>>>>>> b938ba62695bf55610eb244efd4a476152299ad9
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cores', $this->cores])
            ->andFilterWhere(['like', 'gritodeguerra', $this->gritodeguerra]);
>>>>>>> 2a00d7fa99bedd462f3295d17d524fdd5f7ee452

        return $dataProvider;
    }
}
